<?php

namespace App\Core;

/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/

/**
 * Class Route
 */
class Route
{
    /**
     * start
     */
    static function start()
    {
        // контроллер и действие по умолчанию
        $controllerName = 'Index';
        $actionName = 'index';

        //explode - ф-ция, которая разбивает строку на подстроки в соответствии с указанным разделителем (первый  параметр)
        $parts = explode("?", $_SERVER['REQUEST_URI']);

        $routes = explode('/', $parts[0]);

         // получаем имя контроллера
        if (!empty($routes[2])) {
            $controllerName = $routes[2];

        }

        // получаем имя экшена
        if (!empty($routes[3])) {
            $actionName = $routes[3];
        }

        $controllerFullName = '\\App\\Controller\\' . ucfirst($controllerName);//переводит первый символ строки в верхний регистр

        // создаем контроллер
        $controller = new $controllerFullName;
        $action = $actionName . 'Action';

        if (method_exists($controller, $action)) {
            // вызываем действие контроллера
            $controller->$action();
        } else {
            // здесь также разумнее было бы кинуть исключение
            Route::ErrorPage404();
        }
    }

    /**
     * ErrorPage404
     */
    static function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . '404');
    }
}
