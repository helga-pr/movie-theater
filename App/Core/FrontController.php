<?php

namespace App\Core;

/**
 * Class FrontController
 */
class FrontController
{
    /**
     * @var - implements dinamically
     */
    protected $model;

    /**
     * @var View
     */
    protected $view;

    /**
     * FrontController constructor.
     */
    function __construct()
    {
        $this->view = new View();
    }
}
