<?php
/**
 * Created by PhpStorm.
 * User: Dmitry_Kologrivov
 * Date: 06.05.2016
 * Time: 16:59
 */

namespace App\Model;

use App\Api\Data;
use App\Api\Data\TicketInterface;
use DateTime;

class Ticket extends AbstractModel implements Data\TicketInterface
{
    public function setId($id)
    {
        return $this->setData(Data\TicketInterface::ID, $id);
    }

    public function getId()
    {
        return $this->getData(Data\TicketInterface::ID);
    }

    public function setUser_id($user_id)
    {
        return $this->setData(Data\TicketInterface::USER_ID, $user_id);
    }

    public function getUser_id()
    {
        return $this->getData(Data\TicketInterface::USER_ID);
    }

    public function setEvent_id($event_id)
    {
        return $this->setData(Data\TicketInterface::EVENT_ID, $event_id);
    }

    public function getEvent_id()
    {
        return $this->getData(Data\TicketInterface::EVENT_ID);
    }

     /**
     * @param int $user_id
     * @return $this
     */
    public function setDatetime($datetime)
    {
        return $this->setData(Data\TicketInterface::DATETIME, $datetime);
    }


    /**
     * @return datetime
     */
    public function getDatetime()
    {
        return $this->getData(Data\TicketInterface::DATETIME);
    }

    /**
     * @param int $seat
     * @return $this
     */
    public function setSeat($seat)
    {
        return $this->setData(Data\TicketInterface::SEAT, $seat);
    }

    /**
     * @return int
     */
    public function getSeat()
    {
        return $this->getData(Data\TicketInterface::SEAT);
    }
}
