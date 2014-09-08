<?php
/**
 * @file Show values of an array these are mod 5.
 */
$arr = array (3, 8, 15, 25, 16, 11, 10, 5, 7, 30);
for ($i = 0; $i < count($arr); $i++) {
  if ($arr[$i] % 5 == 0) {
    echo $arr[$i] . chr(10);
  }
}