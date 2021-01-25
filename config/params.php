<?php

declare(strict_types=1);

use App\ApplicationParameters;
use App\Command\Hello;
use App\ViewInjection\ContentViewInjection;
use App\ViewInjection\LayoutViewInjection;
use Yiisoft\Arrays\Modifier\ReverseBlockMerge;
use Yiisoft\Assets\AssetManager;
use Yiisoft\Factory\Definitions\Reference;
use Yiisoft\Form\Widget\Field;
use Yiisoft\Router\UrlGeneratorInterface;
use Yiisoft\Router\UrlMatcherInterface;
use Yiisoft\Yii\View\CsrfViewInjection;
use Cycle\Schema\Generator;

return [
    'app' => [
        'charset' => 'UTF-8',
        'locale' => 'en',
        'name' => 'Test Project',
    ],

    'yiisoft/aliases' => [
        'aliases' => [
            '@root' => dirname(__DIR__),
            '@assets' => '@root/public/assets',
            '@assetsUrl' => '/assets',
            '@npm' => '@root/node_modules',
            '@public' => '@root/public',
            '@resources' => '@root/resources',
            '@runtime' => '@root/runtime',
            '@views' => '@root/resources/views',
            '@message' => '@root/resources/message',
            '@src' => '@root/src',
        ],
    ],

    'yiisoft/view' => [
        'basePath' => '@views',
        'defaultParameters' => [
            'assetManager' => Reference::to(AssetManager::class),
            'urlGenerator' => Reference::to(UrlGeneratorInterface::class),
            'urlMatcher' => Reference::to(UrlMatcherInterface::class),
        ],
    ],

    'yiisoft/yii-console' => [
        'commands' => [
            'hello' => Hello::class,
        ],
    ],

    'yiisoft/yii-debug' => [
        'enabled' => true,
    ],

    'yiisoft/yii-view' => [
        'viewBasePath' => '@views',
        'layout' => '@resources/layout/main',
        'injections' => [
            Reference::to(ContentViewInjection::class),
            Reference::to(CsrfViewInjection::class),
            Reference::to(LayoutViewInjection::class),
        ],
    ],

    'yiisoft/router' => [
        'enableCache' => false,
    ],

    'yiisoft/yii-cycle' => [
        // Конфиг Cycle DBAL
        'dbal' => [
            /**
             * Логгер SQL запросов
             * Вы можете использовать класс {@see \Yiisoft\Yii\Cycle\Logger\StdoutQueryLogger}, чтобы выводить SQL лог
             * в stdout, или любой другой PSR-совместимый логгер
             */
            'query-logger' => null,
            // БД по умолчанию (из списка 'databases')
            'default' => 'default',
            'aliases' => [],
            'databases' => [
                'default' => ['connection' => 'sqlite']
            ],
            'connections' => [
                // Пример настроек подключения к SQLite:
                'sqlite' => [
                    'driver' => \Spiral\Database\Driver\SQLite\SQLiteDriver::class,
                    // Синтаксис подключения описан в https://www.php.net/manual/pdo.construct.php, смотрите DSN
                    'connection' => 'sqlite:@runtime/database.db',
                    'username' => '',
                    'password' => '',
                ]
            ],
        ],

        // Конфиг миграций
        'migrations' => [
            'directory' => '@root/migrations',
            'namespace' => 'App\\Migration',
            'table' => 'migration',
            'safe' => false,
        ],

        /**
         * Конфиг для фабрики ORM {@see \Yiisoft\Yii\Cycle\Factory\OrmFactory}
         * Указывается определение класса {@see \Cycle\ORM\PromiseFactoryInterface} или null.
         * Документация: @link https://github.com/cycle/docs/blob/master/advanced/promise.md
         */
        'orm-promise-factory' => null,

        /**
         * Список поставщиков схемы БД для {@see \Yiisoft\Yii\Cycle\Schema\Provider\Support\SchemaProviderPipeline}
         * Поставщики схемы реализуют класс {@see SchemaProviderInterface}.
         * Конфигурируется перечислением имён классов поставщиков. Вы здесь можете конфигурировать также и поставщиков,
         * указывая имя класса поставщика в качестве ключа элемента, а конфиг в виде массива элемента:
         */
        'schema-providers' => [
            \Yiisoft\Yii\Cycle\Schema\Provider\SimpleCacheSchemaProvider::class => [
                'key' => 'my-custom-cache-key'
            ],
            \Yiisoft\Yii\Cycle\Schema\Provider\FromFilesSchemaProvider::class => [
                'files' => ['@runtime/cycle-schema.php']
            ],
            \Yiisoft\Yii\Cycle\Schema\Provider\FromConveyorSchemaProvider::class,
        ],

        /**
         * Настройка для класса {@see \Yiisoft\Yii\Cycle\Schema\Conveyor\AnnotatedSchemaConveyor}
         * Здесь указывается список папок с сущностями.
         * В путях поддерживаются псевдонимы {@see \Yiisoft\Aliases\Aliases}.
         */
        'annotated-entity-paths' => [
            '@src/Entity'
        ],
    ],
    ReverseBlockMerge::class => new ReverseBlockMerge(),
];
