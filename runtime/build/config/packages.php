<?php

$baseDir = dirname(__DIR__, 3);

$_ENV = array_merge((array) require __DIR__ . '/envs.php', $_ENV);



$params = (array) require __DIR__ . '/params.php';

return [
    'psr/http-message' => [
        'name' => 'psr/http-message',
        'version' => '1.0.1.0',
        'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ],
    'psr/http-factory' => [
        'name' => 'psr/http-factory',
        'version' => '1.0.1.0',
        'reference' => '12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
    ],
    'httpsoft/http-message' => [
        'name' => 'httpsoft/http-message',
        'version' => '1.0.7.0',
        'reference' => 'f6ef5530daeaaa189b9550e122074e7a643dc933',
    ],
    'yiisoft/aliases' => [
        'name' => 'yiisoft/aliases',
        'version' => '1.1.2.0',
        'reference' => 'cd28caeec3c7c11c228cb8a8a9744617e2a167de',
    ],
    'psr/log' => [
        'name' => 'psr/log',
        'version' => '1.1.3.0',
        'reference' => '0f73288fd15629204f9d42b7055f72dacbe811fc',
    ],
    'yiisoft/strings' => [
        'name' => 'yiisoft/strings',
        'version' => '1.2.0.0',
        'reference' => '7f9a78a0d443e8880e48d74859eb6f02ded6b6e7',
    ],
    'yiisoft/files' => [
        'name' => 'yiisoft/files',
        'version' => 'dev-master',
        'reference' => 'cee49bca2e0da183296830163cb76313176a6ff9',
    ],
    'yiisoft/assets' => [
        'name' => 'yiisoft/assets',
        'version' => 'dev-master',
        'reference' => '0f6f4c5d4504240abffa50d37c96588f7dcd23bb',
    ],
    'psr/simple-cache' => [
        'name' => 'psr/simple-cache',
        'version' => '1.0.1.0',
        'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
    ],
    'yiisoft/cache' => [
        'name' => 'yiisoft/cache',
        'version' => 'dev-master',
        'reference' => '066103b038087cfcb3f5de775d081ed04a90cfdb',
    ],
    'yiisoft/cache-file' => [
        'name' => 'yiisoft/cache-file',
        'version' => 'dev-master',
        'reference' => 'b1acf813ce370c34e05c8af833647c44d33e90f3',
    ],
    'composer/ca-bundle' => [
        'name' => 'composer/ca-bundle',
        'version' => '1.2.9.0',
        'reference' => '78a0e288fdcebf92aa2318a8d3656168da6ac1a5',
    ],
    'composer/semver' => [
        'name' => 'composer/semver',
        'version' => '3.2.4.0',
        'reference' => 'a02fdf930a3c1c3ed3a49b5f63859c0c20e10464',
    ],
    'composer/spdx-licenses' => [
        'name' => 'composer/spdx-licenses',
        'version' => '1.5.5.0',
        'reference' => 'de30328a7af8680efdc03e396aad24befd513200',
    ],
    'composer/xdebug-handler' => [
        'name' => 'composer/xdebug-handler',
        'version' => '1.4.5.0',
        'reference' => 'f28d44c286812c714741478d968104c5e604a1d4',
    ],
    'justinrainbow/json-schema' => [
        'name' => 'justinrainbow/json-schema',
        'version' => '5.2.10.0',
        'reference' => '2ba9c8c862ecd5510ed16c6340aa9f6eadb4f31b',
    ],
    'seld/jsonlint' => [
        'name' => 'seld/jsonlint',
        'version' => '1.8.3.0',
        'reference' => '9ad6ce79c342fbd44df10ea95511a1b24dee5b57',
    ],
    'seld/phar-utils' => [
        'name' => 'seld/phar-utils',
        'version' => '1.1.1.0',
        'reference' => '8674b1d84ffb47cc59a101f5d5a3b61e87d23796',
    ],
    'symfony/polyfill-mbstring' => [
        'name' => 'symfony/polyfill-mbstring',
        'version' => '1.22.0.0',
        'reference' => 'f377a3dd1fde44d37b9831d68dc8dea3ffd28e13',
    ],
    'symfony/polyfill-php73' => [
        'name' => 'symfony/polyfill-php73',
        'version' => '1.22.0.0',
        'reference' => 'a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
    ],
    'symfony/polyfill-php80' => [
        'name' => 'symfony/polyfill-php80',
        'version' => '1.22.0.0',
        'reference' => 'dc3063ba22c2a1fd2f45ed856374d79114998f91',
    ],
    'psr/container' => [
        'name' => 'psr/container',
        'version' => '1.0.0.0',
        'reference' => 'b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
    ],
    'symfony/service-contracts' => [
        'name' => 'symfony/service-contracts',
        'version' => '2.2.0.0',
        'reference' => 'd15da7ba4957ffb8f1747218be9e1a121fd298a1',
    ],
    'symfony/polyfill-ctype' => [
        'name' => 'symfony/polyfill-ctype',
        'version' => '1.22.0.0',
        'reference' => 'c6c942b1ac76c82448322025e084cadc56048b4e',
    ],
    'symfony/polyfill-intl-grapheme' => [
        'name' => 'symfony/polyfill-intl-grapheme',
        'version' => '1.22.0.0',
        'reference' => '267a9adeb8ecb8071040a740930e077cdfb987af',
    ],
    'symfony/polyfill-intl-normalizer' => [
        'name' => 'symfony/polyfill-intl-normalizer',
        'version' => '1.22.0.0',
        'reference' => '6e971c891537eb617a00bb07a43d182a6915faba',
    ],
    'symfony/string' => [
        'name' => 'symfony/string',
        'version' => '5.2.1.0',
        'reference' => '5bd67751d2e3f7d6f770c9154b8fbcb2aa05f7ed',
    ],
    'symfony/console' => [
        'name' => 'symfony/console',
        'version' => '5.2.1.0',
        'reference' => '47c02526c532fb381374dab26df05e7313978976',
    ],
    'symfony/filesystem' => [
        'name' => 'symfony/filesystem',
        'version' => '5.2.1.0',
        'reference' => 'fa8f8cab6b65e2d99a118e082935344c5ba8c60d',
    ],
    'symfony/finder' => [
        'name' => 'symfony/finder',
        'version' => '5.2.1.0',
        'reference' => '0b9231a5922fd7287ba5b411893c0ecd2733e5ba',
    ],
    'symfony/process' => [
        'name' => 'symfony/process',
        'version' => '5.2.1.0',
        'reference' => 'bd8815b8b6705298beaa384f04fabd459c10bedd',
    ],
    'react/promise' => [
        'name' => 'react/promise',
        'version' => '2.8.0.0',
        'reference' => 'f3cff96a19736714524ca0dd1d4130de73dbbbc4',
    ],
    'composer/composer' => [
        'name' => 'composer/composer',
        'version' => '2.0.8.0',
        'reference' => '62139b2806178adb979d76bd3437534a1a9fd490',
    ],
    'opis/closure' => [
        'name' => 'opis/closure',
        'version' => 'dev-master',
        'reference' => '06b4961aabf900c72a20b7000bfa10fd7ae3035e',
    ],
    'riimu/kit-phpencoder' => [
        'name' => 'riimu/kit-phpencoder',
        'version' => '2.4.1.0',
        'reference' => 'ca6f004e1290aec7ef4bebf6c0807b30fcf981d7',
    ],
    'yiisoft/arrays' => [
        'name' => 'yiisoft/arrays',
        'version' => 'dev-master',
        'reference' => '32bc4a72e4d12fe5dcd5ea8cd4b093317ee05ae4',
    ],
    'yiisoft/composer-config-plugin' => [
        'name' => 'yiisoft/composer-config-plugin',
        'version' => 'dev-master',
        'reference' => 'b6f0e0789a8e9a4a62db595d742a6f73009993c4',
    ],
    'psr/http-server-handler' => [
        'name' => 'psr/http-server-handler',
        'version' => '1.0.1.0',
        'reference' => 'aff2f80e33b7f026ec96bb42f63242dc50ffcae7',
    ],
    'psr/http-server-middleware' => [
        'name' => 'psr/http-server-middleware',
        'version' => '1.0.1.0',
        'reference' => '2296f45510945530b9dceb8bcedb5cb84d40c5f5',
    ],
    'yiisoft/http' => [
        'name' => 'yiisoft/http',
        'version' => '1.1.0.0',
        'reference' => '4483561ba5d668b36f5784f691bf93b20fa70a03',
    ],
    'yiisoft/security' => [
        'name' => 'yiisoft/security',
        'version' => '1.0.0.0',
        'reference' => '4a8cfb1ef8aa35076a6696cb0b078128f614a8b1',
    ],
    'yiisoft/cookies' => [
        'name' => 'yiisoft/cookies',
        'version' => '1.0.0.0',
        'reference' => '40ec600f8cce944f8ae64de898f8f82b622a6e45',
    ],
    'yiisoft/session' => [
        'name' => 'yiisoft/session',
        'version' => '1.0.0.0',
        'reference' => 'c09f5035b974d59f3e0e6f58f99f66957de2d029',
    ],
    'yiisoft/csrf' => [
        'name' => 'yiisoft/csrf',
        'version' => 'dev-master',
        'reference' => '525ba21acb09bfdf2582e8530db95e49ce989db4',
    ],
    'symfony/deprecation-contracts' => [
        'name' => 'symfony/deprecation-contracts',
        'version' => '2.2.0.0',
        'reference' => '5fa56b4074d1ae755beb55617ddafe6f5d78f665',
    ],
    'symfony/property-info' => [
        'name' => 'symfony/property-info',
        'version' => '5.2.1.0',
        'reference' => 'f65694a05eb7742c5f2951f20676de367ffaaaea',
    ],
    'symfony/property-access' => [
        'name' => 'symfony/property-access',
        'version' => '5.2.1.0',
        'reference' => '243dcdda2f276cb31efa31a015d0fdb5076931ce',
    ],
    'symfony/serializer' => [
        'name' => 'symfony/serializer',
        'version' => '5.2.1.0',
        'reference' => '4af81510bb603a6d255691a88e118add2bba6337',
    ],
    'yiisoft/serializer' => [
        'name' => 'yiisoft/serializer',
        'version' => 'dev-master',
        'reference' => 'e625c11e0f2931f3f791cb042172fbae5f4950ca',
    ],
    'yiisoft/data-response' => [
        'name' => 'yiisoft/data-response',
        'version' => 'dev-master',
        'reference' => 'bce7cb682784b76736c31043301423c732e9faf4',
    ],
    'yiisoft/injector' => [
        'name' => 'yiisoft/injector',
        'version' => '1.0.3.0',
        'reference' => '52672ebb25657e8eac5289a3ba5ca8bc93b1d1ab',
    ],
    'yiisoft/factory' => [
        'name' => 'yiisoft/factory',
        'version' => 'dev-master',
        'reference' => 'a05b28f1fc4992ac4b362d496cf54d9d1fe346f5',
    ],
    'yiisoft/di' => [
        'name' => 'yiisoft/di',
        'version' => 'dev-master',
        'reference' => '59a78922e1d19e487734347d4b76eafa5628be6f',
    ],
    'alexkart/curl-builder' => [
        'name' => 'alexkart/curl-builder',
        'version' => '1.0.6.0',
        'reference' => 'ba66b39ecef463ce6850d51ac8223a7f8ae494f4',
    ],
    'yiisoft/friendly-exception' => [
        'name' => 'yiisoft/friendly-exception',
        'version' => '1.0.2.0',
        'reference' => 'a51cf053e068698a1d2cabf30b6b5a49dcc00f1c',
    ],
    'yiisoft/error-handler' => [
        'name' => 'yiisoft/error-handler',
        'version' => 'dev-master',
        'reference' => '6fcb2d9968eb90e7237c7bc9374090cf59b2535c',
    ],
    'yiisoft/i18n' => [
        'name' => 'yiisoft/i18n',
        'version' => '1.0.0.0',
        'reference' => '4bbea1058d81350b94e2b21831c42563184063c5',
    ],
    'yiisoft/var-dumper' => [
        'name' => 'yiisoft/var-dumper',
        'version' => 'dev-master',
        'reference' => '1029dba26cbc1c6ee1cfa76e307185fd874d8c09',
    ],
    'yiisoft/log' => [
        'name' => 'yiisoft/log',
        'version' => 'dev-master',
        'reference' => '8ce1e899ecd6f81fcf2977b8099dfcd86c160683',
    ],
    'yiisoft/log-target-file' => [
        'name' => 'yiisoft/log-target-file',
        'version' => 'dev-master',
        'reference' => '0347f3bd4ebe69db5ce9670f21168c86136b1fad',
    ],
    'psr/event-dispatcher' => [
        'name' => 'psr/event-dispatcher',
        'version' => '1.0.0.0',
        'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
    ],
    'yiisoft/middleware-dispatcher' => [
        'name' => 'yiisoft/middleware-dispatcher',
        'version' => 'dev-master',
        'reference' => '3591c4c98741b5ea4ff1066dfb8d4adcbf244a82',
    ],
    'yiisoft/router' => [
        'name' => 'yiisoft/router',
        'version' => 'dev-master',
        'reference' => '43205c951751ad5dde87fd895f843483af79fd0a',
    ],
    'nikic/fast-route' => [
        'name' => 'nikic/fast-route',
        'version' => '1.3.0.0',
        'reference' => '181d480e08d9476e61381e04a71b34dc0432e812',
    ],
    'yiisoft/router-fastroute' => [
        'name' => 'yiisoft/router-fastroute',
        'version' => 'dev-master',
        'reference' => '42eae5ac9969ceff019411895f94dd9ba3718042',
    ],
    'yiisoft/json' => [
        'name' => 'yiisoft/json',
        'version' => '1.0.0.0',
        'reference' => '51b483aef1cd5d06ea02db3c40707bb6b41ed088',
    ],
    'yiisoft/html' => [
        'name' => 'yiisoft/html',
        'version' => 'dev-master',
        'reference' => 'bddc3a69ea9b308d9bd12256938fd6d620d12f21',
    ],
    'yiisoft/view' => [
        'name' => 'yiisoft/view',
        'version' => 'dev-master',
        'reference' => '2810aa84d1f3fa34ea67b13d0b236fe3480aca6f',
    ],
    'npm-asset/bulma' => [
        'name' => 'npm-asset/bulma',
        'version' => '0.9.1.0',
    ],
    'npm-asset/bulma-helpers' => [
        'name' => 'npm-asset/bulma-helpers',
        'version' => '0.3.12.0',
    ],
    'npm-asset/vizuaalog--bulmajs' => [
        'name' => 'npm-asset/vizuaalog--bulmajs',
        'version' => '0.11.0.0',
    ],
    'composer/installers' => [
        'name' => 'composer/installers',
        'version' => '1.10.0.0',
        'reference' => '1a0357fccad9d1cc1ea0c9a05b8847fbccccb78d',
    ],
    'oomphinc/composer-installers-extender' => [
        'name' => 'oomphinc/composer-installers-extender',
        'version' => '2.0.0.0',
        'reference' => '8d3fe38a1723e0e91076920c8bb946b1696e28ca',
    ],
    'yiisoft/widget' => [
        'name' => 'yiisoft/widget',
        'version' => 'dev-master',
        'reference' => '3092e12153508153ad39032ed8a760e04f7be77b',
    ],
    'yiisoft/yii-bulma' => [
        'name' => 'yiisoft/yii-bulma',
        'version' => 'dev-master',
        'reference' => '7c2ef656155d3ce1035f43a8f3b1761cd8421bbf',
    ],
    'yiisoft/container-proxy' => [
        'name' => 'yiisoft/container-proxy',
        'version' => 'dev-master',
        'reference' => 'd2cb48d0fc2323fc521f7442c82a70ad01fe9f79',
    ],
    'yiisoft/profiler' => [
        'name' => 'yiisoft/profiler',
        'version' => 'dev-master',
        'reference' => 'd5023644d0f6a728094e0b1b339541156fbb9da7',
    ],
    'yiisoft/proxy' => [
        'name' => 'yiisoft/proxy',
        'version' => 'dev-master',
        'reference' => '77609e6f3ae0efad8694c58611f851ca025a7f9b',
    ],
    'symfony/event-dispatcher-contracts' => [
        'name' => 'symfony/event-dispatcher-contracts',
        'version' => '2.2.0.0',
        'reference' => '0ba7d54483095a198fa51781bc608d17e84dffa2',
    ],
    'yiisoft/event-dispatcher' => [
        'name' => 'yiisoft/event-dispatcher',
        'version' => 'dev-master',
        'reference' => 'f19cbf1469e0d10d2eafe45d8851fbb4aeaf8e65',
    ],
    'yiisoft/yii-event' => [
        'name' => 'yiisoft/yii-event',
        'version' => 'dev-master',
        'reference' => '1e3cb00f77d4922fe85aa60999dfc3c778fe181b',
    ],
    'yiisoft/yii-console' => [
        'name' => 'yiisoft/yii-console',
        'version' => 'dev-master',
        'reference' => '9bc94116eb4831bb6320be1c6a176a2d645a4b9f',
    ],
    'league/mime-type-detection' => [
        'name' => 'league/mime-type-detection',
        'version' => '1.7.0.0',
        'reference' => '3b9dff8aaf7323590c1d2e443db701eb1f9aa0d3',
    ],
    'league/flysystem' => [
        'name' => 'league/flysystem',
        'version' => '2.0.2.0',
        'reference' => '1d68c2325a56b6b847f3a40b9564cabfa7bb2594',
    ],
    'yiisoft/yii-filesystem' => [
        'name' => 'yiisoft/yii-filesystem',
        'version' => 'dev-master',
        'reference' => '3c0fd041719b8ee0c5f7e426d252031aeec6b756',
    ],
    'yiisoft/network-utilities' => [
        'name' => 'yiisoft/network-utilities',
        'version' => 'dev-master',
        'reference' => 'b580357230b9b871a78f6a1eca2a946c65eac2c7',
    ],
    'yiisoft/validator' => [
        'name' => 'yiisoft/validator',
        'version' => 'dev-master',
        'reference' => 'fb33c0d0dc2d99ce4aa89955cdf03000c8f4f8e2',
    ],
    'yiisoft/yii-web' => [
        'name' => 'yiisoft/yii-web',
        'version' => 'dev-master',
        'reference' => '04bccebb004eb2ae8e67e5087b8274fd445d4fb2',
    ],
    'yiisoft/yii-debug' => [
        'name' => 'yiisoft/yii-debug',
        'version' => 'dev-master',
        'reference' => '68463fcfd3facd06ca03f232eb0eb43e1a297603',
    ],
    'yiisoft/yii-view' => [
        'name' => 'yiisoft/yii-view',
        'version' => 'dev-master',
        'reference' => '8154416423cb2ea395d7cddb5e6f69b060703c65',
    ],
    'codeception/c3' => [
        'name' => 'codeception/c3',
        'version' => '2.6.1.0',
        'reference' => '88e1c138d092c1e300df46f78f40bf32ca45f99e',
    ],
    'doctrine/instantiator' => [
        'name' => 'doctrine/instantiator',
        'version' => '1.4.0.0',
        'reference' => 'd56bf6102915de5702778fe20f2de3b2fe570b5b',
    ],
    'myclabs/deep-copy' => [
        'name' => 'myclabs/deep-copy',
        'version' => '1.10.2.0',
        'reference' => '776f831124e9c62e1a2c601ecc52e776d8bb7220',
    ],
    'phar-io/version' => [
        'name' => 'phar-io/version',
        'version' => '3.0.4.0',
        'reference' => 'e4782611070e50613683d2b9a57730e9a3ba5451',
    ],
    'phar-io/manifest' => [
        'name' => 'phar-io/manifest',
        'version' => '2.0.1.0',
        'reference' => '85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
    ],
    'phpdocumentor/reflection-common' => [
        'name' => 'phpdocumentor/reflection-common',
        'version' => '2.2.0.0',
        'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
    ],
    'phpdocumentor/type-resolver' => [
        'name' => 'phpdocumentor/type-resolver',
        'version' => '1.4.0.0',
        'reference' => '6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
    ],
    'webmozart/assert' => [
        'name' => 'webmozart/assert',
        'version' => '1.9.1.0',
        'reference' => 'bafc69caeb4d49c39fd0779086c03a3738cbb389',
    ],
    'phpdocumentor/reflection-docblock' => [
        'name' => 'phpdocumentor/reflection-docblock',
        'version' => '5.2.2.0',
        'reference' => '069a785b2141f5bcf49f3e353548dc1cce6df556',
    ],
    'sebastian/diff' => [
        'name' => 'sebastian/diff',
        'version' => '4.0.4.0',
        'reference' => '3461e3fccc7cfdfc2720be910d3bd73c69be590d',
    ],
    'sebastian/recursion-context' => [
        'name' => 'sebastian/recursion-context',
        'version' => '4.0.4.0',
        'reference' => 'cd9d8cf3c5804de4341c283ed787f099f5506172',
    ],
    'sebastian/exporter' => [
        'name' => 'sebastian/exporter',
        'version' => '4.0.3.0',
        'reference' => 'd89cc98761b8cb5a1a235a6b703ae50d34080e65',
    ],
    'sebastian/comparator' => [
        'name' => 'sebastian/comparator',
        'version' => '4.0.6.0',
        'reference' => '55f4261989e546dc112258c7a75935a81a7ce382',
    ],
    'phpspec/prophecy' => [
        'name' => 'phpspec/prophecy',
        'version' => '1.12.2.0',
        'reference' => '245710e971a030f42e08f4912863805570f23d39',
    ],
    'nikic/php-parser' => [
        'name' => 'nikic/php-parser',
        'version' => '4.10.4.0',
        'reference' => 'c6d052fc58cb876152f89f532b95a8d7907e7f0e',
    ],
    'phpunit/php-file-iterator' => [
        'name' => 'phpunit/php-file-iterator',
        'version' => '3.0.5.0',
        'reference' => 'aa4be8575f26070b100fccb67faabb28f21f66f8',
    ],
    'phpunit/php-text-template' => [
        'name' => 'phpunit/php-text-template',
        'version' => '2.0.4.0',
        'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
    ],
    'sebastian/code-unit-reverse-lookup' => [
        'name' => 'sebastian/code-unit-reverse-lookup',
        'version' => '2.0.3.0',
        'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
    ],
    'sebastian/complexity' => [
        'name' => 'sebastian/complexity',
        'version' => '2.0.2.0',
        'reference' => '739b35e53379900cc9ac327b2147867b8b6efd88',
    ],
    'sebastian/environment' => [
        'name' => 'sebastian/environment',
        'version' => '5.1.3.0',
        'reference' => '388b6ced16caa751030f6a69e588299fa09200ac',
    ],
    'sebastian/lines-of-code' => [
        'name' => 'sebastian/lines-of-code',
        'version' => '1.0.3.0',
        'reference' => 'c1c2e997aa3146983ed888ad08b15470a2e22ecc',
    ],
    'sebastian/version' => [
        'name' => 'sebastian/version',
        'version' => '3.0.2.0',
        'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
    ],
    'theseer/tokenizer' => [
        'name' => 'theseer/tokenizer',
        'version' => '1.2.0.0',
        'reference' => '75a63c33a8577608444246075ea0af0d052e452a',
    ],
    'phpunit/php-code-coverage' => [
        'name' => 'phpunit/php-code-coverage',
        'version' => '9.2.5.0',
        'reference' => 'f3e026641cc91909d421802dd3ac7827ebfd97e1',
    ],
    'phpunit/php-invoker' => [
        'name' => 'phpunit/php-invoker',
        'version' => '3.1.1.0',
        'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
    ],
    'phpunit/php-timer' => [
        'name' => 'phpunit/php-timer',
        'version' => '5.0.3.0',
        'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
    ],
    'sebastian/cli-parser' => [
        'name' => 'sebastian/cli-parser',
        'version' => '1.0.1.0',
        'reference' => '442e7c7e687e42adc03470c7b668bc4b2402c0b2',
    ],
    'sebastian/code-unit' => [
        'name' => 'sebastian/code-unit',
        'version' => '1.0.8.0',
        'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
    ],
    'sebastian/object-reflector' => [
        'name' => 'sebastian/object-reflector',
        'version' => '2.0.4.0',
        'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
    ],
    'sebastian/global-state' => [
        'name' => 'sebastian/global-state',
        'version' => '5.0.2.0',
        'reference' => 'a90ccbddffa067b51f574dea6eb25d5680839455',
    ],
    'sebastian/object-enumerator' => [
        'name' => 'sebastian/object-enumerator',
        'version' => '4.0.4.0',
        'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
    ],
    'sebastian/resource-operations' => [
        'name' => 'sebastian/resource-operations',
        'version' => '3.0.3.0',
        'reference' => '0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
    ],
    'sebastian/type' => [
        'name' => 'sebastian/type',
        'version' => '2.3.1.0',
        'reference' => '81cd61ab7bbf2de744aba0ea61fae32f721df3d2',
    ],
    'phpunit/phpunit' => [
        'name' => 'phpunit/phpunit',
        'version' => '9.5.1.0',
        'reference' => 'e7bdf4085de85a825f4424eae52c99a1cec2f360',
    ],
    'codeception/phpunit-wrapper' => [
        'name' => 'codeception/phpunit-wrapper',
        'version' => '9.0.6.0',
        'reference' => 'b0c06abb3181eedca690170f7ed0fd26a70bfacc',
    ],
    'codeception/lib-asserts' => [
        'name' => 'codeception/lib-asserts',
        'version' => '1.13.2.0',
        'reference' => '184231d5eab66bc69afd6b9429344d80c67a33b6',
    ],
    'ralouphie/getallheaders' => [
        'name' => 'ralouphie/getallheaders',
        'version' => '3.0.3.0',
        'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ],
    'guzzlehttp/psr7' => [
        'name' => 'guzzlehttp/psr7',
        'version' => '1.7.0.0',
        'reference' => '53330f47520498c0ae1f61f7e2c90f55690c06a3',
    ],
    'symfony/event-dispatcher' => [
        'name' => 'symfony/event-dispatcher',
        'version' => '5.2.1.0',
        'reference' => '1c93f7a1dff592c252574c79a8635a8a80856042',
    ],
    'symfony/yaml' => [
        'name' => 'symfony/yaml',
        'version' => '5.2.1.0',
        'reference' => '290ea5e03b8cf9b42c783163123f54441fb06939',
    ],
    'symfony/css-selector' => [
        'name' => 'symfony/css-selector',
        'version' => '5.2.1.0',
        'reference' => 'f789e7ead4c79e04ca9a6d6162fc629c89bd8054',
    ],
    'behat/gherkin' => [
        'name' => 'behat/gherkin',
        'version' => '4.7.0.0',
        'reference' => '0ffe6a7f67f8d038166143d71b30a9088f932576',
    ],
    'codeception/stub' => [
        'name' => 'codeception/stub',
        'version' => '3.7.0.0',
        'reference' => '468dd5fe659f131fc997f5196aad87512f9b1304',
    ],
    'codeception/codeception' => [
        'name' => 'codeception/codeception',
        'version' => '4.1.15.0',
        'reference' => '9b174d18ba58bb2e8cc4cecce619d6124df1d83a',
    ],
    'codeception/module-asserts' => [
        'name' => 'codeception/module-asserts',
        'version' => '1.3.1.0',
        'reference' => '59374f2fef0cabb9e8ddb53277e85cdca74328de',
    ],
    'guzzlehttp/promises' => [
        'name' => 'guzzlehttp/promises',
        'version' => '1.4.0.0',
        'reference' => '60d379c243457e073cff02bc323a2a86cb355631',
    ],
    'psr/http-client' => [
        'name' => 'psr/http-client',
        'version' => '1.0.1.0',
        'reference' => '2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
    ],
    'guzzlehttp/guzzle' => [
        'name' => 'guzzlehttp/guzzle',
        'version' => '7.2.0.0',
        'reference' => '0aa74dfb41ae110835923ef10a9d803a22d50e79',
    ],
    'symfony/dom-crawler' => [
        'name' => 'symfony/dom-crawler',
        'version' => '5.2.1.0',
        'reference' => 'ee7cf316fb0de786cfe5ae32ee79502b290c81ea',
    ],
    'symfony/browser-kit' => [
        'name' => 'symfony/browser-kit',
        'version' => '5.2.1.0',
        'reference' => '87d6f0a7436b03a57d4cf9a6a9cd0c83a355c49a',
    ],
    'codeception/lib-innerbrowser' => [
        'name' => 'codeception/lib-innerbrowser',
        'version' => '1.3.6.0',
        'reference' => '41b79ba6761001bdb1f373a347400180693ad4e7',
    ],
    'codeception/module-phpbrowser' => [
        'name' => 'codeception/module-phpbrowser',
        'version' => '1.0.2.0',
        'reference' => '770a6be4160a5c0c08d100dd51bff35f6056bbf1',
    ],
    'infection/abstract-testframework-adapter' => [
        'name' => 'infection/abstract-testframework-adapter',
        'version' => '0.3.1.0',
        'reference' => 'c52539339f28d6b67625ff24496289b3e6d66025',
    ],
    'infection/extension-installer' => [
        'name' => 'infection/extension-installer',
        'version' => '0.1.1.0',
        'reference' => 'ff30c0adffcdbc747c96adf92382ccbe271d0afd',
    ],
    'infection/include-interceptor' => [
        'name' => 'infection/include-interceptor',
        'version' => '0.2.4.0',
        'reference' => 'e3cf9317a7fd554ab60a5587f028b16418cc4264',
    ],
    'ondram/ci-detector' => [
        'name' => 'ondram/ci-detector',
        'version' => '3.5.1.0',
        'reference' => '594e61252843b68998bddd48078c5058fe9028bd',
    ],
    'sanmai/pipeline' => [
        'name' => 'sanmai/pipeline',
        'version' => '5.1.0.0',
        'reference' => 'f935e10ddcb758c89829e7b69cfb1dc2b2638518',
    ],
    'thecodingmachine/safe' => [
        'name' => 'thecodingmachine/safe',
        'version' => '1.3.3.0',
        'reference' => 'a8ab0876305a4cdaef31b2350fcb9811b5608dbc',
    ],
    'webmozart/path-util' => [
        'name' => 'webmozart/path-util',
        'version' => '2.3.0.0',
        'reference' => 'd939f7edc24c9a1bb9c0dee5cb05d8e859490725',
    ],
    'infection/infection' => [
        'name' => 'infection/infection',
        'version' => '0.20.2.0',
        'reference' => '6035c1566af6a5a8d833a276351e5e18ed412305',
    ],
    'amphp/amp' => [
        'name' => 'amphp/amp',
        'version' => '2.5.2.0',
        'reference' => 'efca2b32a7580087adb8aabbff6be1dc1bb924a9',
    ],
    'amphp/byte-stream' => [
        'name' => 'amphp/byte-stream',
        'version' => '1.8.0.0',
        'reference' => 'f0c20cf598a958ba2aa8c6e5a71c697d652c7088',
    ],
    'composer/package-versions-deprecated' => [
        'name' => 'composer/package-versions-deprecated',
        'version' => '1.11.99.1',
        'reference' => '7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
    ],
    'dnoegel/php-xdg-base-dir' => [
        'name' => 'dnoegel/php-xdg-base-dir',
        'version' => '0.1.1.0',
        'reference' => '8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
    ],
    'netresearch/jsonmapper' => [
        'name' => 'netresearch/jsonmapper',
        'version' => '2.1.0.0',
        'reference' => 'e0f1e33a71587aca81be5cffbb9746510e1fe04e',
    ],
    'felixfbecker/advanced-json-rpc' => [
        'name' => 'felixfbecker/advanced-json-rpc',
        'version' => '3.2.0.0',
        'reference' => '06f0b06043c7438959dbdeed8bb3f699a19be22e',
    ],
    'felixfbecker/language-server-protocol' => [
        'name' => 'felixfbecker/language-server-protocol',
        'version' => '1.5.0.0',
        'reference' => '85e83cacd2ed573238678c6875f8f0d7ec699541',
    ],
    'openlss/lib-array2xml' => [
        'name' => 'openlss/lib-array2xml',
        'version' => '1.0.0.0',
        'reference' => 'a91f18a8dfc69ffabe5f9b068bc39bb202c81d90',
    ],
    'vimeo/psalm' => [
        'name' => 'vimeo/psalm',
        'version' => '4.4.1.0',
        'reference' => '9fd7a7d885b3a216cff8dec9d8c21a132f275224',
    ],
    'roave/infection-static-analysis-plugin' => [
        'name' => 'roave/infection-static-analysis-plugin',
        'version' => '1.7.0.0',
        'reference' => 'd8e1351f995f6d1e6251ec526110e3382dd04ab5',
    ],
    'roave/security-advisories' => [
        'name' => 'roave/security-advisories',
        'version' => 'dev-master',
        'reference' => 'db043e108edc5065662fec040aedea5bf30f8a12',
    ],
    'react/event-loop' => [
        'name' => 'react/event-loop',
        'version' => '1.1.1.0',
        'reference' => '6d24de090cd59cfc830263cfba965be77b563c13',
    ],
    'evenement/evenement' => [
        'name' => 'evenement/evenement',
        'version' => '3.0.1.0',
        'reference' => '531bfb9d15f8aa57454f5f0285b18bec903b8fb7',
    ],
    'react/stream' => [
        'name' => 'react/stream',
        'version' => '1.1.1.0',
        'reference' => '7c02b510ee3f582c810aeccd3a197b9c2f52ff1a',
    ],
    'clue/term-react' => [
        'name' => 'clue/term-react',
        'version' => '1.3.0.0',
        'reference' => 'eb6eb063eda04a714ef89f066586a2c49588f7ca',
    ],
    'clue/utf8-react' => [
        'name' => 'clue/utf8-react',
        'version' => '1.2.0.0',
        'reference' => '8bc3f8c874cdf642c8f10f9ae93aadb8cd63da96',
    ],
    'clue/stdio-react' => [
        'name' => 'clue/stdio-react',
        'version' => '2.4.0.0',
        'reference' => '5722686d3cc0cdf2ccedb6079bfd066220611f00',
    ],
    'jolicode/jolinotif' => [
        'name' => 'jolicode/jolinotif',
        'version' => '2.2.0.0',
        'reference' => '52f5b98f964f6009b8ec4c0e951edcd0862e2ac7',
    ],
    'yosymfony/resource-watcher' => [
        'name' => 'yosymfony/resource-watcher',
        'version' => '2.0.1.0',
        'reference' => 'a8c34f704e6bd4f786c97f3c0ba65bd86cb2bd73',
    ],
    'spatie/phpunit-watcher' => [
        'name' => 'spatie/phpunit-watcher',
        'version' => '1.23.1.0',
        'reference' => '0c70d569658a1cad9a6869716a4351d2ccfec4d1',
    ],
    'php-http/message-factory' => [
        'name' => 'php-http/message-factory',
        'version' => '1.0.2.0',
        'reference' => 'a478cb11f66a6ac48d8954216cfed9aa06a501a1',
    ],
    'nyholm/psr7' => [
        'name' => 'nyholm/psr7',
        'version' => '1.3.2.0',
        'reference' => 'a272953743c454ac4af9626634daaf5ab3ce1173',
    ],
    'neomerx/cors-psr7' => [
        'name' => 'neomerx/cors-psr7',
        'version' => '1.0.13.0',
        'reference' => '2556e2013f16a55532c95928455257d5b6bbc6e2',
    ],
    'tuupola/callable-handler' => [
        'name' => 'tuupola/callable-handler',
        'version' => '1.1.0.0',
        'reference' => '0bc7b88630ca753de9aba8f411046856f5ca6f8c',
    ],
    'tuupola/http-factory' => [
        'name' => 'tuupola/http-factory',
        'version' => '1.3.0.0',
        'reference' => 'aa48841a9f572b9cebe9d3ac5d5d3362a83f57ac',
    ],
    'tuupola/cors-middleware' => [
        'name' => 'tuupola/cors-middleware',
        'version' => '1.2.1.0',
        'reference' => '4f085d11f349e83d18f1eb5802551353b2b093a3',
    ],
    'yiisoft/yii-debug-api' => [
        'name' => 'yiisoft/yii-debug-api',
        'version' => 'dev-master',
        'reference' => '8aee93904284bc07657a85caccd27a47a4dc2f69',
    ],
    'yiisoft/app' => [
        'name' => 'yiisoft/app',
        'version' => '1.0.0.0',
    ],
];
