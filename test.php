<?php


// $p = "/<tr><td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<td>(.*?)<\/td>\s*<\/tr>/i";
// $str = "<table> <tr><td>Eric</td><td>25</td></tr> <tr><td>John</td><td>26</td></tr> </table>";
// preg_match_all($p, $str, $matches);
// print_r($matches);
// 	echo "<hr />";
// 	var_dump($matches);


//__tostring魔术方法
// class Person{
//     private $name = "";
//     function __construct($name = ""){
                 
//         $this->name = $name;
//     }
//     function say(){
                 
//         echo "Hello,".$this->name."!<br/>";  
//     }
//     function __tostring(){//在类中定义一个__toString方法
//         return  "Hello,".$this->name."!<br/>";    
//     }
// }
// $WBlog = new Person('WBlog');
// echo $WBlog;//直接输出对象引用则自动调用了对象中的__toString()方法
// $WBlog->say();//试比较一下和上面的自动调用有什么不同

//echo "<hr/>";
//
//class TestClass
//{
//    public $foo;
//
//    public function __construct($foo)
//    {
//        $this->foo = $foo;
//    }
//
//    public function __toString() {
//        return $this->foo;
//    }
//}
//
//$class = new TestClass('Hello');
//echo $class;
//$a = new TestClass('Hello');

//
//class MyClass {
//    const CONST_VALUE = 'A constant value';
//}
//
//$classname = 'MyClass';
//echo $classname::CONST_VALUE; // 自 PHP 5.3.0 起
//
//echo MyClass::CONST_VALUE;
//
//
//
//class OtherClass extends MyClass
//{
//    public static $my_static = 'static var';
//
//    public static function doubleColon() {
//        echo parent::CONST_VALUE . "\n";
//        echo self::$my_static . "\n";
//    }
//}
//
//$classname = 'OtherClass';
//echo $classname::doubleColon(); // 自 PHP 5.3.0 起
//
//OtherClass::doubleColon();


class MyClass
{
    protected function myFunc() {
        echo "MyClass::myFunc()\n";
    }
}

class OtherClass extends MyClass
{
    // 覆盖了父类的定义
    public function myFunc()
    {
        // 但还是可以调用父类中被覆盖的方法
        parent::myFunc();
        echo "OtherClass::myFunc()\n";
    }
}

$class = new OtherClass();
$class->myFunc();

