<?php
/**
 * Created by PhpStorm.
 * User: liutengfei
 * Date: 2018/4/26
 * Time: 10:43
 */

/**
 * Class DI 简单版的DI容器
 */
// class DI{
//     public $service=array();
//     public function __set($name, $value) {
//         $this->service[$name]=$value;
//         var_dump($this->service);
//     }
//     public function __get($name) {
//         return $this->service[$name]($this);
//     }
// }


/**
 *
 */
class DI{
    protected static $register=array();
    public static function bind($name,callable $resolver){
        static::$register[$name]=$resolver;
    }
    public static function getobj($name){
        $resolver=static::$register[$name];
        return $resolver();
    }
}