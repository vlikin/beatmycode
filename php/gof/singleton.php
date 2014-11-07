<?php
/**
 * @file Singlenton pattern.
 *
 * - It prevents multiple initialization. It allows to use the same object any where.
 */

class Singleton {
  public $field_1 = '';

  private static $instance = NULL;

  public function __construct() {
  }

  public function getInstance() {
    if (!self::$instance) {
      self::$instance = new Singleton();
    }

    return self::$instance;
  }
}

$s1 = Singleton::getInstance();
$s1->field_1 = 's1';
$s2 = Singleton::getInstance();
$s2->field_1 = 's1';

print '-----------------------' . chr(10);
print 's1->field_1 = ' . $s1->field_1 . chr(10);
print 's2->field_1 = ' . $s2->field_1 . ' <- The same as s1' . chr(10);
