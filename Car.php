<?php
/**
 * Created by PhpStorm.
 * User: 18846
 * Date: 2018/10/13
 * Time: 14:48
 */

class Car
{
    var $color;
    function Car($color="green") {
        $this->color = $color;
    }
    function what_color() {
        return $this->color;
    }
}

$c = new Car();
echo $c->what_color();