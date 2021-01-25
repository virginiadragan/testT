<?php

$baseDir = dirname(__DIR__, 3);

$_ENV = array_merge((array) require __DIR__ . '/envs.php', $_ENV);



$params = (array) require __DIR__ . '/params.php';

return [
    'yiisoft/yii-debug-api' => 'Yiisoft\\Yii\\Debug\\Api\\Provider\\DebugApiProvider',
    'yiisoft/yii-debug/Debugger' => 'Yiisoft\\Yii\\Debug\\ProxyServiceProvider',
    'yiisoft/yii-filesystem/file-storage' => 'Yiisoft\\Yii\\Filesystem\\FileStorageServiceProvider',
    'yiisoft/widget' => 'Yiisoft\\Widget\\WidgetFactoryProvider',
];
