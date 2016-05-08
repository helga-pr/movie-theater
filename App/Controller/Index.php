<?php

namespace App\Controller;

use App\Core\FrontController;
use App\Model\Index as Model;

/**
 * Class Index
 */
class Index extends FrontController
{
    /**
     * Index constructor.
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * indexAction
     */
    function indexAction()
    {
        $this->view->generate('index_view', 'template_index');
    }
}
