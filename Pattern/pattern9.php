
<?php

function pattern($n) {
  $space = $n - 1;
  for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $space; $j++) echo" ";
    for ($j = 0; $j <= $i; $j++) echo"* ";
    echo"\n";
    $space--;
  }

  $space = 0;
  for ($i = $n; $i > 0; $i--) {
    for ($j = 0; $j < $space; $j++) echo" ";
    for ($j = 0; $j < $i; $j++) echo"* ";
    echo"\n";
    $space++;
  }
}

pattern(5);