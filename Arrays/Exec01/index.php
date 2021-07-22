<?php 

$dados = 'Natan Martins dos Santos / Rua Coronel Elir Correia 456 Ribeiro de Abreu/ Lara / Rua Antonio severino de castro 13 ';

/* Se fosse usar o COMBINE:
$campos = 'Marido/Endereço/Esposa/Endereço';
*/

//Separando os Dados
$ExplodeDados = explode('/', $dados);

//Separando os Campos
$ExplodeCampos = explode ('/', $campos);

//Atribuindo os valores do Array no índice:
$result = [
    'Marido' => $ExplodeDados[0] ,
    'Endereço Marido' => $ExplodeDados[1],

    'Esposa' => $ExplodeDados[2],
    'Endereço Esposa' => $ExplodeDados[3]
    
];

var_dump($result);



/**
 * Marido: Nome do marido,
 * Endereço : Endereço do Marido,
 * Esposa : Nome da esposa
 * Endereço : Endereço da esposa
 */