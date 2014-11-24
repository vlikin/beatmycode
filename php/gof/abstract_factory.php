<?php
/**
 * @file - Abstract factory.
 *
 * Type: C
 * It provides an interface for creating families of related or dependent objects
 * without specifying their concrete class.
 *
 * It incapsulates and hides a logic of an object creation process, It add pre/post proccess featuers.
 * - Use when you have many objects that can be added, or changed dynamically during runtime.
 * - The bad - Things can get complicated.
 */

interface IAbstractFactory {
  public function createProductA();
  public function createProductB();
  public function createProduct($product=NULL);
}

interface IProduct {
}

class AProduct implements IProduct {
}

class BProduct implements IProduct {
}

class AbstractFactory implements IAbstractFactory {

  public function createProductA() {
    return new AProduct();
  }

  public function createProductB() {
    return new BProduct();
  }

  public function createProduct($product=NULL) {
    if ($product == 'A') {
      return new AProduct();
    }
    elseif ($product == 'B') {
      return new BProduct();
    }
    else {
      return new AProduct();
    }
  }
}

// It creates a factory.
$abstractFactory = new AbstractFactory();

// It uses a factory. It creates objects.
$product = $abstractFactory->createProductA();
print get_class($product) . chr(10);
$product = $abstractFactory->createProductB();
print get_class($product) . chr(10);
$product = $abstractFactory->createProduct('A');
print get_class($product) . chr(10);
$product = $abstractFactory->createProduct('B');
print get_class($product) . chr(10);
$product = $abstractFactory->createProduct();
print get_class($product) . chr(10);
