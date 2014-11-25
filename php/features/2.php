<?php
/**
 * @file - Magic Methods.
 *
 * @link - http://www.lornajane.net/posts/2012/9-magic-methods-in-php .
 * @link - http://php.net/manual/en/language.oop5.magic.php .
 */

class Animal {
}

class Penguin extends Animal {

  public function __construct($id) {
    $this->getPenguinFromDb($id);
  }

  public function getPenguinFromDb($id) {
    $this->username = 'penguin_' . $id;
  }

  public function __get($field) {
    if($field == 'name') {
      return $this->username;
    }
  }

  public function __set($field, $value) {
    if($field == 'name') {
      $this->username = $value;
    }
  }

  public function __call($method, $args) {
      echo "unknown method " . $method;
      return false;
  }
}