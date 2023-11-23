<?php

// OBS
// todos os codigo termina com ; 
// o echo imprimi na tela
// as aspas duplas " faz analise de texto e verifica se tem variaveis
// as aspas simples ' imprime apenas o texto/string
# também é um comentário
# php é case sensitive

/*
  VARIAVEIS 
  - começam com $ 
  - não começar com numero
*/

/*
  TIPO DADOS
  - string: " " ou ' '
  - int: 1
  - float: 1.0
  - boolean: true ou false
  - array []
  - object {}
  - null 
*/
  

/*
  OPERADORES/SIMBOLOS
  = atribuição
  + soma
  * multiplicação
  / divisão
  - subtração
  % resto da divisão
  ++ incremento
  -- decremento
  == igualdade
  === identidade
  != diferente
  <> diferente
  !== identidade
  > maior
  < menor
  >= maior ou igual
  <= menor ou igual
  && e
  || ou
  ! negação
  ? ternário
  : ternário
  . concatenação
*/

/*
  CONCATENACAO
  - utiliza-se o .
*/

$nome = "jorge";
$idade = 34.54;
$b = true;

$primeiroNumero = 10; 
$segundoNumero = 10;
$soma = $primeiroNumero + $segundoNumero;

$dados = ["jorge", "ayra", "mano"];


$html = "
<html>
  <h1>a soma é: $soma</h1>
  <h1>dados: $dados[1]</h1>
  <p>$nome  $idade</p>
  <h1>$idade</h1>
  <h1>$b === false ? 'verdadeiro' : 'falso'</h1>
</html>
";

echo $html;