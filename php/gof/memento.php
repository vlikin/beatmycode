<?php
/**
 * @file - Memento pattern.
 *
 * Without violating encapsulation, capture and externalize
 * an object's internal state so that the object can be restored to
 * this state later.
 */


class Memento {
  public $state_a = NULL;
  public $state_b = NULL;
}

class Originator {
  public $a = NULL;
  public $b = NULL;
  private $memento;

  public function __construct($a, $b) {
    $this->setData($a, $b);
    $this->memento = $this->createMemento();
  }

  public function setData($a, $b) {
    $this->a = $a;
    $this->b = $b;
  }

  public function setMemento(Memento $memento) {
    $this->memento = $memento;
    $this->recoverMemento();
  }

  public function recoverMemento() {
    $this->a = $this->memento->state_a;
    $this->b = $this->memento->state_b;
  }

  public function createMemento() {
    // It updates the current state.
    $this->memento->state_a = $this->a;
    $this->memento->state_b = $this->b;

    // It creates a state to push from the object.
    $memento = new Memento();
    $memento->state_a = $this->a;
    $memento->state_b = $this->b;

    return $memento;
  }

  public function __toString() {
    return $this->a . ' - ' . $this->b;
  }
}

$originator = new Originator(4, 5);
print 'State 1 -> ' . $originator . chr(10);
$state_1 = $originator->createMemento();
$originator->setData(1, 9);
print 'State 2 -> ' . $originator . chr(10);
$state_2 = $originator->createMemento();
$originator->setData(3, 2);
print 'Current Object -> ' . $originator . chr(10);
$originator->recoverMemento();
print 'State recovered -> ' . $originator . chr(10);
$originator->setMemento($state_1);
print 'State 1 recovered -> ' . $originator . chr(10);