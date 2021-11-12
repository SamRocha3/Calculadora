<?php

require_once("calc/calculator.php");

$numb1 = (float)readline("Qual o primeiro número:");
$numb2 = (float)readline("Qual o segundo número:");
$op = readline("Qual a Operação a realizar (ex: '+','-','/','*'):");
$cal = $numb1.$op.$numb2;
try {
    $calculator = new Calculator($numb1, $numb2, $op);
    printf("Resultado: ". $cal ." = %s" . PHP_EOL, $calculator->calculate());
} catch (Throwable $e) {
    printf("Erro: %s" . PHP_EOL, $e->getMessage());
}