<?php

namespace App\Api\Data;

use DateTime;

interface TicketInterface
{
    /**#@+
     * Constants
     */
    const ID = 'id';
    const USER_ID = 'user_id';
    const EVENT_ID = 'event_id';
    const DATETIME = 'datetime';
    const SEAT = 'seat';
    /**#@-*/

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $user_id
     * @return $this
     */
    public function setUser_id($user_id);

    /**
     * @return int
     */
    public function getUser_id();

    /**
     * @param int $event_id
     * @return $this
     */
    public function setEvent_id($event_id);

    /**
     * @return int
     */
    public function getEvent_id();


    /**
     * @param $datetime
     * @return $this
     */
    public function setDatetime($datetime);

    /**
     * @return datetime
     */
    public function getDatetime();

    /**
     * @param int $seat
     * @return $this
     */
    public function setSeat($seat);

    /**
     * @return int
     */
    public function getSeat();

}
