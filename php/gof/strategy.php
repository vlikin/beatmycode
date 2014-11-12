<?php
/**
 * @file - Strategy pattern.
 * 
 * - Defines a family of algorithms - Interface of a class.
 * - Encapsulates each algorithm, and makes the algorithms interchangeable within that family.
 */

interface IStrategy {
  public function execute($a, $b); 
}
 
/** Implements the algorithm using the strategy interface */
class Add implements IStrategy {
  public function execute($a, $b) {
    return $a + $b;  // Do an addition with a and b
  }
}
 
class Subtract implements IStrategy {
  public function execute($a, $b) {
    return $a - $b;  // Do a subtraction with a and b
  }
}

// Configured with a ConcreteStrategy object and maintains
// a reference to a Strategy object 
class Context {
  private $strategy;

  public function Context(IStrategy $strategy) {
    $this->strategy = $strategy;
  }

  public function executeStrategy($a, $b) {
    return $this->strategy->execute($a, $b);
  }
}

// Three contexts following different strategies
$context = new Context(new Add());
$resultA = $context->executeStrategy(3, 4);
print 'Result A :' . $resultA . chr(10);

$context = new Context(new Subtract());
$resultB = $context->executeStrategy(3, 4);
print 'Result B :' . $resultB . chr(10);