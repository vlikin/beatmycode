<?php
/**
 * @file - State pattern.
 * 
 * - Allow an object to alter its behavior when internal state changes.The object appear to change its class.
 * It is similar to the strategy pattern but the logic is not defined by a client, the logic is changed 
 * according to the context state.
 */

interface IHandle {
  public function handle($a); 
}

class BasketHandler implements IHandle {
  public function handle($a) {
    print $a . 'kg - It uses baskets(' . floor($a / 10) . ')' . chr(10);
  }
}

class LoryHandler implements IHandle {
  public function handle($a) {
    print $a . 'kg - It uses lories(' . floor($a / 1000) . ')' .chr(10);
  }
}

class Context {
  private $a; // States depend on.
  private $state; // A state processes $a .

  /**
   * It sests a value,it defines a way to process a value.
   */
  public function request($a) {
    $this->a = $a;
    if ($a > 1000) {
      $this->state = new LoryHandler();
    }
    else {
      $this->state = new BasketHandler();
    }
  }

  /**
   * It processes the value.
   */
  public function handle() {
    return $this->state->handle($this->a);
  }
}

/**
 * A single context uses different states according to the context state.
 */
$context = new Context();

// It will use the BasketHandler .
$context->request(900);
$context->handle();

// It will use the LoryHandler .
$context->request(3000);
$context->handle();
