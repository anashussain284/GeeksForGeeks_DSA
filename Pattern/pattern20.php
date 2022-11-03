<?php

function pattern($n) {
  for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j <= $i; $j++) echo "*";
    for ($k = 0; $k < $n - $j; $k++) echo " ";
    for ($k = 0; $k < $n - $j; $k++) echo " ";
    for ($l = 0; $l < $n - $k; $l++) echo "*";
    echo "\n";
  }
  for ($i = $n - 1; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) echo "*";
    for ($k = 0; $k < $n - $j; $k++) echo " ";
    for ($k = 0; $k < $n - $j; $k++) echo " ";
    for ($l = 0; $l < $n - $k; $l++) echo "*";
    echo "\n";
  }
}

pattern(5);
/**

*        *
**      **
***    ***
****  ****
**********
****  ****
***    ***
**      **
*        *

*/