<?php
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../../vendor/autoload.php');
require(__DIR__ . '/../../vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../../Common/Config/bootstrap.php');
require(__DIR__ . '/../Config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../Common/Config/main.php'),
    require(__DIR__ . '/../../Common/Config/main-local.php'),
    require(__DIR__ . '/../Config/main.php'),
    require(__DIR__ . '/../Config/main-local.php')
);

$application = new yii\web\Application($config);
$application->run();
