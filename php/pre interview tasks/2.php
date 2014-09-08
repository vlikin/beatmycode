<?php
/**
 * @file - It displays prime numbers.
 */

$count_to = 100;
$prime_list = array (1, );
foreach (range(2, $count_to) as $i) {
  $is_prime = TRUE;
  foreach (range(2, $i - 1) as $j) {
    if (($i % $j) == 0) {
      $is_prime = FALSE;
      break;
    }
  }
  if ($is_prime) {
    $prime_list[] = $i;
  }
}

foreach ($prime_list as $prime) {
  print $prime . chr(10);
}