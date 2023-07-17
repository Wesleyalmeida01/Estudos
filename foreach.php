<?php
$contasCorrentes = [

'600.140.193-06' => [
    'titular' => 'wesley',
    'saldo' => 500
],
'381.012.836-49' => [
    'titular' => 'sara',
    'saldo' => 1200 
], 
'781.666.243-20' => [
    'titular' => 'flavio',
    'saldo' => 800
    ]
];

$contasCorrentes ['123.146.789-20'] = [
    'titular' => 'karine',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta ['titular'] . PHP_EOL;
} 