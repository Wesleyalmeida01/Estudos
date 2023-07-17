<?php

$idadeList = [21, 34, 23, 55, 36, 57, 73];

list($idadeWesley, $idadeSara, $idadeFlavio) = $idadeList;

$idadeList[] = 20;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}