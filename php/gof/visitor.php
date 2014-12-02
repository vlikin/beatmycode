<?php
/**
 * @file - Visitor pattern.
 *
 * It represents an operation to be performed on the elements of
 * an object structure. Lets you define a new operation without 
 * changing the classes of the elements on wich it operates.
 */

interface IVisitor {
  public function visit(IElement $element);
}

interface IElement {
  public function accept(IVisitor $visitor);
}

class Element implements IElement {
  public $a = NULL;
  public $b = NULL;

  public function __construct($a, $b) {
    $this->a = $a;
    $this->b = $b;
  }

  public function accept(IVisitor $visitor) {
    $visitor->visit($this);
  }

  public function __toString() {
    return $this->a . ' - ' . $this->b;
  }
}

class VisitorP implements IVisitor {
  public $p = NULL;

  public function __construct($p) {
    $this->p = $p;
  }

  public function visit(IElement $element) {
    $element->a += $this->p;
    $element->b += $this->p;
  }
}

class VisitorM2 implements IVisitor {
  public function visit(IElement $element) {
    $element->a -= 2;
    $element->b -= 2;
  }
}

$visitor_p_3 = new VisitorP(3);
$visitor_p_5 = new VisitorP(5);
$visitor_m2 = new VisitorM2();
$element = new Element(4, 5);
print $element . chr(10);
$element->accept($visitor_p_3);
print $element . chr(10);
$element->accept($visitor_p_5);
print $element . chr(10);
$element->accept($visitor_m2);
print $element . chr(10);