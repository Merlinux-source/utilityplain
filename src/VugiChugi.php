<?php

namespace Laramin\Utility;

class VugiChugi{
    public static function acRouter(){
        return 'activate';
    }

    public static function acRouterSbm(){
        return 'activate_system_submit';
    }

    public static function mdNm(){
        return 'checkProject';
    }

    public static function gtc(){
        return 'tbgbpber';
    }

    public static function acDRouter()
    {
        return 'home';
    }

    public static function lsTitle()
    {
        return 'Activate';
    }

    public static function lcLabRoute()
    {
        return 'https://license.viserlab.com/updates/version/';
    }

    public static function lcLabSbm()
    {
        return 'https://license.viserlab.com/activate';
    }

    public static function clsNm(){
        return 'Laramin\Utility\Controller\UtilityController';
    }

    public static function pshMdl(){
        return 'prependMiddleware';
    }

    public static function pshMdlGrp(){
        return 'pushMiddlewareToGroup';
    }

    public static function ldRt(){
        return 'loadRoutesFrom';
    }

    public static function splnk(){
        return 'https://viserlab.com/support';
    }

    public static function upman(){
        return 'https://license.viserlab.com/api/request-update-file';
    }

    public static function gttmp(){
        return 'https://license.viserlab.com/updates/templates/';
    }
}
