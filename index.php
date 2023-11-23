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
  === identidade/identico
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

/*
  ESTRUTURA CONDICIONAIS.
  if 
*/



$nome = "jorge";
$idade = 34.54;
$b = true;

$primeiroNumero = 10.34; 
$segundoNumero = 14;
$soma = $primeiroNumero + $segundoNumero;

$dados = ["jorge", "ayra", "mano"];
$dados2 = ["j" => "jorge", "a" => "ayra", "m" => "mano"]; # chave => valor / array associativo


$html = "
<html>
  <h1>nome: $nome</h1>
  <h1>a soma é: $soma</h1>
  <h1>dados: $dados2[m]</h1>
  <p>$nome  $idade</p>
  <h1>$idade</h1>
  <h1>$b === false ? 'verdadeiro' : 'falso'</h1>
</html>
";

$numeroA = 10;
$numeroB = 1;

// if ($numeroA === $numeroB) {
//   echo "e igual e mesmo tipo";
// } else {
//   echo "não é igual";
// }

$n = 5;
$n1 = 5;


$verificar = $n == $n1 ? 'verdadeiro' : 'falso';
echo $verificar;

// for ($i=0; $i < $n; $i++) { 
//   echo "<h1>$i</h1>";
//   echo "<h1>$n1</h1>";
// }

while ($n <= 10) {
  echo "<h1>$n</h1>";
  $n++;
} 

// foreach ($dados as $chave => $item) {
//   echo $chave . " => " . $item . "<br>";
// }


#echo $html;