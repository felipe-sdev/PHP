<?php 

class Aluno {
  public $nome;
  public $ra;
  public $endereco;
 
 function Aluno(){
 $this->DadosAlunos();
 }

 function DadosAlunos(){
 $this->nome = "Felipe Santos";
 $this->ra = "123.234.345";
 $this->endereco = "Rua assemblé a de deus , 16";
 }
 }

 $Aluno = new Aluno();

 echo "Nome:" . $Aluno->nome;
 echo "<br>";
 echo "RA:" . $Aluno->ra;
 echo "<br>";
 echo "Endereço:" . $Aluno->endereco;
 





?>