<?php

function pattern($n) {
  for ($i = 1; $i <= $n; $i++) {
    for ($j = 0; $j < $i; $j++) {
      echo $i;
    }
    echo PHP_EOL;
  }
}

pattern(5);