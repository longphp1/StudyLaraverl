<?php
namespace App\Listeners;

class UserEventSubscriber{
    /**
     * 处理用户登录事件。
     */
    public function onUserLogin($event){}
    /**
     * 处理用户注销事件。
     */
    public function onUserLogout($event){}
    /**
     * 为订阅者注册监听器。
     *
     * @param  Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($event){
        $event->listen(
            'Illuminate\Auth\Events\Login',
            'App\Listeners\UserEventSubscriber@onUserLogin'
        );

        $event->listen(
            'Illuminate\Auth\Events\Logout',
            'App\Listeners\UserEventSubscriber@onUserLogout'
        );
    }
}