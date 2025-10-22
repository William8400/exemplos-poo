<?php

require_once "src/Livro.php";

$Livro1 = new Livro("Harry Potter e a Pedra Filosofal", "J.K. Rowling", 7);

$Livro2 = new Livro("Harry Potter e a Câmara Secreta", "J.K. Rowling", 8);

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
    <link rel="stylesheet" href="css/style.css">
    <title>Livros</title>
</head>

<body>

    <header>

        <p><b>Livros Do Harry Potter</b></p>

    </header>


    <hr>

    <details>

        <summary>
           <b>Livro 1 :</b>
        </summary>

        <ul>
            <li><b>Titulo:</b><?= $Livro1->titulo ?></li>
            <li><b>Quantidade:</b><?= $Livro1->quantidade ?></li>
        </ul>
    </details>

    <hr>

    <details>

        <summary>
            <b>Livro 2 :</b>
        </summary>

        <ul>
            <li><b>Titulo:</b><?= $Livro2->titulo ?></li>
            <li><b>Quantidade:</b><?= $Livro2->quantidade ?></li>
        </ul>
    </details>

    <hr>
    <details>
        <summary>
            <b>Livro 3 :</b>
        </summary>

        <ul>
            <li><b>Titulo:</b><?= $Livro3->titulo ?></li>
            <li><b>Quantidade:</b><?= $Livro3->quantidade ?></li>
        </ul>
    </details>
    <hr>

</body>

</html>