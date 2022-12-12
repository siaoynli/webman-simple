<?php

namespace app\controller;

use support\Request;
use Webman\RedisQueue\Redis;
use Webman\RedisQueue\Client;

class QueueController extends BaseController
{
    //投递消息(同步)
    public function index(Request $request)
    {
        // 队列名
        $queue = 'send-mail';
        // 数据，可以直接传数组，无需序列化
        $data = ['to' => 'tom@gmail.com', 'content' => 'hello'];
        // 投递消息
        Redis::send($queue, $data);
        // 投递延迟消息，消息会在60秒后处理
        Redis::send($queue, $data, 60);

        return response('redis queue sync test');
    }

    //投递消息(异步)
    public function queue(Request $request)
    {
        // 队列名
        $queue = 'send-mail';
        // 数据，可以直接传数组，无需序列化
        $data = ['to' => 'tom@gmail.com', 'content' => 'hello'];
        // 投递消息
        // 投递消息
        Client::send($queue, $data);
        // 投递延迟消息，消息会在60秒后处理
        Client::send($queue, $data, 60);

        return response('redis queue async test');
    }
}
