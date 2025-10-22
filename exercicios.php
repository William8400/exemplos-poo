<?php

require_once "src/Livro.php";

$Livro1 = new Livro("Harry Potter e a Pedra filosofal", "J.K. Rowling", 23);

$Livro2 = new Livro("Harry Potter e a Câmara Secreta", "J.K. Rowling", 56);

$Livro3 = new Livro( "Harry Potter e o Prisioneiro de Askaban", "J.K. Rowling" , 3);

$Livro1->verificarTitulo();

$Livro2->verificarTitulo();

$Livro3->verificarTitulo();

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
            <li><b>Quantidade:</b><?= $Livro1->quantidade ?? "não tem quantidade"?></li>
        </ul>
    </details>

    <hr>

    <details>

        <summary>
            <b>Livro 2 :</b>
        </summary>

        <ul>
            <li><b>Titulo:</b><?= $Livro2->titulo ?></li>
            <li><b>Quantidade:</b><?= $Livro2->quantidade ?? "número de quantidade não informado"?></li>
        </ul>
    </details>

    <hr>
    <details>
        <summary>
            <b>Livro 3 :</b>
        </summary>

        <ul>
            <li><b>Titulo:</b><?= $Livro3->titulo ?></li>
        <!-- o ?? é como se fosse um if sozinho -->
            <li><b>Quantidade:</b><?= $Livro3->quantidade  ?? "número de quantidade não informado"?></li>
        </ul>
    </details>
    <hr>

    

</body>

</html>