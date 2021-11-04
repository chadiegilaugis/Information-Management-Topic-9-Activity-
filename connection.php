<?php

$localhost = '127.0.0.1';
$database = 'topic9_db';
$username = 'root';
$password = 'secret';

try{

//    this block will set the pdo connection

//    create a instance of pdo
    $dsn = "mysql:host=$localhost;dbname=$database";
    $conn = new PDO($dsn,$username,$password);



}catch (PDOException $e){

//    this block will handle the error throwed

    die('Connection has a problem ' . $e->getMessage());


}
