<?php

namespace App\Services;

use App\Models\Order;

class OrderProcessor {

  public function process(Order $order)
  {
    if ($order->getAmount() > 100) {
      return "Processed with discount."; 
    }

    return "Processed."; 
  }
}