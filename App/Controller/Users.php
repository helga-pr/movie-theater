<?php

namespace App\Controller;

use App\Core\FrontController;
use App\Model\UserRepository;

/**
 * Class Users
 */
class Users extends FrontController
{
    /**
     * @var UserRepository
     */
    private $repository;

    /**
     * Users constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->repository = new UserRepository();
    }

    /**
     * indexAction
     */
    function indexAction()
    {
        $this->view->generate('users/users_index', 'template_index');
    }

    /**
     * addAction
     */
    function addAction()
    {
        $user = new \App\Model\User();
        if (!empty($_POST)) {
            $user->setData($_POST);
            try {
                if ($this->repository->save($user)) {
                    header('Location: /users/all');
                }
            } catch (\Exception $e) {
                //log error
            }
        }
        $this->view->generate('users/users_add', 'template_index');
    }

    /**
     * allAction
     */
    function allAction()
    {
        $data = [];
        try {
            $data = [
                'users' => $this->repository->getAll()
            ];
        } catch (\Exception $e) {
            //log error
        }
        $this->view->generate('users/users_all', 'template_index', $data);
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
                    'user' => $this->repository->getById($_POST['id']),
                ];
            } catch (\Exception $e) {
                //log error
            }
        }
        $this->view->generate('users/users_findById', 'template_index', $data);
    }

    /**
     * findByEmailAction
     */
    public function findByEmailAction()
    {
        $data = [];
        if (isset($_POST['email'])) {
            try {
                $data = [
                    'user' => $this->repository->getByEmail($_POST['email'])
                ];
            } catch (\Exception $e) {
                //log error
            }
        }
        $this->view->generate('users/users_findByEmail', 'template_index', $data);
    }

    /**
     *
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
