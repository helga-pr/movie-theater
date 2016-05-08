<?php

namespace App\Api\Data;

interface AuditoriumInterface
{
    /**#@+
     * Constants
     */
    const ID = 'id';
    const NAME = 'name';
    const SEATS_NUMBER = 'seats_number';
    const VIP_SEATS = 'vip_seats';
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
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param int $seatsNumber
     * @return $this
     */
    public function setSeatsNumber($seatsNumber);

    /**
     * @return int
     */
    public function getSeatsNumber();

    /**
     * @param string $vipSeats
     * @return $this
     */
    public function setVipSeats($vipSeats);

    /**
     * @return string
     */
    public function getVipSeats();
}
