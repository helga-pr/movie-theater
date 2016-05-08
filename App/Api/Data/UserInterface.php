<?php

namespace App\Api\Data;

interface UserInterface
{
    /**#@+
     * Constants
     */
    const ID = 'id';
    const FIRST_NAME = 'first_name';
    const LAST_NAME = 'last_name';
    const EMAIL = 'email';
    const BIRTHDAY = 'birthday';
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
    public function setFirstName($firstName);

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName);

    /**
     * @return string
     */
    public function getLastName();

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
