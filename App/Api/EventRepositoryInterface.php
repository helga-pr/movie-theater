<?php

namespace App\Api;

use App\Model\Event;

interface EventRepositoryInterface
{
    public function getAll();

    public function getByName($name);

    public function save(Event $event);

    public function remove($id);
}
