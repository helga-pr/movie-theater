<?php

namespace App\Controller;

use App\Core\FrontController;
use App\Model\TicketRepository;

/**
 * Class Index
 */
class Tickets extends FrontController
{
    /**
     * @var TicketRepository
     */
    private $repository;

    /**
     * Index constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->repository = new TicketRepository();
    }

    /**
     * indexAction
     */
    function indexAction()
    {
        $this->view->generate('tickets/tickets_index', 'template_index');
    }

    /**
     * allAction
     */
    function allAction()
    {
        $data = [
            'tickets' => $this->repository->getAll()
        ];
        $this->view->generate('tickets/tickets_all', 'template_index', $data);
    }

    /**
     * searchAction
     */
    public function searchAction()
    {
        $data = [];
        if (isset($_POST['event_name'])) {
            $data = [
                'ticket' => $this->repository->getByEvent($_POST['event_name'])
            ];
        }
        $this->view->generate('tickets/tickets_search', 'template_index', $data);
    }
    
    
}
