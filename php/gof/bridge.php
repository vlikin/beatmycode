<?php
/**
 * @file - Bridge pattern.
 *
 * It decouples an abstraction from its implementation so that two can
 * vary independently.
 */

interface Implementator {
  public function operation($a, $b);
}

class Abstraction {
  private $implementator = NULL;

  private $a = 0;
  private $b = 0;

  public function __construct($a, $b, $implementator) {
    $this->a = $a;
    $this->b = $b;
    $this->implementator = $implementator;
  }

  public function setImplementator($implementator) {
    $this->implementator = $implementator;
  }

  public function setAbstration($a, $b) {
    $this->a = $a;
    $this->b = $b;
  }

  public function operation() {
    return $this->implementator->operation($this->a, $this->b);
  }
}

class SumImplementator implements Implementator {
  public function operation($a, $b) {
    return $a + $b;
  }
}

class SubImplementator implements Implementator {
  public function operation($a, $b) {
    return $a - $b;
  }
}

print 'Abstraction a = 9, b = 7 ' . chr(10);
$abstraction = new Abstraction(9, 7, new SumImplementator());
print 'SumImplementator - ' . $abstraction->operation() . chr(10);
$abstraction->setImplementator(new SubImplementator());
print 'SubImplementator - ' . $abstraction->operation() . chr(10);
