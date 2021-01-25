<?php

$baseDir = dirname(__DIR__, 3);

$_ENV = array_merge((array) require __DIR__ . '/envs.php', $_ENV);



$params = (array) require __DIR__ . '/params.php';

return [
    'Yiisoft\\Aliases\\Aliases' => [
        '__class' => 'Yiisoft\\Aliases\\Aliases',
        '__construct()' => [
            [
                '@root' => 'D:\\yii_template',
                '@assets' => '@root/public/assets',
                '@assetsUrl' => '/assets',
                '@npm' => '@root/node_modules',
                '@public' => '@root/public',
                '@resources' => '@root/resources',
                '@runtime' => '@root/runtime',
                '@views' => '@root/resources/views',
                '@message' => '@root/resources/message',
                '@vendor' => '@root/vendor',
                '@bower' => '@vendor/bower-asset',
                '@baseUrl' => '/',
            ],
        ],
    ],
    'Yiisoft\\Assets\\AssetConverterInterface' => [
        '__class' => 'Yiisoft\\Assets\\AssetConverter',
        'setCommand()' => ['scss', 'css', '@npm/.bin/sass {options} {from} {to}'],
        'setForceConvert()' => [false],
    ],
    'Yiisoft\\Assets\\AssetPublisherInterface' => [
        '__class' => 'Yiisoft\\Assets\\AssetPublisher',
        'setAppendTimestamp()' => [false],
        'setAssetMap()' => [[]],
        'setBasePath()' => [null],
        'setBaseUrl()' => [null],
        'setForceCopy()' => [false],
        'setLinkAssets()' => [false],
    ],
    'Yiisoft\\Assets\\AssetManager' => [
        '__class' => 'Yiisoft\\Assets\\AssetManager',
        'setConverter()' => [
            \Opis\Closure\unserialize("O:37:\"Yiisoft\\Factory\\Definitions\\Reference\":1:{s:41:\"\x00Yiisoft\\Factory\\Definitions\\Reference\x00id\";s:38:\"Yiisoft\\Assets\\AssetConverterInterface\";}"),
        ],
        'setPublisher()' => [
            \Opis\Closure\unserialize("O:37:\"Yiisoft\\Factory\\Definitions\\Reference\":1:{s:41:\"\x00Yiisoft\\Factory\\Definitions\\Reference\x00id\";s:38:\"Yiisoft\\Assets\\AssetPublisherInterface\";}"),
        ],
        'setBundles()' => [[]],
        'register()' => [[]],
    ],
    'Yiisoft\\Cache\\CacheInterface' => 'Yiisoft\\Cache\\Cache',
    'Psr\\SimpleCache\\CacheInterface' => 'Yiisoft\\Cache\\File\\FileCache',
    'Yiisoft\\Cache\\File\\FileCache' => static fn (\Yiisoft\Aliases\Aliases $aliases) => new \Yiisoft\Cache\File\FileCache(
        $aliases->get($params['yiisoft/cache-file']['fileCache']['path'])
    ),
    'Yiisoft\\Session\\SessionInterface' => [
        '__class' => 'Yiisoft\\Session\\Session',
        '__construct()' => [
            [
                'cookie_secure' => 0,
            ],
            null,
        ],
    ],
    'Yiisoft\\Session\\Flash\\FlashInterface' => 'Yiisoft\\Session\\Flash\\Flash',
    'Yiisoft\\Csrf\\CsrfTokenInterface' => [
        '__class' => 'Yiisoft\\Csrf\\MaskedCsrfToken',
        '__construct()' => [
            'token' => \Opis\Closure\unserialize("O:37:\"Yiisoft\\Factory\\Definitions\\Reference\":1:{s:41:\"\x00Yiisoft\\Factory\\Definitions\\Reference\x00id\";s:47:\"Yiisoft\\Csrf\\Synchronizer\\SynchronizerCsrfToken\";}"),
        ],
    ],
    'Yiisoft\\Csrf\\Synchronizer\\SynchronizerCsrfToken' => [
        '__construct()' => [
            'generator' => \Opis\Closure\unserialize("O:37:\"Yiisoft\\Factory\\Definitions\\Reference\":1:{s:41:\"\x00Yiisoft\\Factory\\Definitions\\Reference\x00id\";s:60:\"Yiisoft\\Csrf\\Synchronizer\\Generator\\RandomCsrfTokenGenerator\";}"),
            'storage' => \Opis\Closure\unserialize("O:37:\"Yiisoft\\Factory\\Definitions\\Reference\":1:{s:41:\"\x00Yiisoft\\Factory\\Definitions\\Reference\x00id\";s:57:\"Yiisoft\\Csrf\\Synchronizer\\Storage\\SessionCsrfTokenStorage\";}"),
        ],
    ],
    'Yiisoft\\Csrf\\Hmac\\HmacCsrfToken' => [
        '__construct()' => [
            'identityGenerator' => \Opis\Closure\unserialize("O:37:\"Yiisoft\\Factory\\Definitions\\Reference\":1:{s:41:\"\x00Yiisoft\\Factory\\Definitions\\Reference\x00id\";s:69:\"Yiisoft\\Csrf\\Hmac\\IdentityGenerator\\SessionCsrfTokenIdentityGenerator\";}"),
            'secretKey' => '',
            'algorithm' => 'sha256',
            'lifetime' => null,
        ],
    ],
    'Yiisoft\\DataResponse\\DataResponseFormatterInterface' => 'Yiisoft\\DataResponse\\Formatter\\HtmlDataResponseFormatter',
    'Yiisoft\\DataResponse\\DataResponseFactoryInterface' => 'Yiisoft\\DataResponse\\DataResponseFactory',
    'Yiisoft\\ErrorHandler\\HtmlRenderer' => [
        '__class' => 'Yiisoft\\ErrorHandler\\HtmlRenderer',
        '__construct()' => [
            [
                'default' => ['callStackItem', 'error', 'exception', 'previousException'],
            ],
        ],
    ],
    'Yiisoft\\ErrorHandler\\ThrowableRendererInterface' => 'Yiisoft\\ErrorHandler\\HtmlRenderer',
    'Yiisoft\\ErrorHandler\\ExceptionResponder' => [
        '__construct()' => [
            'exceptionMap' => [],
        ],
    ],
    'Psr\\Log\\LoggerInterface' => static fn (\Yiisoft\Log\Target\File\FileTarget $fileTarget) => new \Yiisoft\Log\Logger([$fileTarget]),
    'Yiisoft\\Log\\Target\\File\\FileRotatorInterface' => [
        '__class' => 'Yiisoft\\Log\\Target\\File\\FileRotator',
        '__construct()' => [10, 5, null, null, false],
    ],
    'Yiisoft\\Log\\Target\\File\\FileTarget' => static function (\Yiisoft\Aliases\Aliases $aliases, \Yiisoft\Log\Target\File\FileRotatorInterface $fileRotator) use ($params) {
        $fileTarget = new \Yiisoft\Log\Target\File\FileTarget(
            $aliases->get($params['yiisoft/log-target-file']['fileTarget']['file']),
            $fileRotator,
            $params['yiisoft/log-target-file']['fileTarget']['dirMode'],
            $params['yiisoft/log-target-file']['fileTarget']['fileMode'],
        );

        $fileTarget->setLevels($params['yiisoft/log-target-file']['fileTarget']['levels']);

        return $fileTarget;
    },
    'Yiisoft\\Middleware\\Dispatcher\\MiddlewareStackInterface' => 'Yiisoft\\Middleware\\Dispatcher\\MiddlewareStack',
    'Yiisoft\\Middleware\\Dispatcher\\MiddlewareFactoryInterface' => 'Yiisoft\\Middleware\\Dispatcher\\MiddlewareFactory',
    'Yiisoft\\Router\\RouteCollectorInterface' => \Opis\Closure\unserialize("O:20:\"Yiisoft\\Router\\Group\":4:{s:8:\"\x00*\x00items\";a:0:{}s:9:\"\x00*\x00prefix\";N;s:14:\"\x00*\x00middlewares\";a:0:{}s:32:\"\x00Yiisoft\\Router\\Group\x00dispatcher\";N;}"),
    'Yiisoft\\Router\\UrlGeneratorInterface' => [
        '__class' => 'Yiisoft\\Router\\FastRoute\\UrlGenerator',
        'setEncodeRaw()' => [true],
    ],
    'Yiisoft\\Router\\UrlMatcherInterface' => static function (\Yiisoft\Injector\Injector $injector) use ($params) {
        $enableCache = $params['yiisoft/router']['enableCache'] ?? true;

        $arguments = [];
        if ($enableCache === false) {
            $arguments['cache'] = null;
        }
        return $injector->make(\Yiisoft\Router\FastRoute\UrlMatcher::class, $arguments);
    },
    'Yiisoft\\View\\Theme' => static function (\Yiisoft\Aliases\Aliases $aliases) use ($params) {
        $pathMap = [];

        foreach ($params['yiisoft/view']['theme']['pathMap'] as $key => $value) {
            $pathMap[$aliases->get($key)] = $aliases->get($value);
        }

        return new \Yiisoft\View\Theme(
            $pathMap,
            $params['yiisoft/view']['theme']['basePath'],
            $params['yiisoft/view']['theme']['baseUrl']
        );
    },
    'Yiisoft\\View\\WebView' => [
        '__class' => 'Yiisoft\\View\\WebView',
        '__construct()' => [
            'basePath' => static fn (\Yiisoft\Aliases\Aliases $aliases) => $aliases->get($params['yiisoft/view']['basePath']),
        ],
        'setDefaultParameters()' => [[]],
    ],
    'Yiisoft\\Form\\Widget\\Field' => fn () => \Yiisoft\Form\Widget\Field::Widget($params['yiisoft/form']['bulma']['fieldConfig']),
    'Yiisoft\\Profiler\\ProfilerInterface' => static function (\Psr\Container\ContainerInterface $container, \Psr\Log\LoggerInterface $logger) use ($params) {
        $params = $params['yiisoft/profiler'];
        $targets = [];
        foreach ($params['targets'] as $target => $targetParams) {
            $targets[] = $container->get($target);
        }
        return new \Yiisoft\Profiler\Profiler($logger, $targets);
    },
    'Yiisoft\\Profiler\\Target\\LogTarget' => static function (\Psr\Log\LoggerInterface $logger) use ($params) {
        $params = $params['yiisoft/profiler']['targets'][\Yiisoft\Profiler\Target\LogTarget::class];
        $target = new \Yiisoft\Profiler\Target\LogTarget($logger, $params['level']);

        if ((bool)$params['enabled']) {
            $target = $target->enable();
        } else {
            $target = $target->disable();
        }
        return $target->include($params['include'])->exclude($params['exclude']);
    },
    'Yiisoft\\Profiler\\Target\\FileTarget' => static function (\Yiisoft\Aliases\Aliases $aliases) use ($params) {
        $params = $params['yiisoft/profiler']['targets'][\Yiisoft\Profiler\Target\FileTarget::class];
        $target = new \Yiisoft\Profiler\Target\FileTarget($aliases->get($params['filename']), $params['directoryMode']);

        if ((bool)$params['enabled']) {
            $target = $target->enable();
        } else {
            $target = $target->disable();
        }
        return $target->include($params['include'])->exclude($params['exclude']);
    },
    'Psr\\EventDispatcher\\EventDispatcherInterface' => 'Yiisoft\\EventDispatcher\\Dispatcher\\Dispatcher',
    'Psr\\EventDispatcher\\ListenerProviderInterface' => 'Yiisoft\\EventDispatcher\\Provider\\Provider',
    'Yiisoft\\EventDispatcher\\Provider\\ListenerCollection' => static fn (\Yiisoft\Yii\Event\ListenerCollectionFactory $factory) => $factory->create(require \Yiisoft\Composer\Config\Builder::path('events-web')),
    'Yiisoft\\Yii\\Filesystem\\FilesystemInterface' => static function () use ($params) {
        $aliases = $params['yiisoft/aliases']['aliases'] ?? [];
        if (!isset($aliases['@root'])) {
            throw new \RuntimeException('Alias of the root directory is not defined.');
        }

        $adapter = new \League\Flysystem\Local\LocalFilesystemAdapter(
            $aliases['@root'],
            \League\Flysystem\UnixVisibility\PortableVisibilityConverter::fromArray([
                'file' => [
                    'public' => 0644,
                    'private' => 0600,
                ],
                'dir' => [
                    'public' => 0755,
                    'private' => 0700,
                ],
            ]),
            LOCK_EX,
            \League\Flysystem\Local\LocalFilesystemAdapter::DISALLOW_LINKS
        );

        return new \Yiisoft\Yii\Filesystem\Filesystem($adapter, $aliases);
    },
    'Yiisoft\\Yii\\Filesystem\\FileStorageConfigs' => static fn () => new \Yiisoft\Yii\Filesystem\FileStorageConfigs($params['file.storage'] ?? []),
    'Yiisoft\\Validator\\ValidatorInterface' => 'Yiisoft\\Validator\\Validator',
    'Yiisoft\\Validator\\FormatterInterface' => 'Yiisoft\\Validator\\Formatter',
    'Yiisoft\\Yii\\Debug\\Collector\\LogCollectorInterface' => 'Yiisoft\\Yii\\Debug\\Collector\\LogCollector',
    'Yiisoft\\Yii\\Debug\\Collector\\EventCollectorInterface' => 'Yiisoft\\Yii\\Debug\\Collector\\EventCollector',
    'Yiisoft\\Yii\\Debug\\Collector\\ServiceCollectorInterface' => 'Yiisoft\\Yii\\Debug\\Collector\\ServiceCollector',
    'Yiisoft\\Container\\Proxy\\ContainerProxyInterface' => 'Yiisoft\\Yii\\Debug\\Proxy\\ContainerProxy',
    'Yiisoft\\Yii\\Debug\\Proxy\\ContainerProxyConfig' => static function (\Psr\Container\ContainerInterface $container) use ($params) {
        $params = $params['yiisoft/yii-debug'];
        $collector = $container->get(\Yiisoft\Yii\Debug\Collector\ServiceCollectorInterface::class);
        $dispatcher = $container->get(\Psr\EventDispatcher\EventDispatcherInterface::class);
        $debuggerEnabled = (bool)($params['enabled'] ?? false);
        $trackedServices = (array)($params['trackedServices'] ?? []);
        $path = $container->get(\Yiisoft\Aliases\Aliases::class)->get('@runtime/cache/container-proxy');
        $logLevel = $params['logLevel'] ?? 0;
        return new \Yiisoft\Yii\Debug\Proxy\ContainerProxyConfig(
            $debuggerEnabled,
            $trackedServices,
            $dispatcher,
            $collector,
            $path,
            $logLevel
        );
    },
    'Yiisoft\\Yii\\Debug\\Storage\\StorageInterface' => static function (\Psr\Container\ContainerInterface $container) use ($params) {
        $params = $params['yiisoft/yii-debug'];
        $filesystem = $container->get(\Yiisoft\Yii\Filesystem\FilesystemInterface::class);
        $debuggerIdGenerator = $container->get(\Yiisoft\Yii\Debug\DebuggerIdGenerator::class);
        $aliases = $container->get(\Yiisoft\Aliases\Aliases::class);
        $fileStorage = new \Yiisoft\Yii\Debug\Storage\FileStorage($params['path'], $filesystem, $debuggerIdGenerator, $aliases);
        if (isset($params['historySize'])) {
            $fileStorage->setHistorySize((int)$params['historySize']);
        }
        return $fileStorage;
    },
    'Yiisoft\\Yii\\Debug\\Debugger' => static function (\Psr\Container\ContainerInterface $container) use ($params) {
        $params = $params['yiisoft/yii-debug'];
        return new \Yiisoft\Yii\Debug\Debugger(
            $container->get(\Yiisoft\Yii\Debug\DebuggerIdGenerator::class),
            $container->get(\Yiisoft\Yii\Debug\Storage\StorageInterface::class),
            \array_map(
                static fn ($class) => $container->get($class),
                \array_merge($params['collectors'], $params['collectors.web'] ?? [])
            ),
            $params['optionalRequests']
        );
    },
    'Yiisoft\\Yii\\View\\ViewRenderer' => [
        '__construct()' => [
            'viewBasePath' => '@views',
            'layout' => '@resources/layout/main',
            'injections' => [
                \Opis\Closure\unserialize("O:37:\"Yiisoft\\Factory\\Definitions\\Reference\":1:{s:41:\"\x00Yiisoft\\Factory\\Definitions\\Reference\x00id\";s:38:\"App\\ViewInjection\\ContentViewInjection\";}"),
                \Opis\Closure\unserialize("O:37:\"Yiisoft\\Factory\\Definitions\\Reference\":1:{s:41:\"\x00Yiisoft\\Factory\\Definitions\\Reference\x00id\";s:34:\"Yiisoft\\Yii\\View\\CsrfViewInjection\";}"),
                \Opis\Closure\unserialize("O:37:\"Yiisoft\\Factory\\Definitions\\Reference\":1:{s:41:\"\x00Yiisoft\\Factory\\Definitions\\Reference\x00id\";s:37:\"App\\ViewInjection\\LayoutViewInjection\";}"),
            ],
        ],
    ],
    'Yiisoft\\Yii\\Debug\\Api\\Repository\\CollectorRepositoryInterface' => static fn (\Yiisoft\Yii\Debug\Storage\StorageInterface $storage) => new \Yiisoft\Yii\Debug\Api\Repository\CollectorRepository($storage),
    'App\\ApplicationParameters' => [
        '__class' => 'App\\ApplicationParameters',
        'charset()' => ['UTF-8'],
        'name()' => ['My Project'],
    ],
    'Yiisoft\\I18n\\Locale' => [
        'class' => 'Yiisoft\\I18n\\Locale',
        '__construct()' => ['en'],
    ],
    'Yiisoft\\Router\\RouteCollectionInterface' => static function (\Yiisoft\Router\RouteCollectorInterface $collector) {
        $collector->addGroup(
            \Yiisoft\Router\Group::create(null, require \Yiisoft\Composer\Config\Builder::path('routes'))
                ->addMiddleware(\Yiisoft\DataResponse\Middleware\FormatDataResponse::class)
        );

        return new \Yiisoft\Router\RouteCollection($collector);
    },
    'Yiisoft\\Yii\\Web\\Application' => [
        '__construct()' => [
            'dispatcher' => static function (\Yiisoft\Injector\Injector $injector) {
                return ($injector->make(\Yiisoft\Middleware\Dispatcher\MiddlewareDispatcher::class))
                    ->withMiddlewares(
                        [
                            \Yiisoft\Router\Middleware\Router::class,
                            \Yiisoft\Csrf\CsrfMiddleware::class,
                            \Yiisoft\Session\SessionMiddleware::class,
                            \Yiisoft\ErrorHandler\ErrorCatcher::class,
                        ]
                    );
            },
            'fallbackHandler' => \Opis\Closure\unserialize("O:37:\"Yiisoft\\Factory\\Definitions\\Reference\":1:{s:41:\"\x00Yiisoft\\Factory\\Definitions\\Reference\x00id\";s:27:\"App\\Handler\\NotFoundHandler\";}"),
        ],
    ],
    'Psr\\Http\\Message\\RequestFactoryInterface' => 'HttpSoft\\Message\\RequestFactory',
    'Psr\\Http\\Message\\ServerRequestFactoryInterface' => 'HttpSoft\\Message\\ServerRequestFactory',
    'Psr\\Http\\Message\\ResponseFactoryInterface' => 'HttpSoft\\Message\\ResponseFactory',
    'Psr\\Http\\Message\\StreamFactoryInterface' => 'HttpSoft\\Message\\StreamFactory',
    'Psr\\Http\\Message\\UriFactoryInterface' => 'HttpSoft\\Message\\UriFactory',
    'Psr\\Http\\Message\\UploadedFileFactoryInterface' => 'HttpSoft\\Message\\UploadedFileFactory',
];
