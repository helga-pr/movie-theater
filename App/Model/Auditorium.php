<?php
/**
 * Created by PhpStorm.
 * User: Dmitry_Kologrivov
 * Date: 06.05.2016
 * Time: 16:59
 */

namespace App\Model;

use App\Api\Data;

class Auditorium extends AbstractModel implements Data\AuditoriumInterface
{
    public function setId($id)
    {
        return $this->setData(Data\AuditoriumInterface::ID, $id);
    }

    public function getId()
    {
        return $this->getData(Data\AuditoriumInterface::ID);
    }

    public function setName($name)
    {
        return $this->setData(Data\AuditoriumInterface::NAME, $name);
    }

    public function getName()
    {
        return $this->getData(Data\AuditoriumInterface::NAME);
    }

    public function setSeatsNumber($seatsNumber)
    {
        return $this->setData(Data\AuditoriumInterface::SEATS_NUMBER, $seatsNumber);
    }

    public function getSeatsNumber()
    {
        return $this->getData(Data\AuditoriumInterface::SEATS_NUMBER);
    }

    public function setVipSeats($vipSeats)
    {
        return $this->setData(Data\AuditoriumInterface::VIP_SEATS, $vipSeats);
    }

    public function getVipSeats()
    {
        return $this->getData(Data\AuditoriumInterface::VIP_SEATS);
    }
}
