<?php
/**
 * @file - Interpreter pattern.
 *
 * Given a language, it defines a representation for its
 * grammar along with interpreter that uses the representation
 * to interpretsentences in the language.
 *
 * - The Interpreter pattern can be used to add functionality to the composite pattern.
 */

class Context {
  public $a = NULL;
  public $b = NULL;

  public function __construct($a, $b) {
    $this->a = $a;
    $this->b = $b;
  }

  public function toString() {
    return $this->a . ' - ' . $this->b . chr(10);
  }
}

abstract class AInterpreter {
  protected $context = NULL;

  public function __construct(Context $context) {
    $this->context = $context;
  }

  public function getContext() {
    return $this->context;
  }

  abstract public function interpret();
}

class InterpreterA extends AInterpreter {

  public function interpret() {
    $this->context->a += 3;
    $this->context->b += 3;

    $another_interpreter = new InterpreterB($this->context);
    return $another_interpreter;
  }
}

class InterpreterB extends AInterpreter {

  public function interpret() {
    $this->context->a -= 4;
    $this->context->b += 5;

    $another_interpreter = new InterpreterC($this->context);
    return $another_interpreter;
  }
}

class InterpreterC extends AInterpreter {

  public function interpret() {
    $this->context->a -= 4;
    $this->context->b += 5;

    $another_interpreter = new InterpreterC($this->context);
    return $another_interpreter;
  }
}

$context = new Context(6, 7);
$first_interpreter = new InterpreterA($context);

// Language style.
print $first_interpreter
  ->interpret()
  ->interpret()
  ->interpret()
  ->interpret()
  ->interpret()
  ->getContext()
  ->toString();
