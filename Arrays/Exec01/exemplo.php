<?php 

#Definir os dados na URL:
$dados = $_GET;

#Definindo os campos para o cabeçalho.
$campos = 'Nome/sobrenome';

#Separando os campos:
$SepararCampos = explode('/', $campos);
var_dump($SepararCampos);

var_dump($dados); // antes de separar os dados

#Separando dados do índice de dados (dados deixa de ser índice):
$dados = explode('/', $dados['dados']);

var_dump($dados); //depois de separar os dados

#Atribuindo índices pra cada dado do sobrenome:
$dados = [
    $dados[0],
    $dados[1].' '.$dados[2].' '.$dados[3]
];


$resultado = array_combine($SepararCampos, $dados);
var_dump($resultado);