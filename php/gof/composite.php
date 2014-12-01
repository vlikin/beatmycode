<?php
/**
 * @file - Composite pattern.
 *
 * It composes objects into tree structures to represent part-whole hierarchies.
 * Lets clients treat individual objects and compositions of objects uniformly.
 */


abstract class Component {
  protected $name;

  public function __construct($name) {
    $this->name = $name;
  }

  public abstract function add(Component $c);
  public abstract function remove(Component $c);
  public abstract function display();
}

class Composite extends Component {
  private $children = array();

  public function add(Component $component) {
    $this->children[$component->name] = $component;
  }

  public function remove(Component $component) {
    unset($this->children[$component->name]);
  }

  public function display() {
    foreach($this->children as $child) {
      $child->display();
    }
  }
}

class Leaf extends Component {
  public function add(Component $c) {
    print 'Cannot add to a leaf' . chr(10);
  }

  public function remove(Component $c) {
    print 'Cannot remove from a leaf' . chr(10);
  }

  public function display() {
    print $this->name . chr(10);
  }
}

// It creates a tree structure.
$root = new Composite('root');
$root->add(new Leaf('Leaf A'));
$root->add(new Leaf('Leaf B'));

$comp = new Composite('Composite X');

$comp->add(new Leaf('Leaf XA'));
$comp->add(new Leaf('Leaf XB'));
$root->add($comp);
$root->add(new Leaf('Leaf C'));

// It adds and removes a leaf.
$leaf = new Leaf('Leaf D');
$root->add($leaf);
$root->remove($leaf);

// Recursively displays the tree.
$root->display();
