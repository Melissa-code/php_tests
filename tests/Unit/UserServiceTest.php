<?php
namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;
use App\Services\UserService;

class UserServiceTest extends TestCase {

  /**
   * tester si les valeurs retournées sont correctes
   */
  public function testGetUserDetails(): void
  {
    // Mock User: $user = new User("Emilie", "e@gmail.com"); 
    $userMock = $this->createMock(User::class);
    //méthode mockée doit être appelée une seule fois pendant l'exécution du test
    $userMock->expects($this->once())
      ->method('getName')
      ->willReturn("Emilie");

    $userMock->expects($this->once())
    ->method('getEmail')
    ->willReturn("e@gmail.com");

    // https://docs.phpunit.de/en/10.5/assertions.html#iterable
    $userService = new UserService($userMock);
    $details = $userService->getUserDetails(); 
    $this->assertContains("Emilie", $details);  
    $this->assertContains("e@gmail.com", $details); 
  }
}