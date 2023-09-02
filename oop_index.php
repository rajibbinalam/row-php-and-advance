<?php
echo '<h2>This Index is for OOP PHP</h2>'

const BR = '<br />';
echo '------------------------Start The Practice----------------------------'.BR;

BR;

spl_autoload_register(function($class){
    include 'classes/'.$class.'.php';
});

$php = new SebastianBergmann\CodeCoverage\Report\PHP;
$php->php();


echo '------------------------ Reguler Expression -- preg_match ----------------------------'.BR;

$str = 'Bangladesh is a beautiful country bangladesh. ok Bangladesh
no bangladesh';

if (preg_match("/bangladesh/i", $str)) {
    echo 'true';
}else{
    echo 'false';
}

// echo preg_replace('/^bangladesh/i','Hello', $str);


echo '<br /> --------------------------------- Interface ---------------------------------------------- <br />';
interface School{
    public function mySchool();
}
interface College{
    public function myCollege();
}
interface Varsity{
    public function myVarsity();
}

class Teacher implements School, Varsity, College{
    public function __construct() {
        $this->mySchool();
        $this->myCollege();
        $this->myVarsity();
    }

    public function mySchool(){
        echo "This Teacher From School. <br/>";
    }
    public function myCollege(){
        echo "This Teacher From College. <br/>";
    }
    public function myVarsity(){
        echo "This Teacher From Varsity. <br/>";
    }
}

class Student implements School, Varsity, College{
    public function __construct() {
        $this->mySchool();
        $this->myCollege();
        $this->myVarsity();
    }

    public function mySchool(){
        echo "This Student From School. <br/>";
    }
    public function myCollege(){
        echo "This Student From College. <br/>";
    }
    public function myVarsity(){
        echo "This Student From Varsity. <br/>";
    }
}

$teacher = new Teacher();
echo '<br/>';
$teacher = new Student();

echo ' <br />--------------------------------- Abstract Class ---------------------------------------------- <br />';



abstract class AbsStudent{
    public $name;
    public $age;
    public function StdInfo(){
        echo 'This is Abstract Class - ' . $this->name . ' - ' . $this->age . '<br />';
    }

    abstract public function GetStudent();
}

class Boys extends AbsStudent{
    public function BoyInfo(){
        echo 'This is Boys Class - '. AbsStudent::StdInfo() . '<br />';
    }
    public function GetStudent(){
        echo 'This is Boys Class - ' . $this->name . ' - ' . $this->age . '<br />';
    }
}
$s = new Boys();
$s->name = 'Rajib';
$s->age = 24;
$s->StdInfo();
$s->BoyInfo();
$s->GetStudent();



echo ' <br />--------------------------------- Method Chaining ---------------------------------------------- <br />';



class Calculation{
    public $a = 0;
    public $b = 0;
    public $result = 0;

    public  function getValue($x, $y){
        $this->a = $x;
        $this->b = $y;
        return $this;
    }
    public function getResult(){
        $this->result = $this->a + $this->b;
        return $this->result;
    }

}

$cal = new Calculation;

echo $cal->getValue(2,3)->getResult();



echo ' <br /> --------------------------------- Type Hinting ---------------------------------------------- <br />';


$type = new TypeHinting(new Php);       // object instance as parameter
$type->abc(['a', 'b', 'c', 'd']);       // array as parameter
$type->Numbers(1);                      //  integer as parameter



echo ' <br /> --------------------------------- Late Static Binding ---------------------------------------------- <br />';


class ChildLateStatic extends LateStatingBinding{
    public static function getClass(){
        return __CLASS__;
    }
}

$child = new LateStatingBinding();
$child->frame();
echo ' <br />';
$child = new ChildLateStatic();
$child->frame();


echo ' <br /> --------------------------------- Array Object ---------------------------------------------- <br />';


$arr = array('Html', 'Text', 'Css');
$ar = new arrayObject($arr);
$i = $ar->getIterator();
while ($i->valid()) {
    echo $i->current().'<br />';
    $i->next();
}



echo ' <br /> --------------------------------- Singletone Design Pattern ---------------------------------------------- <br />';

new SingleTone();
new SingleTone();
new SingleTone();
new SingleTone();
new SingleTone();






echo '<br/> ------------- Facade Design Pattern  -------------- <br/>';

$facade = new Facade();
$facade->findApartments('dhaka, jatrabari', 'mapDiv');








echo '<br/> ------------- Connect MYSQL with OOP  -------------- <br/>';

try {
    $db = new mysqli('localhost','root', '', 'rawphp');
    if(mysqli_connect_errno()){
        echo 'Error connecting to';
        exit();
    }else{
        echo 'Successfully connected';
    }
} catch (\Throwable $th) {}


