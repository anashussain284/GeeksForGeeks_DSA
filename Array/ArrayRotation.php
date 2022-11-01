<?php declare(strict_types=1);



$arrayRotation = new ArrayRotation($array = [1, 2, 3, 4, 5, 6, 7], $d = 2);
$approach_1 = $arrayRotation->tempArray($array, $d);
var_dump($approach_1);

$approach_2 = $arrayRotation->rotateOneByOne($array, $d);
var_dump($approach_2);