<?php

namespace App\Api;

use App\Model\Ticket;

/**
 * Interface BookingManagementInterface
 * @package App\Api
 */
interface BookingManagementInterface
{
    /**
     * @param Event $event
     * @param LocalDateTime $dateTime
     * @param User $user
     * @param string $seats
     * @return double
     */
    public function getTicketsPrice(Event $event, LocalDateTime $dateTime, User $user, $seats);

    /**
     * заказ билетов
     * @param Ticket[] $tickets
     * @return mixed
     */
    public function bookTickets($tickets);

    /**
     * @param Event $event
     * @param LocalDateTime $dateTime
     * @return array Ticket[]
     */
    public function getPurchasedTicketsForEvent(Event $event, LocalDateTime $dateTime);
}
