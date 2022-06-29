<?php
// Database connection

// Throw exception
try {
    $pdo = new PDO('mysql:host=localhost;dbname=bit;charset=utf8mb4','root','');
    $output = 'Database connection established';
}catch (PDOException $e){
    $output = 'Unable to connect to the database server:' . $e->getMessage();
}

// PDO FETCH METHOD
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);