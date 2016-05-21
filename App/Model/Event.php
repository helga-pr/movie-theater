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
 * Class Event
 * @package App\Model
 */
class Event extends AbstractModel implements Data\EventInterface
{
    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        if($id != null && $id > 0)
        return $this->setData(Data\EventInterface::ID, $id);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->getData(Data\EventInterface::ID);
    }

   
    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        if($name != null)
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
     * @param double $basePrice
     * @return $this
     */
    public function setBasePrice($basePrice)
    {
        if($basePrice != null && $basePrice > 0)
            return $this->setData(Data\EventInterface::BASE_PRICE, $basePrice);

    }

    /**
     * @return double
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
        if($rating != null)
            return $this->setData(Data\EventInterface::RATING, $rating);

    }

    /**
     *  @return string
     */
    public function getRating()
    {
        return $this->getData(Data\EventInterface::RATING);
    }
}
