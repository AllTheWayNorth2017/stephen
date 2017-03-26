<?php
namespace Test;
    abstract class Decorator extends Component{
    protected $component;
    public function __construct(Component $component){
    $this->component = $component;
}
    public function operation(){
        $this->component->operation();
    }
    abstract public function before();
    abstract public function after();
}