<?php
// define("BR", "<br />");
const BR = '<br />';

// class Car{
//     var $color;

//     function HelloWorld(){

//         echo "Hello World ".BR."$this->color";
//     }

// }

// $car = new Car();
// $car->color = 'red';
// $car->HelloWorld();


// $url = 'https://www.amazon.com/';
// $url = 'https://www.google.com/';
$url = 'https://www.google.com/search?rlz=1C1KNTJ_enBD1062BD1062&sxsrf=AB5stBgB6oJrHdCAjVJahVeJhfeo9DpGOQ:1688544314649&q=image&tbm=isch&sa=X&ved=2ahUKEwjakb_gjff_AhURd2wGHWvaAP0Q0pQJegQIDxAB&biw=1366&bih=617&dpr=1';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$RESULT = curl_exec($curl);

// echo $RESULT; // uncommend for show result

curl_close($curl);




class User{
    public $name;
    public $age;

    function __construct($userName, $userAge){
        $this->name = $userName;
        $this->age = $userAge;
    }

    function userOne(){
        echo $this->name .' - '. $this->age;
    }

    function __destruct(){
        unset($this->name);
        unset($this->age);
    }
}
$name = 'Rajib';
$age = 25;
$user = new User($name, $age);
$user->userOne();

echo '--------------------------- <br/>';

class Student{

    public function __get($a){
        echo $a . " is a Good";
    }


    public function __set($a, $value){
        echo $a .' '. $value . " is a Good boy";
    }

}

$s = new Student();
$s->Hasan = 'Mahmud';


echo '--------------------------- <br/>';



// function __autoload($class_name){
//     include './classes/'.$class_name.'.php';
// }

spl_autoload_register(function($class_name){
    include './classes/'.$class_name.'.php';
});


$php = new Php;
$ruby = new Ruby;
$java = new Java;


echo '--------------------------- <br/>';

class ConstantCreate{
    const HELLO = 'Hello World'.BR;

    public function hello(){
        echo self::HELLO;
    }

}
$co = new ConstantCreate;
$co->hello();

echo ConstantCreate::HELLO;



echo '--------------------------- <br/>';

abstract class Car{
    abstract public function Speed();
}


class Volvo extends Car{
    protected $name = 'Rajib';
    public function Speed(){
        echo 'this is the expected.' . PHP_EOL . 'I am '. $this->name.BR;
    }
}

$c = new Volvo;
$c->Speed();


echo '<br/> ------------- File Read -------------- <br/>';

// echo readfile("asset/text.txt");
fopen("asset/text1.txt", 'w');  // open file on write mode or create new file if it doesn't exist

$r = fopen("asset/text.txt", 'r');
// echo filesize("asset/text.txt");
echo fread($r, filesize("asset/text.txt"));


$new = fopen("asset/Hello.php", 'a');
$txt = '<?php
class Hello{
    // Code Here
}';
fwrite($new, '');
fclose($new);



echo '<br/> ------------- __CLASS__ and get_class() -------------- <br/>';


class PhpClassesChild extends PhpClasses{
    public function cms(){
        echo 'CHild Class: '.__CLASS__.'<br/>';
        echo 'CHild Class: '.get_class($this).'<br/>';
        echo '<hr/>';
        parent::framework();
    }

}
$cls = new PhpClassesChild;

$cls->framework();
echo '<hr/>';
$cls->cms();

echo '<br/> ------------- Serialize and Unserialize -------------- <br/>';

$programmning = new Programming();
$serialize = serialize($programmning);
file_put_contents('programming.txt', $serialize);
echo $serialize.'<br/>';
$content = file_get_contents('programming.txt');
echo $content.'<br/>';
$unserialize = unserialize($content);       // unserialize return array/ objects
print_r($unserialize);




echo '<br/> ------------- filter extention -------------- <br/>';
// print_r(filter_list());

$str = " admin @ gmail . com  hello@gmail.com";
$newstr = filter_var($str, FILTER_SANITIZE_EMAIL);
echo $newstr;

echo '<br/><br/>';

$url = "https://www.w3schools.com";

echo filter_var($url, FILTER_SANITIZE_URL);



echo '<br/> ------------- extract Method -------------- <br/>';

$a = "GeeksforGeeks";
$my_array = array("a" => "Geeks","b" => "for", "d" => "Geeks");
extract($my_array, EXTR_OVERWRITE);
echo "a = $a "."<br>";
echo "b = $b "."<br>";
echo "d = $d "."<br>";



echo '<br/> ------------- get Closest Number -------------- <br/>';
function findClosest($arr, $n, $target) {
    $left = 0;
    $right = $n - 1;
    while ($left < $right) {
        if (abs($arr[$left] - $target) <= abs($arr[$right] - $target)) {
            $right--;
        } else {
            $left++;
        }
    }
    return $arr[$left];
}

$arr = array(1, 2, 5, 6, 6, 8, 8, 9);
$n = sizeof($arr);
$target = 4;
echo findClosest($arr, $n, $target);





echo '<br/> ------------- get Closest time -------------- <br/>';

$timeArray = [
    "8:00 AM",
    "9:00 AM",
    "6:00 AM",
    "10:00 PM",
    "2:00 PM",
    "6:00 AM",
    "9:00 AM",
    "8:00 AM",
    "6:00 AM",
    "10:05 PM",
    "2:05 PM",
    "6:00 AM",
    "9:30 AM"
];

$targetTime = date('h:i A');

$targetTimestamp = strtotime($targetTime);
$closestTime = null;
$minTimeDifference = PHP_INT_MAX;

foreach ($timeArray as $timeValue) {
    $timeStamp = strtotime($timeValue);
    $timeDifference = abs($timeStamp - $targetTimestamp);

    if ($timeDifference < $minTimeDifference) {
        $minTimeDifference = $timeDifference;
        $closestTime = $timeValue;
    }
}

echo "Closest time: $closestTime";



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



echo '<br/> ------------- Connect MYSQL with PDO  -------------- <br/>';

$dsn = "mysql:dbname=rawphp;host=localhost";
$user = "root";
$pass = "";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$sql = "SELECT * FROM users";

$users = $pdo->query($sql);
foreach ($users as $user) {
    echo $user['username'] . '-' . $user['skill'] . '<br/>';
}