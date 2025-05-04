<?php 

namespace App\Tests\EndToEnd;

use PHPUnit\Framework\TestCase;
use App\Controllers\UserController;

class UserControllerTest extends TestCase {

  /**
   * vérifier que l'API retourne la liste des utilisateurs
   */
  public function testGetUsers(): void
  {
    $controller = new UserController(); 
    $users = $controller->getUsers();

    $this->assertCount(2, $users);
    $this->assertEquals('Alice', $users[0]['name']); 
    $this->assertEquals('bob@gmail.com', $users[1]['email']); 
  }
}