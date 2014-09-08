<?php
/**
 * @file It shows a sum of $count random numbers that is bigger than $more.
 */

$random_from = 0;
$random_to = 10;
$count = 3;
$more = 14;
do {
  $random_list = array();
  foreach (range(0, $count - 1) as $i) {
    $random_list[] = rand($random_from, $random_to);
  }
  $sum = array_sum($random_list);
} while ($sum < $more);

print $sum;