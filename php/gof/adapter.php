<?php
/**
 * @file - Adapter pattern.
 *
 * It converts the interface of a class into another interface that client
 * expects. Lets classes work together that could not otherwise because of
 * incompatible interfaces.
 */

interface IInterfaceA {
  public function getATitle();
}

interface IInterfaceB {
  public function getBTitle();
}

interface IAdapter {
  public function getTitle();
}

class A implements IInterfaceA {
  private $a_title;

  public function __construct($title) {
    $this->a_title = $title;
  }

  public function getATitle() {
    return $this->a_title;
  }
}

class B implements IInterfaceB {
  private $b_title;

  public function __construct($title) {
    $this->b_title = $title;
  }

  public function getBTitle() {
    return $this->b_title;
  }
}

class AdapterA implements IAdapter {
  private $object = NULL;

  public function __construct($object) {
    $this->object = $object;
  }

  public function getTitle() {
    return $this->object->getATitle();
  }
}

class AdapterB implements IAdapter {
  private $object = NULL;

  public function __construct($object) {
    $this->object = $object;
  }

  public function getTitle() {
    return $this->object->getBTitle();
  }
}

$list = array (
  'q' => new AdapterA(new A('Some A')),
  'w' => new AdapterB(new B('Some B')),
  'e' => new AdapterA(new A('Another A')),
);

foreach ($list as $key => $adapter) {
  print $adapter->getTitle() . chr(10);
}