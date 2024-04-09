<?php
$var = 'João';
$Var = 'José';
echo "$var, $Var";      // exibe "Bob, Joe" as variáveis são case-sensitive

// $4site = 'not yet';     // inválido; começa com um número
$_4site = 'not yet';    // válido; começa com um sublinhado
$täyte = 'mansikka';    // válido; 'ä' é um caracter ASCII (extendido) 228


$name = "Guilherme";
$age = 20;

echo $name; // Guilherme
echo "</br>";
echo $age; // 20

$a = "mundo!";
echo "Olá, $a"; // Olá, mundo!
echo 'Olá, $a'; // Olá, $a


echo "Olá," . " mundo!";
//Olá, mundo!