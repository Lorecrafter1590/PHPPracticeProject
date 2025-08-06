<?php

namespace Application;

use Domain\Notification\NotificationInterface;

class NotificationManager
{
    public function notify(
        NotificationInterface $notification,
        string $recipient,
        string $message
    ): bool
    {
        if (empty($recipient) || empty($message)) {
            return false;
        }

        try {
            return $notification->sendNotification(
                recipient: $recipient,
                message: $message
            );
        } catch (\Exception $e) {
            return false;
        }
    }
}