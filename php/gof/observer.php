<?php
/**
 * @file - Observer pattern .
 *
 * Define a one-to-many dependeny between objects so that when one
 * object changes state, all its dependents are notified and updated automatically.
 */

interface IObserver {
  public function onUpdate($action, $data);
}

interface ISubject {
  public function attach(IObserver $observer);
  public function deattach(IObserver $observer);
  public function notify($action, $data);
}

class AObserver implements IObserver {
  private $name = '';

  public function __construct($name) {
    $this->name = $name;
  }

  public function onUpdate($action, $data) {
    print '==' . $this->name . '==' . $action . '===========' . chr(10);
    print_r($data);
    print '-------------------------------------------------' . chr(10);
  }
}

class ASubject implements ISubject {

  private $observers = array ();

  public function attach(IObserver $observer) {
    $object_id = spl_object_hash($observer);
    $this->observers[$object_id] = $observer;
  }

  public function deattach(IObserver $observer) {
    $object_id = spl_object_hash($observer);
    unset($this->observers[$object_id]);
  }

  public function notify($action, $data) {
    foreach($this->observers as $observer) {
      $observer->onUpdate($action, $data);
    }
  }

  public function addAction($a, $b) {
    print '> add action ' . chr(10);
    // Some stuff.
    print '> add result = ' . ($a + $b) . chr(10);
    // ...

    $this->notify('add', func_get_args());
  }

  public function subtructAction($a, $b) {
    print '> subtruct action ' . chr(10);
    // Some stuff.
    print '> substract result = ' . ($a - $b) . chr(10);
    // ...

    $this->notify('subtruct', func_get_args());
  }
}

$subject = new ASubject();
$observer_1 = new AObserver('First');
$observer_2 = new AObserver('Second');
$subject->attach($observer_1);
$subject->attach($observer_2);

$subject->addAction(9, 3);

$subject->deattach($observer_1);
$subject->subtructAction(9, 3);