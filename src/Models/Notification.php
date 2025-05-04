<?php

namespace App\Models;

use App\Services\EmailService;

class Notification {

  public function __construct(private EmailService $emailService) {}

  /**
   * Notification envoi email (bool)
   */
  public function notifyUser(string $userEmail, string $message) : bool
  {

    return $this->emailService->send($userEmail, $message); 
  }
}