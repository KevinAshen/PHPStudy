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

    public function getLesson11()
    {
        $user = Db::name('user')->where('id', 1)->value('name');
        $user = Db::name('user')->column('name');
        $user = Db::name('user')->column('name', 'id');
//        Db::name('user')->chunk(2, function ($user) {
//            foreach ($user as $user) {
//                dump($user);
//            }
//            echo 1;
//        });
//        return json($user);

        $user = Db::name('user')->cursor();
        foreach ($user as $user) {
            dump($user);
        }
    }
}