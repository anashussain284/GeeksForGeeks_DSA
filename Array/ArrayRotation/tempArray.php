<?php declare(strict_types=1);

function tempArray(array $array, int $d): array {
  /** Temporary array from 0 to d */
  for ($i = 0; $i < $d; $i++) {
    $temp[] = $array[$i];
  }
  /** Temporary array from d to last */
  for ($i = $d; $i < count($array); $i++) {
    $temp2[] = $array[$i];
  }
  /** push temp to temp2 */
  for ($i = 0; $i < count($temp); $i++) {
    $temp2[] = $temp[$i];
  }
  /** Assign temp2 to Main array */
  return $array = $temp2;
}

var_dump(tempArray($array = [1, 2, 3, 4, 5, 6, 7], $d = 2));