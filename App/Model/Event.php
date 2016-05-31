<?php
/**
 * Created by PhpStorm.
 * User: Dmitry_Kologrivov
 * Date: 06.05.2016
 * Time: 16:59
 */

namespace App\Model;

use App\Api\Data;
use App\Api\Data\EventInterface;
/**
 * Class Event
 * @package App\Model
 */
class Event extends AbstractModel implements EventInterface
{
    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        if($id != null && $id > 0)
        return $this->setData(EventInterface::ID, $id);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->getData(EventInterface::ID);
    }
   
    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        if($name != null)
            return $this->setData(EventInterface::NAME, $name);

    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getData(EventInterface::NAME);

    }

    /**
     * @param double $basePrice
     * @return $this
     */
    public function setBasePrice($basePrice)
    {
        if($basePrice != null && $basePrice > 0)
            return $this->setData(EventInterface::BASE_PRICE, $basePrice);

    }

    /**
     * @return double
     */
    public function getBasePrice()
    {
        return $this->getData(EventInterface::BASE_PRICE);
    }

    /**
     * @param  $rating
     * @return $this
     */
    public function setRating($rating)
    {
        if($rating != null)
            return $this->setData(EventInterface::RATING, $rating);

    }

    /**
     *  @return string
     */
    public function getRating()
    {
        return $this->getData(EventInterface::RATING);
    }
}