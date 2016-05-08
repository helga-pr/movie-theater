<?php

$hostname = 'localhost';
$dbName = 'cinema';
$user = 'root';
$pass = '';

$db = new PDO(
    'mysql:host=' . $hostname . ';dbname=' . $dbName,
    $user,
    $pass,
    [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'']
);

Lib\Registry::getInstance()->set('db', $db);
