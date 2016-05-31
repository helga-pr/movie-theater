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

/**
 * Class Ticket
 * @package App\Model
 */
class Ticket extends AbstractModel implements TicketInterface
{
    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setData(TicketInterface::ID, $id);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->getData(TicketInterface::ID);
    }

    /**
     * @param int $user_id
     * @return $this
     */
    public function setUser_id($user_id)
    {
        return $this->setData(TicketInterface::USER_ID, $user_id);
    }

    /**
     * @return int
     */
    public function getUser_id()
    {
        return $this->getData(TicketInterface::USER_ID);
    }

    /**
     * @param int $event_id
     * @return $this
     */
    public function setEvent_id($event_id)
    {
        return $this->setData(TicketInterface::EVENT_ID, $event_id);
    }

    /**
     * @return int
     */
    public function getEvent_id()
    {
        return $this->getData(TicketInterface::EVENT_ID);
    }

     /**
     * @param DateTime $datetime
     * @return $this
     */
    public function setDatetime($datetime)
    {
        return $this->setData(TicketInterface::DATETIME, $datetime);
    }


    /**
     * @return datetime
     */
    public function getDatetime()
    {
        return $this->getData(TicketInterface::DATETIME);
    }

    /**
     * @param int $seat
     * @return $this
     */
    public function setSeat($seat)
    {
        return $this->setData(TicketInterface::SEAT, $seat);
    }

    /**
     * @return int
     */
    public function getSeat()
    {
        return $this->getData(TicketInterface::SEAT);
    }
}
