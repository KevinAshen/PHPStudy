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

    public function addLesson12()
    {
//        $data = [
//            "name"    => "Zhang Mazi",
//            "age"     => 28,
//            "gender"  => "Male",
//            "details" => "I don't have pockmarks on my face!"
//        ];
//
//        return Db::name('user')->insert($data);

//        $data = [
//            "name"    => "Ma Bangde",
//            "age"     => 30,
//            "gender"  => "Male",
//            "deta"    => "I don't have pockmarks on my face!"
//        ];

//        return Db::name('user')->strict(false)->insert($data);

//        $data = [
//            'id'      => 1,
//            "name"    => "Zhang Mazi",
//            "age"     => 55,
//            "gender"  => "Male",
//            "details" => "I don't have pockmarks on my face!"
//        ];
//        return Db::name('user')->replace()->insert($data);

//        $data = [
//            "name"    => "Zshang Mazi",
//            "age"     => 55,
//            "gender"  => "Male",
//            "details" => "I don't have pockmarks on my face!"
//        ];
//        return Db::name('user')->replace()->insertGetId($data);
//    }
//        $data = [[
//            "name" => "Link",
//            "age" => 19,
//            "gender" => "Male",
//            "details" => "First, collect 999 Korok Seeds!"
//        ], [
//            "name" => "Purah",
//            "age" => 100,
//            "gender" => "Female",
//            "details" => "I'll first de-age, then quickly grow up again!"
//        ]];
//        return Db::name('user')->insertAll($data);

        $data = [[
            "name"    => "Link",
            "age"     => 19,
            "gender"  => "Male",
            "details" => "First, collect 999 Korok Seeds!"
        ],[
            "name"    => "Purah",
            "age"     => 100,
            "gender"  => "Female",
            "details" => "I'll first de-age, then quickly grow up again!"
        ]];
        Db::name('user')->replace()->limit(100)->insertAll($data);
    }
}