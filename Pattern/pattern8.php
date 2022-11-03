<?php

function pattern($n) {
  $k = 2 * $n - 1;
  for ($i = 0; $i < $n; $i++) {
    for($j = 0; $j < $i; $j++)
      echo " ";
    for ($l = 0; $l < $k; $l++) {
      echo "*";
    }
    $k-=2;
    echo PHP_EOL;
  }
}

pattern(5);