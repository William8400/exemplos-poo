<?php
class Livro {
    private string $titulo;
    private string $autor;
    private ?int $quantidade;  

    public function __construct(string $valorDoTitulo, string $valorDoAutor, ?int $valorDaQuantidade = null){
        $this->setTitulo($valorDoTitulo);
        $this->setAutor($valorDoAutor);
        $this->setQuantidade($valorDaQuantidade);
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

    private function setTitulo(string $valorTitulo):void {
        if (empty($valorTitulo) || mb_strlen($valorTitulo) < 4) {
            echo "<p style='color:red'>Titulo  é Obrigatório!</p>";
        } else {
            $this->titulo = $valorTitulo;
        }
    }

    private function setAutor(string $valorAutor):void {
        if (empty($valorAutor) || mb_strlen($valorAutor) < 3) {
            echo "<p style='color:red'> Autor é Obrigatório!</p>";
        } else {
            $this->autor = $valorAutor;
        }
    }

    private function setQuantidade(?int $valorQuantidade):void {

        if ($valorQuantidade < 0) {
           echo "<p style='color:red'>Quantidade não pode ser negativa!</p>";
        } else {
            $this->quantidade = $valorQuantidade;
        }
    }



    
}

