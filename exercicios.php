<?php

require_once "src/Livro.php";

$Livro1 = new Livro();

$Livro2 = new Livro();

$Livro3 = new Livro();

$Livro1->titulo = "Harry Potter e a Pedra Filosofal";
$Livro1->autor = "J.K. Rowling";
$Livro1->quantidade = 7;

$Livro2->titulo = "Harry Potter e a Câmara Secreta";
$Livro2->autor = "J.K. Rowling";
$Livro2->quantidade = 8;

$Livro3->titulo = "Harry Potter e o Prisioneiro de Askaban";
$Livro3->autor = "J.K. Rowling";
$Livro3->quantidade = 3;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>

<body>

    <h1>Livros Do Harry Potter</h1>
    <hr>

    <details>
        
    
        <summary>
            Livro 1 
        </summary>

        <ul>
            <li><b>Titulo:</b><?= $Livro1->titulo ?></li>
            <li><b>Quantidade:</b><?= $Livro1->quantidade ?></li>
        </ul>
    </details>
    <hr>
    
    <details>
        
        <summary>
             Livro 2 
        </summary>

        <ul>
            <li><b>Titulo:</b><?= $Livro2->titulo ?></li>
            <li><b>Quantidade:</b><?= $Livro2->quantidade ?></li>
        </ul>
    </details>
    
    <hr>
    <details>
        <summary>
           Livro 3 
        </summary>

        <ul>
            <li><b>Titulo:</b><?= $Livro3->titulo ?></li>
            <li><b>Quantidade:</b><?= $Livro3->quantidade ?></li>
        </ul>
    </details>
    <hr>

</body>

</html>