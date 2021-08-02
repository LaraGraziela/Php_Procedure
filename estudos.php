<?php

// MISTURAR HTML COM PHP:
echo "<h3> Olá </h3>";
// OBJETOS

//Criando a classe e passando uma função simples:
class objeto {
    function teste(){
        echo "Classes e Objetos";
    }
}

//Criando um objeto para passar a classe 'objeto' para a variável $php:
$php = new objeto;

//Chamando o conteúdo da função:
$php -> teste();

//______________________________________________

//COERÇÃO
$coercao = 1 + "10.5";

//echo $coercao;

//_______________________________________________

//FUNÇÃO SET TYPE
//Ela converte o valor de uma variável para o tipo desejado:

$setType = 15; //Mostrará como um INT.
settype($setType,"string"); //Com essa função, 15 se tornará um valor String.

//Com o var_dump é melhor de visualizar a diferença:
var_dump($setType." agora é uma string.");

//Exemplo com Booleanos:
$booleano = "TRUE"; //TRUE é passado como STRING.
settype($booleano, "bool");
var_dump("Virou boleano: ".$booleano);
/*A variável $booleano se tornará de fato um boleano, sendo TRUE por simplesmente conter
um valor, caso não houvesse nada definido dentro da variável, o retorno seria FALSE.*/

//______________________________________________________________________________________________

// DEFININDO CONSTANTES COM PHP:

/* Utilizamos o "define" para definir o nome da nossa "variável" constante
e em seguida, atribuímos o devido valor a ela:*/
define ("CPF", 548779965);
echo "Variável Constante: ".CPF ;


//______________________________________________________________________________________________

// CRIANDO UM FORMULÁRIO COM HTML, RECEBENDO OS DADOS E MOSTRANDO:
echo "<h3> Formulário </h3>
      <form action='estudos.php' method='post'>
        <p> Nome: <input type='text' name='name' value=''/> </p>
        <p> Idade: <input type='number' name='age'/>
        <input type='submit'/>
      </form>";


    print_r ("Olá ".$_POST['name']. "! Você tem: ".$_POST['age']. ' anos.');


//______________________________________________________________________________________________



?>

