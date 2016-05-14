<?php

namespace App\Model;

use App\Api\BookingManagementInterface;
use App\Api\Event;
use App\Api\LocalDateTime;
use App\Api\TicketRepositoryInterface;
use App\Api\User;
use App\Core\Model;
use App\Api\Data\TicketInterface;

class TicketRepository extends Model implements BookingManagementInterface
{
    private $tableName = 'ticket';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @inheritdoc
     */
    public function save(Ticket $ticket)
    {
        $dbQuery = $this->db->prepare(
            "INSERT INTO `" . $this->tableName . "` (`user_id`, `event_id`, `datetime`, `seat`) 
                VALUES (?, ?, ?, ?)"
        );
        return $dbQuery->execute(
            [
                $ticket->getUser_id(),
                $ticket->getEvent_id(),
                $ticket->getDatetime(),
                $ticket->getSeat(),
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
     * @return Ticket[]
     */
    public function getAll()
    {
        $dbQuery = $this->db->prepare('SELECT * FROM `' . $this->tableName . '`');
        $dbQuery->execute();
        $result = $dbQuery->fetchAll(\PDO::FETCH_OBJ);
        $tickets = [];
        foreach ($result as $item) {
            $ticket = new Ticket();
            $ticket->setId($item->{TcketInterface::ID});
            $ticket->setUser_id($item->{TicketInterface::USER_ID});
            $ticket->setEvent_id($item->{TicketInterface::EVENT_ID});
            $ticket->setDatetime($item->{TicketInterface::DATETIME});
            $ticket->setSeat($item->{TicketInterface::SEAT});

            array_push($tickets, $ticket);
        }

        return $tickets;
    }

    public function getByEvent($event_name)
    {
        $event = new Event();
        $eventRepository = new EventRepository();
        $event = $eventRepository::getByName($event_name);
        $event_id = $event->getId();
        $dbQuery = $this->db->prepare('SELECT * FROM `' . $this->tableName . '` WHERE `event_id` = ?');
        $dbQuery->execute([$event_id]);
        $result = $dbQuery->fetchAll(\PDO::FETCH_OBJ);
        $tickets = [];
        foreach ($result as $item) {
            $ticket = new Ticket();
            $ticket->setId($item->{TcketInterface::ID});
            $ticket->setUser_id($item->{TicketInterface::USER_ID});
            $ticket->setEvent_id($item->{TicketInterface::EVENT_ID});
            $ticket->setDatetime($item->{TicketInterface::DATETIME});
            $ticket->setSeat($item->{TicketInterface::SEAT});

            array_push($tickets, $ticket);
        }
        return $tickets;
    }

    public function getByUser_id($user_id)
    {

        $dbQuery = $this->db->prepare('SELECT * FROM `' . $this->tableName . '` WHERE `user_id` = ?');
        $dbQuery->execute([$user_id]);
        $result = $dbQuery->fetchAll(\PDO::FETCH_OBJ);
        $tickets = [];
        foreach ($result as $item) {
            $ticket = new Ticket();
            $ticket->setId($item->{TcketInterface::ID});
            $ticket->setUser_id($item->{TicketInterface::USER_ID});
            $ticket->setEvent_id($item->{TicketInterface::EVENT_ID});
            $ticket->setDatetime($item->{TicketInterface::DATETIME});
            $ticket->setSeat($item->{TicketInterface::SEAT});

            array_push($tickets, $ticket);
        }
        return $tickets;
    }


    public function getTicketsPrice(Event $event, LocalDateTime $dateTime, User $user, $seats)
    {
        // TODO: Implement getTicketsPrice() method.
    }

    public function bookTickets($tickets)
    {
        // TODO: Implement bookTickets() method.
    }

    public function getPurchasedTicketsForEvent(Event $event, LocalDateTime $dateTime)
    {
        // TODO: Implement getPurchasedTicketsForEvent() method.
    }
}
