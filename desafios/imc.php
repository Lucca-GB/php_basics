<?php

$altura = 1.70 ;
$peso = 100;
$imc = $peso / ($altura * $altura);


echo "<h1> seu IMC é de: $imc </h1>";

if($imc < 18.5){
        echo "<h1> você está abaixo </h1>";
} elseif( $imc < 25){
        echo "<h1> você está na média </h1>";
}else{
        echo "<h1> você está acima </h1>";
}

echo "<h1> do recomendado </h1>";

?>