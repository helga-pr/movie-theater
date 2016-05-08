<?php

namespace App\Controller;

use App\Core\FrontController;
use App\Model\AuditoriumRepository;

/**
 * Class Index
 */
class Auditoriums extends FrontController
{
    private $repository;

    /**
     * Index constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->repository = new AuditoriumRepository();
    }

    /**
     * indexAction
     */
    function indexAction()
    {
        $this->view->generate('auditoriums/auditoriums_index', 'template_index');
    }

    /**
     * allAction
     */
    function allAction()
    {
        $data = [
            'auditoriums' => $this->repository->getAll()
        ];
        $this->view->generate('auditoriums/auditoriums_all', 'template_index', $data);
    }

    public function searchAction()
    {
        $data = [];
        if (isset($_POST['aud_name'])) {
            $data = [
                'auditorium' => $this->repository->getByName($_POST['aud_name'])
            ];
        }
        $this->view->generate('auditoriums/auditoriums_search', 'template_index', $data);
    }
}
