<?php
/**
 * Created by PhpStorm.
 * User: ÕÅ±£ÀÖ
 * Date: 2017/3/25
 * Time: 11:05
 */
namespace Test;
class Client
{
    /**
     *
     */
    public static function main() {
        $decoratorA = new ConcreteDecoratorA(new ConcreteComponent());
        $decoratorA->operation();
        $decoratorB=new ConcreteDecoratorA($decoratorA);
        $decoratorB->operation();
    }
}