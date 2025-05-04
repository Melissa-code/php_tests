<?php

namespace App\Models;

class Order {

  public function __construct(private int $id, private float $amount) {}

  public function getId(): int
  {
    return $this->id; 
  }

  public function getAmount(): float
  {
    return $this->amount; 
  }
}