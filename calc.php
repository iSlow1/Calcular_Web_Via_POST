<?php

$primeiroNumero = $_POST['primeiroNumero'];
$segundoNumero = $_POST['segundoNumero'];

$soma = $primeiroNumero + $segundoNumero;
$subtracao = $primeiroNumero - $segundoNumero;
$multiplicacao = $primeiroNumero * $segundoNumero;
$divisao = $primeiroNumero / $segundoNumero;


echo "A Soma é: $soma <br>";
echo "A Subtração é: $subtracao <br>";
echo "A Multiplicação é: $multiplicacao <br>";
echo "A Divisão é: $divisao <br>";