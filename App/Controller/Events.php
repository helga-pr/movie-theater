<?php

namespace App\Controller;

use App\Core\FrontController;
use App\Model\Event;
use App\Model\EventRepository;

/**
 * Class Events
 */
class Events extends FrontController
{
    /**
     * @var EventRepository
     */
    private $repository;

    /**
     * Events constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->repository = new EventRepository();
    }

    /**
     * indexAction
     */
    function indexAction()
    {
        $this->view->generate('events/events_index', 'template_index');
    }

    /**
     * addAction
     */
    function addAction()
    {
        $event = new Event();
        if (!empty($_POST)) {
            $event->setData($_POST);
            try {
                if ($this->repository->save($event)) {
                    header('Location: /events/all');
                }
            } catch (\Exception $e) {
                //log error
            }
        }
        $this->view->generate('events/events_add', 'template_index');
    }

    /**
     * allAction
     */
    function allAction()
    {
        $data = [];
        try {
            $data = [
                'events' => $this->repository->getAll()
            ];
        } catch (\Exception $e) {
            //log error
        }
        $this->view->generate('events/events_all', 'template_index', $data);
    }

    /**
     * findByIdAction
     */
    public function findByIdAction()
    {
        $data = [];
        if (isset($_POST['id'])) {
            try {
                $data = [
                    'event' => $this->repository->getById($_POST['id']),
                ];
            } catch (\Exception $e) {
                //log error
            }
        }
        $this->view->generate('events/events_findById', 'template_index', $data);
    }

    /**
     * findByNameAction
     */
    public function findByNameAction()
    {
        $data = [];
        if (isset($_POST['name'])) {
            try {
                $data = [
                    'event' => $this->repository->getByName($_POST['name'])
                ];
            } catch (\Exception $e) {
                //log error
            }
        }
        $this->view->generate('events/events_findByName', 'template_index', $data);
    }

    /**
     * deleteAction
     */
    public function deleteAction()
    {
        if (!isset($_POST['id']) && empty($_POST['id'])) {
            $this->addAction();
        }
        try {
            $this->repository->remove($_POST['id']);
            $this->addAction();
        } catch (\Exception $e) {
            //log error
        }
    }
}
