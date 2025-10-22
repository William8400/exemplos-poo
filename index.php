<?php
require_once "src/Cliente.php";

// Criando um objeto e usando o método construtor para passar os dados 
$clienteA = new Cliente("jubilei", 18 , "jubilei@gmail.com");

$clienteB = new Cliente("Jubão", 17, "jubão@gmail.com");

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

    

    <h3>Visualizando a estrutura dos objetos</h3>
    <pre><?=var_dump($clienteA)?></pre>
</body>
</html>