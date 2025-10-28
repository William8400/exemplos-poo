<?php
class Cliente {

    /* Atributos privados NÃO PODEM SER ACESSADOS/MODIFICADOS fora da própria classe em que estão declarados */
    private string $nome;
    private int $idade;
    private string $email;

    private ?string $telefone; 
    
    public function __construct( 
        string $valorDoNome, 
        int $valorDaIdade, 
        string $valorDoEmail, 
        ?string $valorDoTelefone = null) 
    {
        $this->nome = $valorDoNome;
        $this->idade = $valorDaIdade;
        $this->email = $valorDoEmail;
        $this->telefone = $valorDoTelefone;
    }

    /* Metódos getters: permite acesso APENAS para leitura  */
    public function getNome():string{
        return $this->nome;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function getIdade():int{
        return $this->idade;
    }

    public function getTelefone():?string {
        return $this->telefone; 
    }
    /* ----------------------------------------------------------- */
    
    /* Métodos Setters: Permitem acesso de escrita para definir valores de acordo com alguma regra/validação. */
    public function setNome(string $valorNome):void{
        /* Se o nome estiver vazio */
        if (empty($valorNome)) {
            // Apresentamos uma mensagem alertando
            echo "<p style='color:red'>Nome é Obrigatório!</p>";
        } else {
    
        // Senão, pegamos o valor do nome e colocamos no atributo do objeto
        $this->nome = $valorNome;
        }  
    }
}
