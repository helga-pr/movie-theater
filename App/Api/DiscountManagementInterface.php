<?php

namespace App\Api;

interface DiscountManagementInterface
{
    public function getDiscount(User $user, Event $event, LocalDateTime $airDateTime, $numberOfTickets);
}
