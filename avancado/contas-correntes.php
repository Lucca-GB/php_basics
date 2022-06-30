<?php

$conta1 = [
        'titular' => 'Lucca',
        'saldo' => 1000,
];

$conta2 = [
        'titular' => 'Raphaela',
        'saldo' => 2000
];

$conta3 = [
        'titular' => 'Sheila',
        'saldo' => 3000
];


$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++){
        echo $contasCorrentes[$i]['saldo'];
}
?>