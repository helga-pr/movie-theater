<?php
/**
 * Created by PhpStorm.
 * User: Dmitry_Kologrivov
 * Date: 06.05.2016
 * Time: 16:59
 */

namespace App\Model;

use App\Api\Data;
use App\Api\Data\UserInterface;

/**
 * Class User
 * @package App\Model
 */
class User extends AbstractModel implements UserInterface
{
    /**
     * @inheritdoc
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setData(UserInterface::ID, $id);
    }

    /**
     * @inheritdoc
     * @return int
     */
    public function getId()
    {
        return $this->getData(UserInterface::ID);
    }

    /**
     * @inheritdoc
     * @param string $firstname
     * @return mixed
     */
    public function setFirstName($firstName)
    {
        return $this->setData(UserInterface::FIRST_NAME, $firstName);
    }

    /**
     * @inheritdoc
     * @return string
     */
    public function getFirstName()
    {
        return $this->getData(UserInterface::FIRST_NAME);
    }

    /**
     * @inheritdoc
     */
    public function setLastName($lastName)
    {
        return $this->setData(UserInterface::LAST_NAME, $lastName);
    }

    /**
     * @inheritdoc
     */
    public function getLastName()
    {
        return $this->getData(UserInterface::LAST_NAME);
    }

    /**
     * @inheritdoc
     */
    public function setEmail($email)
    {
        return $this->setData(UserInterface::EMAIL, $email);
    }

    /**
     * @inheritdoc
     */
    public function getEmail()
    {
        return $this->getData(UserInterface::EMAIL);
    }

    /**
     * @inheritdoc
     */
    public function setBirthday($birthday)
    {
        return $this->setData(UserInterface::BIRTHDAY, $birthday);
    }

    /**
     * @inheritdoc
     */
    public function getBirthday()
    {
        return $this->getData(UserInterface::BIRTHDAY);
    }
}
