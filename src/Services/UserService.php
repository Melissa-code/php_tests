<?php

namespace App\Services;

use App\Models\User;

class UserService {

  public function __construct(private User $user) {}

  public function getUserDetails(): array
  {
    return [
      'name' => $this->user->getName(),
      'email' => $this->user->getEmail(),
    ]; 
  }

}