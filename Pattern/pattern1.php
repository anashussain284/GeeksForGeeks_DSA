<?php

function pattern1(int $n) {
  for ($i = 1; $i <= ($n * $n); $i++) {
    echo "*";
    if ($i % $n == 0) echo "\n";
  }
}

pattern1(5);