<?php

function sacar(array $conta, float $valorSacar): array{
        if( $valorSacar > $conta['saldo']){
                showMsg("voce n pode sacar");
        } else{
                $conta ['saldo'] -= $valorSacar; 
        }

        return $conta;
}

function showMsg($mensagem){
        echo $mensagem . '<br>';
}

function depositar(array $conta, float $valorDeposito) :  array{
        if($valorDeposito > 0){
                $conta['saldo'] += $valorDeposito;
        } else{
               showMsg( "os depositos precisam ser positivos");
        }

        return $conta; 
}

function titularComLetrasMaiusculas(array &$conta){
        $conta['titular'] = strtoupper($conta['titular']);
}

function showAccount(array $conta){
        ['titular' => $titular, 'saldo' => $saldo] = $conta;
        echo "<li>Titular: $titular. Saldo: $saldo</li>";
};