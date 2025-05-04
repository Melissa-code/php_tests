<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User; 
use App\Models\Notification; 
use App\Services\EmailService;

class NotificationTest extends TestCase {

  /**
   * mock EmailService pour vérifier méthode send() 
   */
  public function testNotifyUser() : void
  {
    $user = new User('Luc', 'luc@gmail.com'); 

    $emailServiceMock = $this->createMock(EmailService::class);
    //méthode mockée appelée une seule fois pendant l'exécution du test
    $emailServiceMock->expects($this->once())
      ->method('send')
      ->with('luc@gmail.com', 'Hello Luc!') 
      ->willReturn(true);

    $notification = new Notification($emailServiceMock);
    $result = $notification->notifyUser($user->getEmail(), 'Hello Luc!');
    $this->assertTrue($result); 
  }
}