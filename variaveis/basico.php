<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;

echo '<br>';
echo isset($soma);

unset($soma);
echo '<br>';
var_dump($soma);

$variavel = "10";
echo '<br>' . $variavel;

$variavel = "Agora sou uma tring!";
echo '<br>' . $variavel;

//Nomes de variável
$var = 'valida';
$var2 = 'valida';
$var3 = 'valida';
$_var_4 = 'valida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);
