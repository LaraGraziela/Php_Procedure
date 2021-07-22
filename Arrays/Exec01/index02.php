<?php 

# EXERCÍCIO:
/**
 * Marido: Nome do marido,
 * Marido Sobrenome: Sobrenome do Marido,
 * Endereço : 
 *  [
 *      'Rua'=>'Nome da rua ou avenida', 
 *      'Bairro'=>'bairro', 
 *      'cidade'=>'Nome da cidade', 
 *      'estado'=>'Nome do Estado'
 * ],
 * 
 * Esposa : Nome da esposa
 * Esposa Sobrenome : sobrenome da esposa
 * Endereço : 
 *  [
 *      'Rua'=>'Nome da rua ou avenida', 
 *      'Bairro'=>'bairro', 
 *      'cidade'=>'Nome da cidade', 
 *      'estado'=>'Nome do Estado'
 * ],
 * 
 */

$dados = 
'Natan Martins / Rua Coronel Elir Correia 456 - Ribeiro de Abreu- Belo Horizonte - Minas Gerais - Brasil /
 Lara Graziela / Rua Antonio severino de castro 13 - Floramar- Belo Horizonte - Minas Gerais - Brasil ';


//_____________________________________________________________

//SEPARANDO OS DADOS:

$ExplodeDados = explode('/', $dados);
//echo 'Explode dos dados:';
//var_dump($ExplodeDados);

//_____________________________________________________________

//PEGANDO O EXPLODE DOS DADOS E SEPARANDO O ENDEREÇO ATRAVÉS DE OUTRO EXPLODE DIFININDO A PARTIR DE QUAL INDICE QUERO PEGAR:

$ExplodeEnderecoMarido = explode ('-', $ExplodeDados[1]);
//var_dump($ExplodeEnderecoMarido);
$ExplodeEnderecoEsposa = explode ('-', $ExplodeDados[3]);
//var_dump($ExplodeEnderecoEsposa);

//_____________________________________________________________

//FAZENDO UM EXPLODE DO EXPLODE DE DADOS PARA SEPARAR OS NOMES E SOBRENOMES A PARTIR DO INDICE:

$ExplodeNomesMarido = explode (' ', $ExplodeDados[0]);
//var_dump($ExplodeNomesMarido);
$ExplodeNomesEsposa = explode (' ', $ExplodeDados[2]);
//var_dump($ExplodeNomesEsposa);



 $result = [
     'Marido Nome' => $ExplodeNomesMarido[0],
     'Marido Sobrenome' => $ExplodeNomesMarido[1],
     'Marido Endereço' => [
         'Rua' => $ExplodeEnderecoMarido[0],
         'Bairro' => $ExplodeEnderecoMarido[1],
         'Cidade' => $ExplodeEnderecoMarido[2],
         'Estado' => $ExplodeEnderecoMarido[3],
         'Pais' => $ExplodeEnderecoMarido[4]
     ],

     'Esposa Nome' => $ExplodeNomesEsposa[1],
     'Esposa Sobrenome' => $ExplodeNomesEsposa[2],
     'Esposa Endereço' => [
         'Rua' => $ExplodeEnderecoEsposa[0],
         'Bairro' => $ExplodeEnderecoEsposa[1],
         'Cidade' => $ExplodeEnderecoEsposa[2],
         'Estado' => $ExplodeEnderecoEsposa[3],
         'Pais' => $ExplodeEnderecoEsposa[4]
     ]
];
 var_dump($result);