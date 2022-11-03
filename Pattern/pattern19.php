<?php

function pattern($n) {
  for ($i = $n; $i > 0; $i--) {
    for ($j = 1; $j <= $i; $j++) echo "*";
    for ($k = 0; $k <= $n - $j; $k++) echo " ";
    for ($k = 0; $k <= $n - $j; $k++) echo " ";
    for ($l = 1; $l <= $i; $l++) echo "*";
    echo "\n";
  }
  for ($i = 1; $i <= $n; $i++) {
    for ($j = 0; $j < $i; $j++) echo "*";
    for ($k = 1; $k <= $n - $j; $k++) echo " ";
    for ($k = 1; $k <= $n - $j; $k++) echo " ";
    for ($l = 1; $l <=$i; $l++) echo "*";
    echo "\n";
  }
}

pattern(5);
/**

**********
****  ****
***    ***
**      **
*        *
*        *
**      **
***    ***
****  ****
**********

*/