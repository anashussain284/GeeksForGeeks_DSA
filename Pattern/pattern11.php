<?php

function pattern($n) {
  $m = 1; // starting
  for ($i = 0; $i < $n; $i++) {
    $k = $m;
    for ($j = 0; $j <= $i; $j++) {
      echo $k;
      $k = ($k == 0) ? 1 : 0;
    }
    echo "\n";
    $m = ($m == 0) ? 1 : 0;
  }
}

pattern(5);

/**

1 
0 1 
1 0 1
0 1 0 1 
1 0 1 0 1

*/