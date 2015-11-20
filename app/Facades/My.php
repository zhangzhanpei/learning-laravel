<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class My extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'My'; //返回容器中的服务名称，如MyServiceProvider注入到容器中的My服务
    }
}
