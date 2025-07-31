<?php

namespace Domain\Notification;

class EmailNotification implements NotificationInterface
{
    public function sendNotification(
        string $recipient,
        string $message
    ): bool
    {
        echo "Email sent to $recipient: $message\n";
        return true;
    }
}