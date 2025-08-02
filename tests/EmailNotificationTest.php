<?php

use PHPUnit\Framework\TestCase;
use Domain\Notification\EmailNotification;

class EmailNotificationTest extends TestCase
{
    public function testSendNotificationReturnsTrueAndOutputsMessage()
    {
        $notification = new EmailNotification();

        // Start output buffering to capture `echo`
        ob_start();
        $result = $notification->sendNotification('user@example.com', 'Test Email');
        $output = ob_get_clean();

        $this->assertTrue($result);
        $this->assertStringContainsString('Email sent to user@example.com: Test Email', $output);
    }
}