<?php

function new_pattern($n) {
  /** no of spaces */
  $k = 2 * $n - 1;

  /** outer-loop no of rows */
  for ($i = 0; $i < $n; $i++) {
    /** put starting spaces */
    for ($j = 0; $j < $k; $j++)
      echo " ";
      $k--;
    for ($l = 0; $l <= $i; $l++) {
      echo "* ";
    }
    echo PHP_EOL;
  }
}

new_pattern(5);
