<?php

 class Calculator {

  /**
   * Addition (pour test unitaire simple)
   */
  public function add($a, $b): float
  {
    return $a + $b; 
  }

  /**
   * Division (pour test unitaire avec condition)
   */
  public function divide($a, $b): float
  {
    if ($b === 0) {
      throw new \InvalidArgumentException("Division par 0 impossible.");
    }

    return $a/$b; 
  }

}