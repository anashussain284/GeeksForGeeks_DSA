<?php declare(strict_types=1);

function cyclicallyRotateAnArrayByOne(array $array): array {
  $temp = $array[0];
  $array[0] = $array[count($array) - 1];
  $array[count($array) - 1] = $temp;
  return $array;
}

var_dump(cyclicallyRotateAnArrayByOne($array = [1, 2, 3, 4, 5, 6, 7]));