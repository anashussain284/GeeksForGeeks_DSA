<?php

function pattern($n) {
  for ($i = $n; $i > 0; $i--) {
    for ($j = 1; $j <= $i; $j++) {
      echo $j;
    }
    echo PHP_EOL;
  }
}

pattern(5);