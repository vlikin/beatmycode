<?php
/**
 * @file Chain of Responsibility pattern.
 *
 * Type: B
 * avoid coupling the sender of arequest to its receiver by giving
 * more than one object a chance to handle the request. Chain the
 * receiving objects and pass the request along the chain until
 * an object handles it.
 */

interface IHandler {
  public function setNextHandler(IHandler $handler);
  public function handleRequest($request);
}

class CapitalizeHandler implements IHandler {
  private $nextHandler = NULL;

  public function setNextHandler(IHandler $handler) {
    $this->nextHandler = $handler;
  }

  public function handleRequest($request) {
    // It handles a request.
    $request = strtoupper($request);

    // It passes futher.
    if ($this->nextHandler) {
      return $this->nextHandler->handleRequest($request);
    }
    return $request;
  }
}

class LowerHandler implements IHandler {
  private $nextHandler = NULL;

  public function setNextHandler(IHandler $handler) {
    $this->nextHandler = $handler;
  }

  public function handleRequest($request) {
    // It handles a request.
    $request = $request . chr(10) . strtolower($request);

    // It passes futher.
    if ($this->nextHandler) {
      return $this->nextHandler->handleRequest($request);
    }
    return $request;
  }
}

class RmAHandler implements IHandler {
  private $nextHandler = NULL;

  public function setNextHandler(IHandler $handler) {
    $this->nextHandler = $handler;
  }

  public function handleRequest($request) {
    // It handles a request.
    $request = str_replace('a', '*', $request);

    // It passes futher.
    if ($this->nextHandler) {
      return $this->nextHandler->handleRequest($request);
    }
    return $request;
  }
}

// Chain items.
$capitalizeHandler = new CapitalizeHandler();
$lowerHandler = new LowerHandler();
$rmAHandler = new RmAHandler();

// The chain is assembled.
$capitalizeHandler->setNextHandler($lowerHandler);
$lowerHandler->setNextHandler($rmAHandler);

// Move data through the chain.
$message = 'This is a test message to check chain of responsibility pattern.';
print $capitalizeHandler->handleRequest($message);

