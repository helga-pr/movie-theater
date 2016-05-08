<?php

namespace App\Api;

interface BookingManagementInterface
{
    public function getTicketsPrice(Event $event, LocalDateTime $dateTime, User $user, $seats);

    public function bookTickets($tickets);

    public function getPurchasedTicketsForEvent(Event $event, LocalDateTime $dateTime);
}
