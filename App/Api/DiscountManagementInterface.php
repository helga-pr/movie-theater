<?php

namespace App\Api;

/**
 * Interface DiscountManagementInterface
 * @package App\Api
 */
interface DiscountManagementInterface
{
    /**
     * @param User $user
     * @param Event $event
     * @param LocalDateTime $airDateTime
     * @param int $numberOfTickets
     * @return int
     */
    public function getDiscount(User $user, Event $event, LocalDateTime $airDateTime, $numberOfTickets);
}
