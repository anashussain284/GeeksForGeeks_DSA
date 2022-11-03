<?php

function pattern($n) {
  for ($i = $n + ($n - 1), $k = $n; $i > 0; $i--, $k--) {
    for ($j = 0; $j < $n + ($n - 1); $j++) echo $k;
    echo "\n";
  }
}

pattern(4);
/**

4 4 4 4 4 4 4
4 3 3 3 3 3 4
4 3 2 2 2 3 4
4 3 2 1 2 3 4
4 3 2 2 2 3 4
4 3 3 3 3 3 4
4 4 4 4 4 4 4

*/
