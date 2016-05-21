<?php

namespace App\Api;

use App\Model\User;

/**
 * Interface UserRepositoryInterface
 * @package App\Api
 */
interface UserRepositoryInterface
{
    /**
     * @param User $user
     * @return mixed
     */
    public function save(User $user);

    /**
     * @param $id
     * @return boolean
     */
    public function remove($id);

    /**
     * @param $id
     * @return User
     */
    public function getById($id);

    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param $email
     * @return User
     */
    public function getByEmail($email);
}
