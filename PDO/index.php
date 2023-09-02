<?php

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



echo '<br/> ------------- Prepare Statement with PDO  -------------- <br/>';

$dsn = "mysql:dbname=rawphp;host=localhost";
$user = "root";
$pass = "";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


$users = $pdo->query($sql);





