<?php

    #Combinando duas listas:
    #array_combine($lista1, lista2)
 
    #Uma lista será o "cabeçalho":
    $casa = ['Cadeira', 'Mesa', 'Sofá', 'Cama', 'TV', 'Panelas'];

    #Outra lista será os valores respectivos:
    $lojas = ['Minas Casa', 'Ponto Frio', 'Casas Bahia', 'New Kenko', 'Fast Shop', 'Polishop'];


    /*Combinar as duas listas para serem mostradas juntas sendo índice = valor,
    Ou seja: Cadeira = Minas Casa (A cadeira foi comprada no Minas Casa)*/
    $resultado = array_combine($casa, $lojas);


    var_dump($resultado);
?>