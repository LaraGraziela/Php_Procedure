<?php

#array_push($NomeVariavel, 'gisele');
#array_push($NomeVariavel, ['Tortuguita, 'Doguinho', 'Gato']);
#array_push($NomeVariavel, ['chave' => 'valor']);

$array = ['Natan', 'lara', 'patricia', 'joao', 'josciellen', 'Athos', 'Tula'];

# Inserindo um novo valor:
array_push($array, 'Giboca');

# Inserindo um novo array dentro do array:
array_push($array, ['Tortuguita', 'Doguinho', 'Gato']);

# Atribuindo um nome para o índice, e informando o seu valor:
array_push($array, ['Familia' => 'PinhoSol']);

var_dump($array);

?>