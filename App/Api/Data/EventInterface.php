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
     * @param string $email
     * @return $this
     */
    public function setEmail($email);

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param \DateTime $birthday
     * @return $this
     */
    public function setBirthday($birthday);

    /**
     * @return \DateTime
     */
    public function getBirthday();
}
