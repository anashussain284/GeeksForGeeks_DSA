<?php

function pattern($n) {
  for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
      echo ($i == 0 || $i == $n - 1 || $j == 0 || $j == $n - 1) ? "*" : " ";

      // if ($i == 0 || $i == $n - 1 || $j == 0 || $j == $n - 1) {
      //   echo "*";
      // } else echo ".";
    }
    echo "\n";
  }
}

pattern(4);
/**

****
*  *
*  *
****

*/