<?php

namespace app\controller;

class Error
{
    public function __call(string $name, array $arguments)
    {
        return '不存在的控制器';
    }
}