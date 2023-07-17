<?php

$conta1 = [
    'titular' => 'wesley',
    'saldo' => 500
];

$conta2 = [
    'titular' => 'sara',
    'saldo' => 1200 
];

$conta3 = [
    'titular' => 'flavio',
    'saldo' => 800
];
$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count ($contasCorrentes); $i++ ) {
    echo $contasCorrentes [$i] ['titular']. PHP_EOL;
}