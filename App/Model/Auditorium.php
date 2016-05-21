<?php
/**
 * Created by PhpStorm.
 * User: Dmitry_Kologrivov
 * Date: 06.05.2016
 * Time: 16:59
 */

namespace App\Model;

use App\Api\Data;

/**
 * Class Auditorium
 * @package App\Model
 */
class Auditorium extends AbstractModel implements Data\AuditoriumInterface
{
    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setData(Data\AuditoriumInterface::ID, $id);
    }

    /**
     * @return Auditorium
     */
    public function getId()
    {
        return $this->getData(Data\AuditoriumInterface::ID);
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        return $this->setData(Data\AuditoriumInterface::NAME, $name);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getData(Data\AuditoriumInterface::NAME);
    }

    /**
     * @param int $seatsNumber
     * @return $this
     */
    public function setSeatsNumber($seatsNumber)
    {
        return $this->setData(Data\AuditoriumInterface::SEATS_NUMBER, $seatsNumber);
    }

    /**
     * @return int
     */
    public function getSeatsNumber()
    {
        return $this->getData(Data\AuditoriumInterface::SEATS_NUMBER);
    }

    /**
     * @param string $vipSeats
     * @return $this
     */
    public function setVipSeats($vipSeats)
    {
        return $this->setData(Data\AuditoriumInterface::VIP_SEATS, $vipSeats);
    }

    /**
     * @return array
     */
    public function getVipSeats()
    {
        return $this->getData(Data\AuditoriumInterface::VIP_SEATS);
    }
}
