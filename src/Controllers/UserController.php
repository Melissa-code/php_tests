<?php 

namespace App\Controllers;

class UserController {

  public function getUsers() 
  {
    return [
      ['name' => 'Alice', 'email' => 'alice@gmail.com'], 
      ['name' => 'Bob', 'email' => 'bob@gmail.com'], 
    ]; 
  }
}