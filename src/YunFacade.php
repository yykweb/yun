<?php
namespace yykweb\yun;
use houdunwang\framework\build\Facade;

class YunFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'Yun';
    }
}