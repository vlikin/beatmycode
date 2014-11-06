<?php
/**
 * @file Command Design Pattern
 *
 * Encapsulate a request as an object,
 * thereby letting you parameterize clients with different requests,
 * queue or log requests, and support undoable operations.
 * Standartize, allow make histories, support undo operations.
 *
 * The good complex example is the next. But it also use another patterns. The mind map is:
 *
 * RemoteController
 * |
 * |------Button--\
 * |              |
 * |              \--Command
 * |                    |
 * \----------------Device
 */

interface ICommand {
  public function execute();
}

class PlusCommand {
  public $a = 0;
  public $b = 0;
  public $c = 0;

  public function __construct($a) {
    $this->a = $a;
  }

  public function execute() {
    $this->c = $this->a + $this->b;
    return $this->c;
  }
}

class MinusCommand {
  public $a = 0;
  public $b = 0;
  public $c = 0;

  public function __construct($a) {
    $this->a = $a;
  }

  public function execute() {
    $this->c = $this->a - $this->b;
    return $this->c;
  }
}

$plusCommand = new PlusCommand(3);
$plusCommand->b = 2;
$result = $plusCommand->execute();
print 'plusResult - ' . $result . chr(10);

$minusCommand = new MinusCommand(3);
$minusCommand->b = 2;
$result = $minusCommand->execute();
print 'minusResult - ' . $result . chr(10);