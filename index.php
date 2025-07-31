<?php

require __DIR__ . '/vendor/autoload.php';

use Application\NotificationManager;
use Domain\Notification\EmailNotification;

$notifier = new NotificationManager();
$email = new EmailNotification();
$recipient = 'testUser@test.com';
$message = 'Lorem ipsum dolor sit amet consectetur adipiscing elit quisque faucibus.';

$notifier->notify($email, $recipient, $message);