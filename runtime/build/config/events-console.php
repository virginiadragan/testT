<?php

$baseDir = dirname(__DIR__, 3);

$_ENV = array_merge((array) require __DIR__ . '/envs.php', $_ENV);



$params = (array) require __DIR__ . '/params.php';

return [
    'Yiisoft\\Yii\\Console\\Event\\ApplicationStartup' => [
        ['Yiisoft\\Yii\\Debug\\Debugger', 'startup'],
        ['Yiisoft\\Yii\\Debug\\Collector\\ConsoleAppInfoCollector', 'collect'],
    ],
    'Yiisoft\\Yii\\Console\\Event\\ApplicationShutdown' => [
        ['Yiisoft\\Yii\\Debug\\Collector\\ConsoleAppInfoCollector', 'collect'],
        ['Yiisoft\\Yii\\Debug\\Debugger', 'shutdown'],
    ],
    'Symfony\\Component\\Console\\Event\\ConsoleCommandEvent' => [['Yiisoft\\Yii\\Debug\\Collector\\CommandCollector', 'collect']],
    'Symfony\\Component\\Console\\Event\\ConsoleErrorEvent' => [['Yiisoft\\Yii\\Debug\\Collector\\CommandCollector', 'collect']],
    'Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent' => [['Yiisoft\\Yii\\Debug\\Collector\\CommandCollector', 'collect']],
];
