<?php

//$idadeList = array(21, 23, 19, 25);

$idadeList = [21, 23, 19, 25, 18, 34, 47];

list($idadeVinicius, $idadeLucca, $idadeRapha) = $idadeList;

//adiciona automaticamente o valor ao proximo indice do array criado
//ou seja, nao é necessario esepcificar em qual indice desejamos introduzir o novo valor
$idadeList [] = 20;

foreach ($idadeList as $idade){
        echo $idade;
}
?>