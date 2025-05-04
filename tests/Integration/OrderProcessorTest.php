<?php 

namespace App\Tests\Integration;

use PHPUnit\Framework\TestCase;
use App\Models\Order; 
use App\Services\OrderProcessor;

class OrderProcessorTest extends TestCase {

  /**
   * Integration: tester comment plusieurs classes travaillent ensemble
   * Tester une commande avec réduction (prix > 100) 
   */
  public function testProcessOrderWithDiscount(): void
  {
    $order = new Order(1, 118.99); 
    $processor = new OrderProcessor();

    $result = $processor->process($order);
    $this->assertEquals("Processed with discount.", $result); 
  }

  /**
   * tester une commande < 100 
   */
  public function testProcessOrderWithoutDiscount(): void
  {
    $order = new Order(1, 18); 
    $processor = new OrderProcessor();

    $result = $processor->process($order);
    $this->assertEquals("Processed.", $result); 
  }
}