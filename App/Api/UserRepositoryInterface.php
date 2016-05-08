<?php

namespace App\Api;

use App\Model\User;

interface UserRepositoryInterface
{
    public function save(User $user);

    public function remove($id);

    public function getById($id);

    public function getAll();

    public function getByEmail($email);
}
