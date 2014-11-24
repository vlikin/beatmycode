<?php
/**
 * @file - Factory method pattern.
 *
 * Type: C
 * It defines an interface for creating families of related ordependent objects
 * without specifying their concrete class.
 */

class Product {
}

class Creator {
  public function factoryMethod() {
    return new Product();
  }
}

$creator = new Creator();
$product_1 = $creator->factoryMethod();
$product_2 = $creator->factoryMethod();

print 'product_1 class name -> ' . get_class($product_1) . chr(10);
print 'product_2 class name -> ' . get_class($product_2) . chr(10);
print 'product_1 === product_2 -> ' . ( $product_1 === $product_2 ? 'TRUE' : 'FALSE') . chr(10);