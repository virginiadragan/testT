<?php

$baseDir = dirname(__DIR__, 3);

$_ENV = array_merge((array) require __DIR__ . '/envs.php', $_ENV);



$params = (array) require __DIR__ . '/params.php';

return [
    'Yiisoft\\Yii\\Web\\Event\\ApplicationStartup' => [['Yiisoft\\Yii\\Debug\\Collector\\WebAppInfoCollector', 'collect']],
    'Yiisoft\\Yii\\Web\\Event\\ApplicationShutdown' => [['Yiisoft\\Yii\\Debug\\Collector\\WebAppInfoCollector', 'collect']],
    'Yiisoft\\Yii\\Web\\Event\\BeforeRequest' => [
        ['Yiisoft\\Yii\\Debug\\Debugger', 'startup'],
        ['Yiisoft\\Yii\\Debug\\Collector\\WebAppInfoCollector', 'collect'],
        ['Yiisoft\\Yii\\Debug\\Collector\\RequestCollector', 'collect'],
    ],
    'Yiisoft\\Yii\\Web\\Event\\AfterRequest' => [
        ['Yiisoft\\Yii\\Debug\\Collector\\WebAppInfoCollector', 'collect'],
        ['Yiisoft\\Yii\\Debug\\Collector\\RequestCollector', 'collect'],
    ],
    'Yiisoft\\Yii\\Web\\Event\\AfterEmit' => [
        ['Yiisoft\\Profiler\\ProfilerInterface', 'flush'],
        ['Yiisoft\\Yii\\Debug\\Collector\\WebAppInfoCollector', 'collect'],
        ['Yiisoft\\Yii\\Debug\\Debugger', 'shutdown'],
        static function (\Psr\Log\LoggerInterface $logger): void {
            if ($logger instanceof \Yiisoft\Log\Logger) {
                $logger->flush(true);
            }
        },
    ],
    'Yiisoft\\Middleware\\Dispatcher\\Event\\BeforeMiddleware' => [['Yiisoft\\Yii\\Debug\\Collector\\MiddlewareCollector', 'collect']],
    'Yiisoft\\Middleware\\Dispatcher\\Event\\AfterMiddleware' => [['Yiisoft\\Yii\\Debug\\Collector\\MiddlewareCollector', 'collect']],
];
