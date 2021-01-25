<?php

$baseDir = dirname(__DIR__, 3);

$_ENV = array_merge((array) require __DIR__ . '/envs.php', $_ENV);





return [
    'app' => [
        'charset' => 'UTF-8',
        'locale' => 'en',
        'name' => 'My Project',
    ],
    'yiisoft/aliases' => [
        'aliases' => [
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
    'yiisoft/view' => [
        'basePath' => '@views',
        'defaultParameters' => [],
        'theme' => [
            'pathMap' => [],
            'basePath' => '',
            'baseUrl' => '',
        ],
    ],
    'yiisoft/yii-console' => [
        'commands' => [
            'hello' => 'App\\Command\\Hello',
            'serve' => 'Yiisoft\\Yii\\Console\\Command\\Serve',
        ],
        'id' => 'yii-console',
        'name' => 'Yii Console',
        'autoExit' => false,
        'version' => '3.0',
        'rebuildConfig' => static fn () => \getenv('APP_ENV') !== 'prod',
    ],
    'yiisoft/yii-debug' => [
        'enabled' => true,
        'optionalRequests' => ['/debug*', '/assets/*'],
        'collectors' => [
            'Yiisoft\\Yii\\Debug\\Collector\\LogCollectorInterface',
            'Yiisoft\\Yii\\Debug\\Collector\\EventCollectorInterface',
            'Yiisoft\\Yii\\Debug\\Collector\\ServiceCollectorInterface',
        ],
        'collectors.web' => [
            'Yiisoft\\Yii\\Debug\\Collector\\WebAppInfoCollector',
            'Yiisoft\\Yii\\Debug\\Collector\\RequestCollector',
            'Yiisoft\\Yii\\Debug\\Collector\\RouterCollector',
            'Yiisoft\\Yii\\Debug\\Collector\\MiddlewareCollector',
        ],
        'collectors.console' => [
            'Yiisoft\\Yii\\Debug\\Collector\\ConsoleAppInfoCollector',
            'Yiisoft\\Yii\\Debug\\Collector\\CommandCollector',
        ],
        'trackedServices' => [
            'Psr\\Log\\LoggerInterface' => [
                'Yiisoft\\Yii\\Debug\\Proxy\\LoggerInterfaceProxy',
                'Yiisoft\\Yii\\Debug\\Collector\\LogCollectorInterface',
            ],
            'Psr\\EventDispatcher\\EventDispatcherInterface' => [
                'Yiisoft\\Yii\\Debug\\Proxy\\EventDispatcherInterfaceProxy',
                'Yiisoft\\Yii\\Debug\\Collector\\EventCollectorInterface',
            ],
        ],
        'logLevel' => 7,
        'path' => '@runtime/debug',
    ],
    'yiisoft/yii-view' => [
        'viewBasePath' => '@views',
        'layout' => '@resources/layout/main',
        'injections' => [
            \Opis\Closure\unserialize("O:37:\"Yiisoft\\Factory\\Definitions\\Reference\":1:{s:41:\"\x00Yiisoft\\Factory\\Definitions\\Reference\x00id\";s:38:\"App\\ViewInjection\\ContentViewInjection\";}"),
            \Opis\Closure\unserialize("O:37:\"Yiisoft\\Factory\\Definitions\\Reference\":1:{s:41:\"\x00Yiisoft\\Factory\\Definitions\\Reference\x00id\";s:34:\"Yiisoft\\Yii\\View\\CsrfViewInjection\";}"),
            \Opis\Closure\unserialize("O:37:\"Yiisoft\\Factory\\Definitions\\Reference\":1:{s:41:\"\x00Yiisoft\\Factory\\Definitions\\Reference\x00id\";s:37:\"App\\ViewInjection\\LayoutViewInjection\";}"),
        ],
    ],
    'yiisoft/router' => [
        'enableCache' => false,
        'encodeRaw' => true,
    ],
    'yiisoft/yii-debug-api' => [
        'enabled' => true,
        'allowedIPs' => ['127.0.0.1', '::1'],
        'allowedHosts' => [],
    ],
    'yiisoft/profiler' => [
        'targets' => [
            'Yiisoft\\Profiler\\Target\\LogTarget' => [
                'include' => [],
                'exclude' => [],
                'enabled' => true,
                'level' => 'debug',
            ],
            'Yiisoft\\Profiler\\Target\\FileTarget' => [
                'include' => [],
                'exclude' => [],
                'enabled' => false,
                'filename' => '@runtime/profiling/{date}-{time}.txt',
                'directoryMode' => 509,
            ],
        ],
    ],
    'yiisoft/form' => [
        'bulma' => [
            'enabled' => true,
            'fieldConfig' => [
                'inputCssClass()' => ['input field mb-1'],
                'labelOptions()' => [
                    [
                        'label' => '',
                    ],
                ],
                'errorOptions()' => [
                    [
                        'class' => 'help is-danger has-text-left is-italic mt-0 mb-2',
                    ],
                ],
                'errorCssClass()' => ['is-danger'],
                'successCssClass()' => ['is-success'],
            ],
        ],
    ],
    'yiisoft/log-target-file' => [
        'fileTarget' => [
            'file' => '@runtime/logs/app.log',
            'levels' => ['emergency', 'error', 'warning', 'info', 'debug'],
            'dirMode' => 493,
            'fileMode' => null,
        ],
        'fileRotator' => [
            'maxFileSize' => 10,
            'maxFiles' => 5,
            'fileMode' => null,
            'rotateByCopy' => null,
            'compressRotatedFiles' => false,
        ],
    ],
    'yiisoft/error-handler' => [
        'htmlRenderer' => [
            'templates' => [
                'default' => ['callStackItem', 'error', 'exception', 'previousException'],
            ],
        ],
        'exceptionResponder' => [
            'exceptionMap' => [],
        ],
    ],
    'yiisoft/csrf' => [
        'hmacToken' => [
            'secretKey' => '',
            'algorithm' => 'sha256',
            'lifetime' => null,
        ],
    ],
    'yiisoft/session' => [
        'session' => [
            'options' => [
                'cookie_secure' => 0,
            ],
            'handler' => null,
        ],
    ],
    'yiisoft/cache-file' => [
        'fileCache' => [
            'path' => '@runtime/cache',
        ],
    ],
    'yiisoft/assets' => [
        'assetConverter' => [
            'command' => [
                'from' => 'scss',
                'to' => 'css',
                'command' => '@npm/.bin/sass {options} {from} {to}',
            ],
            'forceConvert' => false,
        ],
        'assetPublisher' => [
            'appendTimestamp' => false,
            'assetMap' => [],
            'basePath' => null,
            'baseUrl' => null,
            'forceCopy' => false,
            'linkAssets' => false,
        ],
        'assetManager' => [
            'bundles' => [],
            'register' => [],
        ],
    ],
];
