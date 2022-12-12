<?php
//rabbitmq rabbitmq开启stomp协议
//rabbitmq-plugins enable rabbitmq_stomp
return [
    'default' => [
        'host'    => 'stomp://127.0.0.1:61613',
        'options' => [
            'vhost'    => '/',
            'login'    => 'admin',
            'passcode' => 'fdvjo98u34tr90',
            'debug'    => true,
        ]
    ]
];
