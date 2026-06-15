<?php 

class Aluno {
    public string $nome;
    public string  $ra;
    public string $endereco;
 
    // O construtor correto usa dois underlines antes de construct
    function __construct(){
        $this->DadosAlunos();
    }

    function DadosAlunos(){
        $this->nome = "Felipe Santos";
        $this->ra = "123.234.345";
        $this->endereco = "Rua assemblé a de deus , 16";
    }
} // <--- Faltava fechar esta chave da classe Aluno

$Aluno = new Aluno();

echo "Nome: " . $Aluno->nome;
echo "<br>";
echo "RA: " . $Aluno->ra;
echo "<br>";
echo "Endereço: " . $Aluno->endereco;






?>