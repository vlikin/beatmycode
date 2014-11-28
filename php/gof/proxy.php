<?php
/**
 * @file - Proxy pattern.
 *
 * Type: S
 * It provides a surrogate or placeholder for another object to
 * control access to it.
 */

interface ISubject {
  public function __construct($name);
  public function request();
}

class Subject implements ISubject {
  private $name = NULL;

  public function __construct($name) {
    $this->name = $name;
  }

  public function request() {
    print 'The request(' . $this->name . ') has been invoked.' . chr(10);
  }
}

class SubjectProxy implements ISubject {
  private $object = NULL;

  public function __construct($name) {
    $this->object = new Subject($name);
  }

  public function request() {
    $result = $this->object->request();
    $result = strtoupper($result);
    return $result;
  }
}

$subject = new SubjectProxy('Checker');
print $subject->request();
