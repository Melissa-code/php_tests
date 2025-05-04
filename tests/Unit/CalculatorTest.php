<?php

use PHPUnit\Framework\TestCase; 

require_once __DIR__ . '/../../src/Calculator.php';

class CalculatorTest extends TestCase {

  private Calculator $calculator;

  /**
   * PHPUnit fournit une méthode spéciale appelée setUp()
   * exécutée automatiquement avant chaque test (objets réutilisables)
   */
  protected function setUp(): void
  {
      $this->calculator = new Calculator();
  }

  /**
   * tester add(2, 3) retourne 5
   */
  public function testAdd() :void
  {
    $a=3;
    $b=5;

    $result = $this->calculator->add($a, $b);
    $this->assertEquals(8, $result); 
  }

  /**
   * tester divide(6, 2) retourne 3
   */
  public function testDivide(): void
  {
    $a=6;
    $b=2;

    $result = $this->calculator->divide($a, $b); 
    $this->assertEquals(3, $result); 
  }

  /**
   * tester divide(5, 0): lever une exception 
   */
  public function testFailedDivideByZero(): void
  {
    //classe native de PHP: dans le namespace global de PHP 
    $this->expectException(\InvalidArgumentException::class); 
    $this->expectExceptionMessage("Division par 0 impossible.");

    $this->calculator->divide(5, 0); 
  }
}