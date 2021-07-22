<?php 
    #Formas de criar um Array
    # Variavel recebe Array();
    #Variavel recebe []

    $lista = array();

    $lista2 = [];

    $formulario = $_GET;


    #Formas dos índices
    #1°

    $listaNomes = ['Lara', 'Natan', 'Tula'];

    $listaNumero = [1,2,3,4,5,6];

    #Com o var_dump e o print_r eu posso imprimir arrays
    #print_r($listaNomes);

    #var_dump($listaNumero);

    #var_dump($formulario);
    #echo $formulario['nome'];

    #echo $listaNomes; VAI DAR ERRO POIS O ECHO SO IMPRIME STRING;
    #Imprimir com echo:
    #echo $listaNomes[0];

    $array = ['Natan', 'lara', 'patricia', 'joao', 'josciellen', 'Athos', 'Tula'];
    #var_dump($array);
    #print_r($array);

    echo $array[0].'<hr/> <br/>'.$array[1].'<hr/> <br/>'.$array[3].'<hr/> <br/>'.$array[4].'<hr/> <br/>'.$array[5].'<hr/> <br/>'.$array[6];
    

?>