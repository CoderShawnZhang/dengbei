<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=mysql;dbname=dengbei;port=3306',
            'username' => 'root',
            'password' => 123456,
            'charset' => 'utf8',
        ],
        //旧的搜灯数据库
        'old_sodeng' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=120.78.150.212;dbname=sodeng;port=3306',
            'username' => 'lmt',
            'password' => 'adminlmt',
            'charset' => 'utf8',
            'tablePrefix' => 'oa_'
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
