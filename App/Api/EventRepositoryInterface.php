<?php

namespace App\Api;

interface EventRepositoryInterface
{
    public function getAll();

    public function getByName($name);
}
