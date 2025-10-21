<?php
// importando a classe Cliente 
require_once "src/Cliente.php";

// Criando objetos(ou instâncias) à partir da Classe
$ClienteA = new Cliente();
$ClienteB = new Cliente();

// Atribuindo valores ao objetos $ClienteA
$ClienteA->nome = "Arroba";
$ClienteA->idade = 21;
$ClienteA->email = "arroba@gmail.com";

$ClienteB->nome = "Magnus";
$ClienteB->idade = 23;
$ClienteB->email = "magnus@gmail.com"



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Exemplos de PHP com POO</h1>
    <hr>

    <h2>Trabalhando com classes e objetos</h2>

    <h3>Acessando/lendo os dados dos objetos</h3>
    <h4>Cliente A</h4>
    <ul>
        <li><b>Nome:</b> <?=$ClienteA->nome?> </li>
        <li><b>Idade:</b> <?=$ClienteA->idade?> </li>
        <li><b>E-mail:</b> <?=$ClienteA->email?> </li>
    </ul>

    <section>
    <div class="clienteb">
        <h4>ClienteB</h4>
        <ul>
            <li><b>Nome:</b> <?=$ClienteB->nome?></li>
            <li><b>Idade:</b> <?=$ClienteB->idade?></li>
            <li><b>E-mail:</b> <?=$ClienteB->email?></li>
        </ul>
    </div>
    </section>

    <h3>Visualizando a estrutura dos objetos</h3>
    <pre><?=var_dump($ClienteA, $ClienteB)?></pre>
</body>
</html>