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

    public function updateLesson13()
    {
//        $data = [
//            "name" => "Wang Sangou",
//            "age"  => 13,
//        ];
//
//        return Db::name('user')->where('id', 4)->update($data);

//        $data = [
//            "id"   => 4,
//            "name" => "Wang Sangou",
//            "age"  => 133,
//        ];
//        return Db::name('user')->update($data);

//        $data = [
//            "id"   => 4,
//            "name" => "Wang Sangou",
//            "age"  => 133,
//        ];
//        return Db::name('user')->exp('details', 'UPPER(details)')->update($data);

//        $data = [
//            "id"   => 5,
//            "name" => "W1ang Sangou",
//        ];
//        Db::name("user")->where('id', 9)->setInc("age", 1, 600);
//        return Db::name("user")->inc("age")->dec("age", 2)->update($data);

        Db::name("user")->where("id", 4)->update([
            "details"   =>  Db::raw("UPPER(details)"),
            "age"       =>  Db::raw("age-2")
        ]);
        return Db::getLastSql();
    }

    public function delLesson13()
    {
//        Db::name("user")->delete(2);
//        Db::name("user")->delete([7,8,9]);
        Db::name("user")->where("id", 13)->delete();
        return Db::getLastSql();
    }

    public function queryLesson14()
    {
//        $user = Db::name('user')->where('id', '>', '4')->select();
//        return json($user);

//        $user = Db::name('user')->where('name', 'like', 'z%')->select();
//        return json($user);

//        $user = Db::name('user')->whereLike('name', 'z%')->select();
//        return json($user);

//        $user = Db::name('user')->where('id', 'id', '[1, 3, 5]')->select();
//        return json($user);

//        $user = Db::name('user')->whereIn('id', [1, 3, 5])->select();
//        return json($user);

//        $user = Db::name('user')->whereNotBetween('id', [1, 5])->select();
//        return json($user);

//        $user = Db::name("user")->whereExp("id","<> 8 and id >1")->select();
//        return json($user);


    }

    public function queryLesson15()
    {
        $user = Db::name("user")->when(true, function ($query) {
            // 满足条件时执行这段SQL
            $query->where("id", ">", 5);
        }, function ($query) {
            // 不满足条件时执行这段SQL
            $query->where("id", "<=", 5);
        })->select();
        return json($user);
    }
}