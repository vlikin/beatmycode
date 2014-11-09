<?php
/**
 * @file -Builder pattern.
 *
 * Separate the consruction of a complex object from its representing
 * so that the same construction process can create different representations.
 * Attantion: It also uses the command pattern.
 */

interface IComputerBuilder {
  public function build(Computer $computer);
}

class LaptopBuilder implements IComputerBuilder {
  private $color = NULL;
  private $os = NULL;

  public function __construct($os, $color) {
    $this->os = $os;
    $this->color = $color;
  }

  public function build(Computer $computer) {
    $computer->name = 'Laptop Computer - ' . $this->os . ' - ' . $this->color;
    $computer->type = 'laptop';
    $computer->display = '800x400';
    $computer->processor = 2000;
    $computer->ram = 2048;
    $computer->hdd = 100;
    $computer->os = $this->os;
  }
}

class Computer {
  public $name = '';
  public $type = '';
  public $display='';
  public $processor= '';
  public $ram = '';
  public $hdd = '';
  public $os = '';
}

$linuxLaptopBuilder = new LaptopBuilder('Ubuntu Linux', 'red');
$windowsLaptopBuilder = new LaptopBuilder('Windows', 'black');

$computer_1 = new Computer();
$computer_2 = new Computer();

$linuxLaptopBuilder->build($computer_1);
$windowsLaptopBuilder->build($computer_2);

print 'This two objects processed by two different builders of same class.' . chr(10);
print $computer_1->name . chr(10);
print $computer_2->name . chr(10);