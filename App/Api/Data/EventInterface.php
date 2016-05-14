<?php

namespace App\Api\Data;

interface EventInterface
{
    /**#@+
     * Constants
     */
    const ID = 'id';
    const NAME = 'name';
    const BASE_PRICE = 'base_price';
    const RATING = 'rating';

    const LOW = 'low';
    const MIDDLE = 'mid';
    const HIGH = 'high';
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
     * @param string $firstName
     * @return $this
     */
    public function setName($firstName);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $lastName
     * @return $this
     */
    public function setBasePrice($basePrice);

    /**
     * @return string
     */
    public function getBasePrice();

    /**
     * @param enum $rating
     * @return $this
     */
    public function setRating($rating);

    /**
     * @return enum
     */
    public function getRating();

}
