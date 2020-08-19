<?php

return [

    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
   
        'authManager' => [
        	'class' => 'yii\rbac\DbManager',
    ],
   // 'user' => [
      //  'identityClass' => 'mdm\admin\models\User',
       // 'loginUrl' => ['admin/user/login'],
   // ],

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
