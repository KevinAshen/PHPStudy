<?php

namespace app\controller;
use app\BaseController;
use think\facade\Db;

class user extends BaseController
{
    public function index()
    {
        return $this->app->getBasePath();
//        return $this->request->action();
    }

    public function get()
    {
        $user = Db::table('user')->select();
        return json($user);
    }
}