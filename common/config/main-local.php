<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => getenv('CONNECT_DB' , 'mysql:host=localhost;dbname=midb'),
            'username' => getenv('DB_USER','usuario'),
            'password' => getenv('DB_PASSWORD','clave'),
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => getenv('SMTP_HOST'),
                'username' => getenv('SMTP_USER'),
                'password' => getenv('SMTP_PASSWORD'),
                'port' => getenv('SMTP_PORT', 25),
                'encryption' => getenv('SMTP_ENCRYPTION', null),
            ],
        ],

    ],
];
