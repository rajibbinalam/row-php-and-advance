<?php

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





