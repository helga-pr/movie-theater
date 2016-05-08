<?php

namespace App\Core;

/**
 * Class View
 */
class View
{
    /**
     * @param string $contentView - виды отображающие контент страниц;
     * @param string $templateView - общий для всех страниц шаблон;
     * @param array|null $data - массив, содержащий элементы контента страницы. Обычно заполняется в модели.
     */
    function generate($contentView, $templateView, $data = null)
    {
        $contentView .= '.phtml';
        if (is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }
        include APPLICATION_PATH . '/templates/' . $templateView . '.php';
    }
}
