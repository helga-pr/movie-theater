<?php

namespace App\Api;

interface AbstractDomainRepositoryInterface
{
    public function save($object);

    public function remove($object);

    public function getById($id);

    public function getAll();
}
