<?php
// importando a classe Cliente 
require_once "src/Cliente.php";

// Criando objetos(ou instâncias) à partir da Classe
$ClienteA = new Cliente();
$ClienteB = new Cliente();

// Atribuindo valores ao objetos $ClienteA
$ClienteA->nome = "William";
$ClienteA->idade = 21;
$ClienteA->email = "arroba@gmail.com";



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos</title>
</head>
<body>
    <h1>Exemplos de PHP com POO</h1>
    <hr>

    <h2>Trabalhando com classes e objetos</h2>

    <h3>Visualizando a estrutura dos objetos</h3>
    <pre><?=var_dump($ClienteA, $ClienteB)?></pre>
</body>
</html>