<?php

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

$penguin = new 