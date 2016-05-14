<?php

//Временное отображение ошибок
error_reporting(E_ALL);

defined( 'APPLICATION_PATH' ) || define( 'APPLICATION_PATH', realpath( dirname( __file__ ) . '/App' ) ) ; 
//realpath Возвращает абсолютный путь к файлу
//dirname Возвращает имя каталога из указанного пути
//__file__ Возвращает имя каталога из пути полный путь и имя файла 

defined( 'APPLICATION_NAME' ) || define( 'APPLICATION_NAME', 'movie-theater' ) ;

define('HOST', 'http://' . $_SERVER['HTTP_HOST'].'/'.APPLICATION_NAME);

//echo '<br/>host = '.HOST;

require_once 'autoload.php';
require_once APPLICATION_PATH.'/bootstrap.php';
