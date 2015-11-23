<?php

namespace App\Http\Controllers;

use App\Jobs\SayHello;
use App\Http\Controllers\Controller;

class Test extends Controller
{
    public function sayHello()
    {
        $this->dispatch((new SayHello)->delay(30));
    }

    public function testEvent()
    {
        //可以给事件传参，事件携带参数转到监听者进行处理
        \Event::fire(new \App\Events\SomeEvent);
    }
}