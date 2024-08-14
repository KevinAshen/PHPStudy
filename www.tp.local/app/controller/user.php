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

    public function getLesson10()
    {
        $user = Db::table('user')->where('id', 1)->select();
        $user = Db::table('user')->where('id', 1)->find();
        $user = Db::table('user')->where('id', 11)->findOrEmpty();
        $user = Db::table('user')->where('id', 1)->findOrFail();
        $user = Db::table('user')->where('id', 1)->select()->toArray();
        halt($user);
//        return Db::getlastSql();
        return json($user);
    }
}