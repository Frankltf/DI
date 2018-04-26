<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/26
 * Time: 10:37
 */
require_once 'core.php';
require_once 'di.php';
require_once 'route.php';
require_once 'autoload.php';
require_once 'register.php';
// $di=new DI();
// $di->route=function(){
//     return new Route();
// };
// $di->autoload=function(){
//     return new Autoload();
// };
// $di->register= function () {
//     return new Register();
// };
// $di->core=function($di){
//     return new Core($di->route);
// };
// $core=$di->core;
//
// $core->run();

DI::bind('route',function(){
   return new Route();
});
DI::bind('core',function(){
    return new Core(DI::getobj('route'));
});
$core=DI::getobj('core');
$core->run();
