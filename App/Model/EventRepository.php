<?php

namespace App\Model;

use App\Api\Data\EventInterface;
use App\Api\EventRepositoryInterface;
use App\Core\Model;

class EventRepository extends Model implements EventRepositoryInterface
{
    /**
     * @var string
     */
    private $tableName = 'event';

    /**
     * @inheritdoc
     */
    public function save(Event $event)
    {
        $dbQuery = $this->db->prepare(
            "INSERT INTO `" . $this->tableName . "` (`name`, `base_price`, `rating`) 
                VALUES (?, ?, ?)"
        );
        return $dbQuery->execute(
            [
                $event->getName(),
                $event->getBasePrice(),
                $event->getRating(),

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
        $event = new Event();
        $event->setId($result->{EventInterface::ID});
        $event->setName($result->{EventInterface::NAME});
        $event->setBasePrice($result->{EventInterface::BASE_PRICE});
        $event->setRating($result->{EventInterface::RATING});

        return $event;
    }

    /**
     * @inheritdoc
     */
    public function getAll()
    {
        $dbQuery = $this->db->prepare('SELECT * FROM `' . $this->tableName. '`');
        $dbQuery->execute();
        $result = $dbQuery->fetchAll(\PDO::FETCH_OBJ);
        $events = [];
        foreach ($result as $item) {
            $event = new Event();
            $event->setId($item->{EventInterface::ID});
            $event->setName($item->{EventInterface::NAME});
            $event->setBasePrice($item->{EventInterface::BASE_PRICE});
            $event->setRating($item->{EventInterface::RATING});
            array_push($events, $event);
        }

        return $events;
    }


    public function getByName($name)
    {
        $dbQuery = $this->db->prepare('SELECT * FROM ' . $this->tableName . ' WHERE `name` = ? LIMIT 1');
        $dbQuery->execute([$name]);
        $result = $dbQuery->fetchObject();
        $event = new Event();
        $event->setId($result->{EventInterface::ID});
        $event->setName($result->{EventInterface::NAME});
        $event->setBasePrice($result->{EventInterface::BASE_PRICE});
        $event->setRating($result->{EventInterface::RATING});

        return $event;
    }
}
