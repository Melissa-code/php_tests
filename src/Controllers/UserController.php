<?php 

namespace App\Controllers;

class UserController {

  public function getUsers() : array
  {
    return [
      ['name' => 'Alice', 'email' => 'alice@gmail.com'], 
      ['name' => 'Bob', 'email' => 'bob@gmail.com'], 
    ]; 
  }
}