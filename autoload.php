<?php

/**
 * @param string $className
 */
function autoload($className)
{
    
    $className = ltrim($className, '\\');


    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) { //последнее вхождение символа \
        $namespace = substr($className, 0, $lastNsPos);//возвращает часть строки от начала до $lastNsPos

        //echo '<br/>namespace = '.$namespace;

        $className = substr($className, $lastNsPos + 1); //возвращает часть строки от $lastNsPos до конца $className

        //echo '<br/>classname = '.$className;

        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;

        //echo '<br/>filename = '.$fileName;

    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
   // echo '<br/>filename-2 = '.$fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';;

    require $fileName;
}
spl_autoload_register('autoload');
