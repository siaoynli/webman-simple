<?php

namespace app\controller;

use app\model\Test;
use support\Request;
use support\Db;
use Shopwwi\LaravelCache\Cache;
use  yzh52521\EasyHttp\Http;
use Respect\Validation\Validator;

class IndexController extends BaseController
{
    public function index(Request $request)
    {
        Cache::put('title', 'webman', $seconds = 10);
        return response('hello world');
    }

    public function view(Request $request)
    {
        $title = Cache::get('title', 'webman-default');
        return view('index/view', ['name' => $title]);
    }

    public function json(Request $request)
    {
        return json(['code' => 0, 'msg' => 'ok']);
    }

    public function db()
    {
        $name = Db::table('test')->where('id', 1)->value('title');
        return response("$name");
    }

    public function test()
    {
        $test = Test::first();
        return json($test->toArray());
    }

    public function get()
    {
        $response = Http::get('http://www.baidu.com');
        var_export($response);
        return  response($response);
    }


    public function validator(Request $request)
    {
        $data = Validator::input($request->all(), [
            'nickname' => Validator::length(1, 64)->setName('昵称'),
            'username' => Validator::alnum()->length(5, 64)->setName('用户名'),
            'password' => Validator::length(5, 64)->setName('密码')
        ]);

        return json(['code' => 0, 'msg' => 'ok']);
    }


    public  function limit(Request $request)
    {
        return json('ok');
    }
}
