<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/26
 * Time: 10:31
 */

/**
 * 这里core类依赖route,autoload,register三个类
 * 如果其它资源类中有些改动，则有可能也要改动core类，这样牵一发而动全身，耦合性较高
 * 所有我们用依赖注入模式，将类的实例和对象之间的依赖关系处理以及将资源注入到core类中等行为放在第三方DI容器中来处理，实现core,route,autoload,register的解耦，保持它们的独立性
 */
// require_once 'route.php';
// require_once 'autoload.php';
// require_once 'register.php';
// class Core{
//     public function run(){
//         $route=new Route();
//         $route->makeurl();
//
//         $autoload=new Autoload();
//         $autoload->authloadtest();
//
//         $register=new Register();
//         $register->gettree();
//     }
// }


class Core{
    private $route;

    public function __construct($route) {
        $this->route=$route;
    }

    public function run(){
        $this->route->makeroute();
    }
}