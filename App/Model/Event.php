<?php
/**
 * Created by PhpStorm.
 * User: Dmitry_Kologrivov
 * Date: 06.05.2016
 * Time: 16:59
 */

namespace App\Model;

use App\Api\Data;




class Event extends AbstractModel implements Data\EventInterface
{
    /**
     * @inheritdoc
     */
    public function setId($id)
    {
        if($id != NULL && $id > 0)
        return $this->setData(Data\EventInterface::ID, $id);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getData(Data\EventInterface::ID);
    }

   
    /**
     * @param string $firstName
     * @return $this
     */
    public function setName($name)
    {
        if($name != NULL)
            return $this->setData(Data\EventInterface::NAME, $name);

    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getData(Data\EventInterface::NAME);

    }

    /**
     * @param string $lastName
     * @return $this
     */
    public function setBasePrice($basePrice)
    {
        if($basePrice != NULL && $basePrice > 0)
            return $this->setData(Data\EventInterface::BASE_PRICE, $basePrice);

    }

    /**
     * @return string
     */
    public function getBasePrice()
    {
        return $this->getData(Data\EventInterface::BASE_PRICE);
    }

    /**
     * @param  $rating
     * @return $this
     */
    public function setRating($rating)
    {
        if($rating != NULL)
            return $this->setData(Data\EventInterface::RATING, $rating);

    }

    /**
     * @return
     */
    public function getRating()
    {
        return $this->getData(Data\EventInterface::RATING);
    }
}
