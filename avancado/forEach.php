<?php

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
                'saldo' => 3000
        ]
];

$contasCorrentes['123.234.346-12'] =[
        'titular' => 'Claudia',
        'saldo' => 5000
];

//para cada uma das contas, chamando
//cada uma de $conta
//executa a exibição echo

// $CPF = INDICE --- VALOR = $CONTA
foreach ($contasCorrentes as $cpf => $conta){
        echo "-----" . $conta['titular'] ."-" . $cpf;
}

?>