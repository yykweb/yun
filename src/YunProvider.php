<?php
namespace yykweb\yun;
use houdunwang\framework\build\Provider;

class YunProvider extends Provider
{
    //延迟加载
    public $defer = true;

    public function boot() {
    }

    public function register() {
        $this->app->single( 'Yun', function (  ) {
            return new Yun();
        } );
    }
}