<?php
return [
    'consumer'  => [
        'handler'     => Webman\RedisQueue\Process\Consumer::class,
        'count'       => 8, // 可以设置多进程同时消费
        'constructor' => [
            'consumer_dir' => app_path() . '/jobs/redis'
        ]
    ],
    // 'redis_consumer_fast'  => [
    //     'handler'     => Webman\RedisQueue\Process\Consumer::class,
    //     'count'       => 8,
    //     'constructor' => [
    //         'consumer_dir' => app_path() . '/jobs/redis/fast'
    //     ]
    // ],
    // 'redis_consumer_slow'  => [
    //     'handler'     => Webman\RedisQueue\Process\Consumer::class,
    //     'count'       => 8,
    //     'constructor' => [
    //         'consumer_dir' => app_path() . '/queue/redis/slow'
    //     ]
    // ]
];
