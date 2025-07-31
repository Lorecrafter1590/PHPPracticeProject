<?php

namespace Domain\Notification;

interface NotificationInterface
{
    public function sendNotification(
        string $recipient,
        string $message
    ): bool;
}