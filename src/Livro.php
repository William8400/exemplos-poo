<?php
class Livro {
    public string $titulo;
    public string $autor;
    public ?int $quantidade;  

    public function __construct(string $valorDoTitulo, string $valorDoAutor, ?int $valorDaQuantidade = null){
        $this->titulo = $valorDoTitulo;
        $this->autor = $valorDoAutor;
        $this->quantidade = $valorDaQuantidade;
}  

    public function verificarTitulo(){
        if (mb_strlen($this->titulo) < 3) {
            echo "<p style='color: red;'>Título não pode ter menos do que 3 letras</p>";
        } 
    } 
}

