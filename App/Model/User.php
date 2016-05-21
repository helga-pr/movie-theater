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
 * Class User
 * @package App\Model
 */
class User extends AbstractModel implements Data\UserInterface
{
    /**
     * @inheritdoc
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setData(Data\UserInterface::ID, $id);
    }

    /**
     * @inheritdoc
     * @return int
     */
    public function getId()
    {
        return $this->getData(Data\UserInterface::ID);
    }

    /**
     * @inheritdoc
     * @param string $firstname
     * @return mixed
     */
    public function setFirstName($firstName)
    {
        return $this->setData(Data\UserInterface::FIRST_NAME, $firstName);
    }

    /**
     * @inheritdoc
     * @return string
     */
    public function getFirstName()
    {
        return $this->getData(Data\UserInterface::FIRST_NAME);
    }

    /**
     * @inheritdoc
     */
    public function setLastName($lastName)
    {
        return $this->setData(Data\UserInterface::LAST_NAME, $lastName);
    }

    /**
     * @inheritdoc
     */
    public function getLastName()
    {
        return $this->getData(Data\UserInterface::LAST_NAME);
    }

    /**
     * @inheritdoc
     */
    public function setEmail($email)
    {
        return $this->setData(Data\UserInterface::EMAIL, $email);
    }

    /**
     * @inheritdoc
     */
    public function getEmail()
    {
        return $this->getData(Data\UserInterface::EMAIL);
    }

    /**
     * @inheritdoc
     */
    public function setBirthday($birthday)
    {
        return $this->setData(Data\UserInterface::BIRTHDAY, $birthday);
    }

    /**
     * @inheritdoc
     */
    public function getBirthday()
    {
        return $this->getData(Data\UserInterface::BIRTHDAY);
    }
}
