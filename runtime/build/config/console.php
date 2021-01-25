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
    'Yiisoft\\Cache\\CacheInterface' => 'Yiisoft\\Cache\\Cache',
    'Psr\\SimpleCache\\CacheInterface' => 'Yiisoft\\Cache\\File\\FileCache',
    'Yiisoft\\Cache\\File\\FileCache' => static fn (\Yiisoft\Aliases\Aliases $aliases) => new \Yiisoft\Cache\File\FileCache(
        $aliases->get($params['yiisoft/cache-file']['fileCache']['path'])
    ),
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
    'Yiisoft\\Router\\RouteCollectorInterface' => \Opis\Closure\unserialize("O:20:\"Yiisoft\\Router\\Group\":4:{s:8:\"\x00*\x00items\";a:0:{}s:9:\"\x00*\x00prefix\";N;s:14:\"\x00*\x00middlewares\";a:0:{}s:32:\"\x00Yiisoft\\Router\\Group\x00dispatcher\";N;}"),
    'Yiisoft\\Router\\UrlGeneratorInterface' => [
        '__class' => 'Yiisoft\\Router\\FastRoute\\UrlGenerator',
        'setEncodeRaw()' => [true],
    ],
    'Yiisoft\\View\\View' => [
        '__class' => 'Yiisoft\\View\\View',
        '__construct()' => [
            'basePath' => fn (\Yiisoft\Aliases\Aliases $aliases) => $aliases->get($params['yiisoft/view']['basePath']),
        ],
    ],
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
    'Yiisoft\\EventDispatcher\\Provider\\ListenerCollection' => static fn (\Yiisoft\Yii\Event\ListenerCollectionFactory $factory) => $factory->create(require \Yiisoft\Composer\Config\Builder::path('events-console')),
    'Symfony\\Component\\Console\\CommandLoader\\CommandLoaderInterface' => [
        '__class' => 'Yiisoft\\Yii\\Console\\CommandLoader',
        '__construct()' => [
            'commandMap' => [
                'hello' => 'App\\Command\\Hello',
                'serve' => 'Yiisoft\\Yii\\Console\\Command\\Serve',
            ],
        ],
    ],
    'Yiisoft\\Yii\\Console\\Application' => [
        '__class' => 'Yiisoft\\Yii\\Console\\Application',
        'setDispatcher()' => [
            \Opis\Closure\unserialize("O:37:\"Yiisoft\\Factory\\Definitions\\Reference\":1:{s:41:\"\x00Yiisoft\\Factory\\Definitions\\Reference\x00id\";s:42:\"Yiisoft\\Yii\\Console\\SymfonyEventDispatcher\";}"),
        ],
        'setCommandLoader()' => [
            \Opis\Closure\unserialize("O:37:\"Yiisoft\\Factory\\Definitions\\Reference\":1:{s:41:\"\x00Yiisoft\\Factory\\Definitions\\Reference\x00id\";s:62:\"Symfony\\Component\\Console\\CommandLoader\\CommandLoaderInterface\";}"),
        ],
        'addOptions()' => [
            \Opis\Closure\unserialize("O:43:\"Symfony\\Component\\Console\\Input\\InputOption\":5:{s:49:\"\x00Symfony\\Component\\Console\\Input\\InputOption\x00name\";s:6:\"config\";s:53:\"\x00Symfony\\Component\\Console\\Input\\InputOption\x00shortcut\";N;s:49:\"\x00Symfony\\Component\\Console\\Input\\InputOption\x00mode\";i:2;s:52:\"\x00Symfony\\Component\\Console\\Input\\InputOption\x00default\";N;s:56:\"\x00Symfony\\Component\\Console\\Input\\InputOption\x00description\";s:34:\"Set alternative configuration name\";}"),
        ],
        'setName()' => ['Yii Console'],
        'setVersion()' => ['3.0'],
        'setAutoExit()' => [false],
    ],
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
                \array_merge($params['collectors'], $params['collectors.console'] ?? [])
            )
        );
    },
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
];
