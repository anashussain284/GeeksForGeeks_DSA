<?php declare(strict_types=1);

class ArrayRotation
{
  public function __construct($array, $d) {
    $array = $array;
    $d = $d;
  }
  /****** Approach1 - Using temp array ******/
  public function tempArray(array $array, int $d): array {
    /** Temparary array from dth value to end of the array */
    for ($i = $d; $i < count($array); $i++) {
      $temp[] = $array[$i];
    }
    /** Temporary array start to dth - 1 */
    for ($i=0; $i < $d; $i++) { 
      $temp2[] = $array[$i];
    }
    /** Temporary array to push 2nd array to the end of 1st array */
    for ($i=0; $i < count($temp2); $i++) { 
      $temp[] = $temp2[$i];
    }
    /** assign 2nd array to main array & return */
    return $array = $temp;
  }

  /****** Approach2 - Rotate one by one ******/
  public function rotateOneByOne(array $array, int $d): array {
    /** Shift all element from start to end upto dth element */
    for ($i = 0, $j = count($array) + 1; $i < $d; $i++, $j++) {
      $array[$j] = $array[$i];
      unset($array[$i]);
    }
    return $array;
  }

  /****** Approach3 - A Juggling Algorithm ******/
  public function juggglingAlgorithm(array $array, int $d) {
    $gcd = $this->gcd($d, count($array));
  }

  /** GCD */
  public function gcd($a, $b) {
    while (($a % $b) > 0) {
      $r = $a % $b;
      $a = $b;
      $b = $r;
    }
    return $b;
  }
}

$arrayRotation = new ArrayRotation($array = [1, 2, 3, 4, 5, 6, 7], $d = 2);
$approach_1 = $arrayRotation->tempArray($array, $d);
// var_dump($approach_1);

$approach_2 = $arrayRotation->rotateOneByOne($array, $d);
// var_dump($approach_2);

$approach_3 = $arrayRotation->juggglingAlgorithm($array, $d);
var_dump($approach_3);