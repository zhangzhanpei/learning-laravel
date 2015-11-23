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
}