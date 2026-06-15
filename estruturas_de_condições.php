<?php

$a = 7;
$b = 7;

if($a ==$b){

echo "A primeira variavel é igual a segunda ";
 //Esse é o jeito correto de declarar IF em PHP
}

$c = 12;
$d = 12;

if ($c >$d){
echo " O valor da primeira variavel é igual a segunda ";
}
else {
echo " o valor da primeira é diferente do valor da segunda ";
// essa é a segunda maneira e ultilizando o IF e o ELSE
}

$e = 22;
$r = 23;

if ($e > $r){
echo " O valor da primeira é maior que o valor da segunda ";
}
elseif($e = $r){
echo" O valor da primeira é igual o da segunda";
}
else {
echo"O valor da primeira é menor que o valor da segunda";
}
// Nesse caso temos uma condição com mais de uma opção verdadeira, onde ele verifica a primeira condições se nao for ele verifica a segunda e se nao for correto ele responde com else 

 $destino="New York";
     switch ($destino) {
          case "São Paulo":
               echo 'Seja bem vindo a cidade que nunca para!';
               break;
          case "Paris":
               echo 'Seja bem vindo a cidade Luz!';
               break;
          case " New York ":
               echo 'Seja bem vindo a Big Apple!';
               break;
          case "Rio de Janeiro":
               echo 'Seja bem vindo a cidade maravilhosa!';
               break;
          default:
               echo 'Não encontramos seu destino!';
               break;
               // neese caso ultilizamos o swicth ele é ultilizado para mais de 2 opção e para que fique de mais facil entendimento .
     }




?>