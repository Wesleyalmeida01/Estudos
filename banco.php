<?php

require_once 'funcoes.php';

$contasCorrentes = [

'600.410.493-06' => [
    'titular' => 'Wesley Almeida',
    'saldo' => 10000
],
'381.012.836-49' => [
    'titular' => 'Sara Hellen',
    'saldo' => 300 
], 
'781.666.243-20' => [
    'titular' => 'Flavio Sousa',
    'saldo' => 100
    ]
];

$contasCorrentes ['600.410.493-06'] = sacar
    ($contasCorrentes ['600.410.493-06'], 
    valorASacar: 500);

$contasCorrentes ['381.012.836-49'] = sacar
    ($contasCorrentes ['381.012.836-49'],
    valorASacar: 200);

$contasCorrentes['781.666.243-20'] = depositar(
    $contasCorrentes['781.666.243-20'],
    valorADepositar: 900
);

//unset ($contasCorrentes ['381.012.836-49']);

//titularComLetrasMaiusculas($contasCorrentes ['600.410.493-06']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas Bancarias</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3> <?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            <h4>Saldo: <?= $conta['saldo']; ?></h4>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>