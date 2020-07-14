<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
            'layout' => 'left-menu',
            'controllerMap' => [  
                'assignment' => [  
                    'class' => 'mdm\admin\controllers\AssignmentController',  
                    'userClassName' => 'app\models\User',  
                    'idField' => 'id'  
                ]  
            ],  
            'menus' => [  
                'assignment' => [  
                    'label' => 'Grand Access' // change label  
                ],  
                //'route' => null, // disable menu route  
            ]  
        ],
        //商品模块-后期对接商品库组件
        'Goods' => [
            'class' => 'backend\Modules\Goods\Module',
        ],
        //登录模块
        'Login' => [
            'class' => 'backend\Modules\Login\Module',
        ]
    ],
    'components' => [

        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [],
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=mysql;dbname=dengbei;port=3306',
            'username' => 'root',
            'password' => '123456',
            'charset' => 'utf8',
        ],
    ],
    'defaultRoute' => 'base',
    'params' => $params,
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            'admin/*',
        ]
    ],
];
