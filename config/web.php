<?php

   $config =[
    'id'=>'finance',
    'basePath'=> realpath(__DIR__.'/../'),
       'bootstrap'=>['debug'],
       'language' => 'ru',
       'timeZone' => 'Asia/Vladivostok',
      'components'=>[
        'urlManager'=>[
          'enablePrettyUrl'=>true,
            'showScriptName'=>false,
        ],
          'request'=>[
              'cookieValidationKey' => 'vsemprivetktoetochitaet',
              'enableCsrfValidation' => false,
          ],
          'db'=> require(__DIR__.'/db.php'),
          'user'=>[
              'identityClass' =>'app\models\UserIdentity',
              'enableAutoLogin' => true,
          ],
      ],
       'modules'=>[
           'debug'=>'yii\debug\Module',
           'gii'=>'yii\gii\Module',
       ],
        ];

   return $config;