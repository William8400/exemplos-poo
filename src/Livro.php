<?php
class Livro {
    private string $titulo;
    private string $autor;
    private ?int $quantidade;  

    public function __construct(string $valorDoTitulo, string $valorDoAutor, ?int $valorDaQuantidade = null){
        $this->titulo = $valorDoTitulo;
        $this->autor = $valorDoAutor;
        $this->quantidade = $valorDaQuantidade;
}  
    /* Usamos um if para, se houver páginas (ou seja, não for null), faremos aparecer o prágrafo com o dado. */
    public function verificarTitulo():void{
        if (mb_strlen($this->titulo) < 3) {
            echo "<p style='color: red;'>Título não pode ter menos do que 3 letras</p>";
        } 
    } 

    /* Criando os métodos getters para verificar os atributos */
    public function getTitulo():string {
        return $this->titulo;
    }

    public function getAutor():string {
        return $this->autor;
    }

    public function getQuantidade():?int {
        return $this->quantidade;
    }
}

