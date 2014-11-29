<?php
/**
 * @file - Facade patter.
 *
 * It provides a unified to a set of interfaces in a subsystem.
 * It defines a hight-level interface that makes the subsystem easier to use.
 */

define('BOOT_ADDRESS', 0);
define('BOOT_SECTOR', 2);
define('SECTOR_SIZE', 4);

/* Complex parts. */
class CPU {
  public function freeze() { /* ... */ }
  public function jump( $position ) { /* ... */ }
  public function execute() { /* ... */ }
}

class Memory {
  public function load( $position, $data ) { /* ... */ }
}
 
class HardDrive {
  public function read( $lba, $size ) { /* ... */ }
}
 
/* Facade */
class Computer {
  protected $cpu;
  protected $memory;
  protected $hardDrive;

  public function __construct() {
    $this->cpu = new CPU();
    $this->memory = new Memory();
    $this->hardDrive = new HardDrive();
  }

  public function startComputer() {
    $this->cpu->freeze();
    $this->memory->load(BOOT_ADDRESS, $this->hardDrive->read(BOOT_SECTOR, SECTOR_SIZE));
    $this->cpu->jump(BOOT_ADDRESS);
    $this->cpu->execute();
  }
}
 
/* Client side */
$facade = new Computer();
$facade->startComputer();