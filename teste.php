<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}


$contaCorrente = [

'781.666.243-20' => [
    'Titular' => 'Flavio Sousa',
    'Valor' => 800    
],

'600.410.493-06' => [
    'Titular' => 'Wesley Almeida',
    'Valor' => 1200
],

'940.546.782-54' => [
    'Titular' => 'Sara Hellen',
    'Valor' => 3000
]
];

foreach ($contaCorrente as $cpf  => $conta) {
    exibeMensagem ($cpf . " => " . $conta ['Titular'] . ' => ' . $conta ['Valor'] );
}
