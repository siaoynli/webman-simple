<?php

namespace app\controller;

use app\model\Test;
use support\Request;
use support\Db;

class IndexController extends BaseController
{
    public function index(Request $request)
    {
        return response('hello world');
    }

    public function view(Request $request)
    {
        return view('index/view', ['name' => 'webman']);
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
}
