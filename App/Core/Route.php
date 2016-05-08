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

        $parts = explode("?", $_SERVER['REQUEST_URI']);
        $routes = explode('/', $parts[0]);

        // получаем имя контроллера
        if (!empty($routes[1])) {
            $controllerName = $routes[1];
        }

        // получаем имя экшена
        if (!empty($routes[2])) {
            $actionName = $routes[2];
        }

        $controllerFullName = '\\App\\Controller\\' . ucfirst($controllerName);

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
