<?php
/**
 * @file Simulating Multiple Inheritance With PHP Traits.
 * 
 * @link - http://www.phpro.org/tutorials/Simulating-Multiple-Inheritance-With-PHP-Traits.html . 
 */

trait class_1 {

  public function init() {
    print 'Init class_1' . chr(10);
  }

  public function hello( $name ) {
    return 'Hello ' . $name . chr(10);
  }
}

trait class_2 {

  public function init() {
    print 'Init class_2' . chr(10);
  }

  public function hello( $name ){
    return 'Gday ' . $name . chr(10);
  }
}

class my_class {
  
  use class_1, class_2 {
    class_2::init as init_2;
    class_1::hello insteadof class_2;
    class_1::init insteadof class_2;
  }


  function __construct() {
    print 'Init my_class' . chr(10);
    $this->init();
    $this->init_2();
  }

  public function greeting( $name ) {
    return $this->hello( $name );
  }
}

$obj = new my_class;
echo $obj->greeting( "Kev" );