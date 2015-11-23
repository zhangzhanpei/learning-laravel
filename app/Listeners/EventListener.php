<?php

namespace App\Listeners;

use App\Events\SomeEvent;
use Illuminate\Queue\InteractsWithQueue;
//如果要把事件处理推入队列，EventListener实现下面的ShouldQueue接口即可
use Illuminate\Contracts\Queue\ShouldQueue;

class EventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SomeEvent  $event
     * @return void
     */
    public function handle(SomeEvent $event)
    {
        \Log::info('SomeEvent事件被触发，这里是第一个事件监听者的处理函数');
        //return false; //这里可以停止事件往下传播
    }
}
