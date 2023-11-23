<?php

// OBS
// todos os codigo termina com ; 
// o echo imprimi na tela
// as aspas duplas " faz analise de texto e verifica se tem variaveis
// as aspas simples ' imprime apenas o texto/string


/*
  VARIAVEIS 
  - começam com $ 
*/

/*
  CONCATENACAO
  - utiliza-se o .
*/

$nome = "jorge";
$idade = 34;


$html = "
<html>
  <p>$nome  $idade</p>
  <h1>$idade</h1>
</html>
";

echo $html;