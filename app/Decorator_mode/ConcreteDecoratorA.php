<?php
/**
 * Created by PhpStorm.
 * User: ÕÅ±£ÀÖ
 * Date: 2017/3/25
 * Time: 11:04
 */

namespace Test;
class ConcreteDecoratorA extends Decorator
{
    public function __construct(Component $component)
    {
        parent::__construct($component);
    }

    public function operation() {
        $this->before();
        parent::operation();
        $this->after();
    }

    public function before()
    {
        // TODO: Implement before() method.
        echo "before!!!";
    }

    public function after()
    {
        // TODO: Implement after() method.
        echo "after!!!";
    }
}