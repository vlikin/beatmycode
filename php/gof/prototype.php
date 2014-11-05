<?php
/**
 * @file Prototype pattern.
 *
 * - Creating new objects(instances) by cloning(copying) other objects.
 */

interface ICloneable {
  public function getClone();
}

class Prototype implements ICloneable {

  public $field_1 = '';
  public $field_2 = '';

  public function __construct($field_1) {
    $this->field_1 = $field_1;
  }

  public function getClone() {
    $prototype = new Prototype($this->field_1);
    $prototype->field_2 = $this->field_2;

    return $prototype;
  }
}
$prototype_1 = new Prototype('Pr - 1, F - 1');
$prototype_1->field_2 = 'Pr - 1, F - 2';

$prototype_2 = $prototype_1->getClone();
$prototype_2->field_2 = 'Pr - 2, F - 2 - Changed';

print '----------------------------------------' . chr(10);
print '1 Look        - Pr - 1, F - 1 -- ' . $prototype_1->field_1 . chr(10);
print '2 Look        - Pr - 1, F - 2 -- ' . $prototype_1->field_2 . chr(10);
print '3 Same as 1   - Pr - 2, F - 1 -- ' . $prototype_2->field_1 . chr(10);
print '4 Changed - 2 - Pr - 2, F - 2 -- ' . $prototype_2->field_2 . chr(10);