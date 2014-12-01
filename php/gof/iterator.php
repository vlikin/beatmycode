<?php
/**
 * @file - Iterator pattern.
 *
 * It provides a way to access the elements of an aggregate 
 * obect sequentially without exposing its underlying representation.
 */

class MyArrayIterator implements Iterator {
  protected $array = array();

  public function __construct(array $array) {
    $this->array = $array;
  }

  public function current() {
    return current($this->array);
  }

  public function next() {
    next($this->array);
  }

  public function key() {
    return key($this->array);
  }

  public function valid() {
    return isset($this->array[$this->key()]);
  }

  public function rewind() {
    reset($this->array);
  }
}

class MyIteratorAggregate implements IteratorAggregate {
  public function getIterator() {
    return new ArrayIterator([1, 2, 3, 4]);
  }
}

// Example.
$iterator = new MyArrayIterator([1, 2, 3, 5]);

// Output.
var_dump(iterator_to_array($iterator));
foreach ($iterator as $value) {
  var_dump($value);
}

// Aggregate.
$iteratorAggregate = new MyIteratorAggregate();
foreach($iteratorAggregate as $value) {
  var_dump($value);
}
