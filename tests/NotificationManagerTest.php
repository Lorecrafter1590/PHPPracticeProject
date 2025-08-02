<?php

use PHPUnit\Framework\TestCase;
use Application\NotificationManager;
use Domain\Notification\NotificationInterface;

class NotificationManagerTest extends TestCase
{
    /**
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    public function testNotifyCallsSendNotification()
    {
        $notificationMock = $this->createMock(NotificationInterface::class);

        $notificationMock->expects($this->once())
            ->method('sendNotification')
            ->with(
                $this->equalTo('user@example.com'),
                $this->equalTo('Test Notification')
            )
            ->willReturn(true);

        $manager = new NotificationManager();

        $result = $manager->notify($notificationMock, 'user@example.com', 'Test Notification');

        $this->assertTrue($result);
    }
    public function testNotifyHandlesException()
    {
        $notificationMock = $this->createMock(NotificationInterface::class);

        $notificationMock->method('sendNotification')
            ->willThrowException(new \Exception('Simulated failure'));

        $manager = new NotificationManager();

        $result = $manager->notify($notificationMock, 'fail@example.com', 'Should fail');

        $this->assertFalse($result);
    }
}
