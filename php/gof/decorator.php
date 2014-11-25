<?php
/**
 * @file - Decorator pattern.
 *
 * It attaches additional responsibilities to an object dinamically.
 * It provides a flexible alternative to sub-classing for extending functionality.
 */

abstract class AbstractComponent {
  abstract public function operation();
}

class ConcreteComponent extends AbstractComponent {
  public function operation() {
    return 'ConcreteComponent::operation';
  }
}

abstract class AbstractDecorator extends AbstractComponent {
  protected $_component;

  public function __construct(AbstractComponent $component) {
    $this->_component = $component;
  }
}

class ConcreteDecorator extends AbstractDecorator {
  public function operation() {
    $output = 'ConcreteDecorator::operation - ';

    // Preprocess.
    $output .= $this->_component->operation();

    // Postprocess.
    return $output .= ' - ConcreteDecorator::operation - Extented';
  }
}

$decoratedComponent = new ConcreteDecorator(
  new ConcreteComponent()
);
 
print $decoratedComponent->operation();