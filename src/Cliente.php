<?php

// Class é um modelo para criar objetos
class Cliente {
    /* Atributos da classe: representam características que os objetos deverão ter */
    public string $nome;
    public int $idade;
    public string $email;

    /* Método responsável por exibir os dados de um objeto */
    public function mostrarDados(){
        /* exibindo os dados usando this = atributo desejado */
        echo "<div>
                <h4> Nome: $this->nome </h4> 
                <p><b>E-mail de contato:</b> $this->email</p>
                <p><b>Idade:</b> $this->idade anos</p>
              </div>";
        
    }



}