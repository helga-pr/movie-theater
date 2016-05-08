<?php

namespace App\Model;

use App\Api\Data\UserInterface;
use App\Api\UserRepositoryInterface;
use App\Core\Model;

class UserRepository extends Model implements UserRepositoryInterface
{
    /**
     * @var string
     */
    private $tableName = 'user';

    /**
     * @inheritdoc
     */
    public function save(User $user)
    {
        $dbQuery = $this->db->prepare(
            "INSERT INTO `" . $this->tableName . "` (`first_name`, `last_name`, `email`, `birthday`) 
                VALUES (?, ?, ?, ?)"
        );
        return $dbQuery->execute(
            [
                $user->getFirstName(),
                $user->getLastName(),
                $user->getEmail(),
                $user->getBirthday(),
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function remove($id)
    {
        $dbQuery = $this->db->prepare('DELETE FROM ' . $this->tableName . ' WHERE `id` = ? LIMIT 1');
        return $dbQuery->execute([$id]);
    }

    /**
     * @inheritdoc
     */
    public function getById($id)
    {
        $dbQuery = $this->db->prepare('SELECT * FROM ' . $this->tableName . ' WHERE `id` = ? LIMIT 1');
        $dbQuery->execute([$id]);
        $result = $dbQuery->fetchObject();
        $user = new User();
        $user->setId($result->{UserInterface::ID});
        $user->setFirstName($result->{UserInterface::FIRST_NAME});
        $user->setLastName($result->{UserInterface::LAST_NAME});
        $user->setEmail($result->{UserInterface::EMAIL});
        $user->setBirthday($result->{UserInterface::BIRTHDAY});

        return $user;
    }

    /**
     * @inheritdoc
     */
    public function getAll()
    {
        $dbQuery = $this->db->prepare('SELECT * FROM `' . $this->tableName. '` LIMIT 1');
        $dbQuery->execute();
        $result = $dbQuery->fetchAll(\PDO::FETCH_OBJ);
        $users = [];
        foreach ($result as $item) {
            $user = new User();
            $user->setId($item->{UserInterface::ID});
            $user->setFirstName($item->{UserInterface::FIRST_NAME});
            $user->setLastName($item->{UserInterface::LAST_NAME});
            $user->setEmail($item->{UserInterface::EMAIL});
            $user->setBirthday($item->{UserInterface::BIRTHDAY});
            array_push($users, $user);
        }

        return $users;
    }

    /**
     * @inheritdoc
     */
    public function getByEmail($email)
    {
        $dbQuery = $this->db->prepare('SELECT * FROM ' . $this->tableName . ' WHERE `email` = ?');
        $dbQuery->execute([$email]);
        $result = $dbQuery->fetchObject();
        $user = new User();
        $user->setId($result->{UserInterface::ID});
        $user->setFirstName($result->{UserInterface::FIRST_NAME});
        $user->setLastName($result->{UserInterface::LAST_NAME});
        $user->setEmail($result->{UserInterface::EMAIL});
        $user->setBirthday($result->{UserInterface::BIRTHDAY});

        return $user;
    }
}
