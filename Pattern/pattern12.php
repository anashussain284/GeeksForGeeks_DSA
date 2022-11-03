<?php

function pattern($n) {
  $space = $n - 1;
  for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) echo $j . " ";
    for ($k = 0; $k < $space * 2; $k++) echo "  ";
    for ($l = $i; $l > 0; $l--) echo " " . $l;
    echo "\n";
    $space--;
  }
}

pattern(5);

/**

Input: 5

Output:
1                 1
1 2             2 1
1 2 3         3 2 1
1 2 3 4     4 3 2 1
1 2 3 4 5 5 4 3 2 1

*/