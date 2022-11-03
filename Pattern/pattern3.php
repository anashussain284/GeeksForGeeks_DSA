<?php

function pattern($n) {
  for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo $j;
    }
    echo "\n";
  }
}

pattern(5);