<?php
/**
 * @file template method pattern.
 *
 * Define the skeleton of an algorithm in an operartion, deffering some steps to subclusses.
 * Lets subclasses redefine ceratin steps of an algorithm without changing the algorithms structure.
 *
 * Attention: The example is similar with the command pattern and the builder pattern.
 */

abstract class HomeBuilderTemplate {

  abstract public function setBase();
  abstract public function setWalls();
  abstract public function setRoof();
  abstract public function setWindows();

  public function build() {
    $building = '';
    $building .= $this->setBase();
    $building .= $this->setWalls();
    $building .= $this->setRoof();
    $building .= $this->setWindows();

    return $building;
  }
}

class MultiStorageTemplate {
  private $storages = NULL;

  public function __construct($storages) {
    $this->storages = $storages;
  }

  public function setBase() {
    return 'Deep base.' . chr(10);
  }
  public function setWalls() {
    return 'Brick walls with ' . $this->storages . ' storages.' . chr(10);
  }
  public function setRoof() {
    return 'Flat roof.' . chr(10);
  }

  public function setWindows() {
    return 'A lot of small plastic windows.' . chr(10);
  }

  public function build() {
    $building = '';
    $building .= $this->setBase();
    $building .= $this->setWalls();
    $building .= $this->setRoof();
    $building .= $this->setWindows();

    return $building;
  }
}

$fiveStorageTemplate = new MultiStorageTemplate(5);
print $fiveStorageTemplate->build();