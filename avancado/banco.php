<?php

require_once('funcoes.php');


$contasCorrentes = [
        //podemos atribuir um indice, o que nao significa
        //que o primeiro indice seja necessariamente 0
        '123.456.789-10' =>[
                'titular' => 'Lucca',
                'saldo' => 1000,
        ],
        '123.456.789-11' => [
                'titular' => 'Raphaela',
                'saldo' => 2000
        ],
        '123.456.789-12' => [
                'titular' => 'Sheila',
                'saldo' => 300
        ]
];

$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);

$contasCorrentes['123.456.789-12'] = sacar($contasCorrentes['123.456.789-12'], 500);

$contasCorrentes['123.456.789-10'] = depositar(
        $contasCorrentes['123.456.789-10'],
        900
);

unset($contasCorrentes['123.456.789-10']);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-12']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <h1>Contas Correntes</h1>

        <dl>
                <?php foreach($contasCorrentes as $cpf => $conta){ ?>
                <dt><h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3></dt>
                <dd> Saldo: <?= $conta['saldo']; ?></dd>
                <?php } ?>
        </dl>
</body>
</html>