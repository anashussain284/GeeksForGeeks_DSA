<?php

function pattern($n) {
  for ($i = $n; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
      echo "*";
    }
    echo PHP_EOL;
  }
}

pattern(5);