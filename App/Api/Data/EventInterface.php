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
     * @param string $Name
     * @return $this
     */
    public function setName($Name);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param double $basePrice
     * @return $this
     */
    public function setBasePrice($basePrice);

    /**
     * @return double
     */
    public function getBasePrice();

    /**
     * @param string $rating
     * @return $this
     */
    public function setRating($rating);

    /**
     * @return string
     */
    public function getRating();

}
