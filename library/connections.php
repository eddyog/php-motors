<?php


// Proxy connections to the phpmotors database

function phpmotorsConnect()
{

$server = 'localhost';
$dbname = 'phpMotors';
$username = 'iClient';
$password = ')weR(HxJPzlM_H3j';

$dsn = "mysql:host=$server;dbname=$dbname";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try{
    $link = new PDO($dsn, $username, $password, $options);
    // if(is_object($link)) {
    //     echo 'it worked!';
    // }
    return $link;
} catch(PDOException $e){
    // echo "It didn't work, error: " . $e->getMessage();
    header('Location: /PHP-MOTORS/500.php');
    exit;
}
}