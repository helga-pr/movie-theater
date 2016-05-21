<?php

namespace App\Api;

use App\Model\Event;

/**
 * Interface EventRepositoryInterface
 * @package App\Api
 */
interface EventRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param $name
     * @return Event
     */
    public function getByName($name);

    /**
     * @param Event $event
     * @return mixed
     */
    public function save(Event $event);

    /**
     * @param $id
     * @return boolean
     */
    public function remove($id);
}
