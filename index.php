<?php

//Временное отображение ошибок
error_reporting(E_ALL);

defined( 'APPLICATION_PATH' ) || define( 'APPLICATION_PATH', realpath( dirname( __file__ ) . '/App' ) ) ;

require_once 'autoload.php';
require_once APPLICATION_PATH.'/bootstrap.php';
