<?php

namespace App\Api;

interface AuditoriumRepositoryInterface
{
    public function getAll();

    public function getByName($name);
}
