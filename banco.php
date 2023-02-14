<?php

require_once "src/Conta.php";
require_once "src/Titular.php";
require_once "src/CPF.php";

$adecio = new Titular(new CPF(numero:"072.554.923-80"), nome:"Adecio Júnior)");
$primeiraConta = new Conta($adecio);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() ; PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;


$isabelle = new Titular(new CPF(numero: "068.633.153-27"), nome : "Isabelle rodrigues taveira");
$segundaConta = new Conta($isabelle);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF(numero:"123"), nome:"abcdefg"));
unset($segundaConta);
