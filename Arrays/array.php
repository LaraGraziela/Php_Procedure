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

    //Inserindo HTML no array:
    echo $array[0].'<hr/> <br/>'.$array[1].'<hr/> <br/>'.$array[3].'<hr/> <br/>'.$array[4].'<hr/> <br/>'.$array[5].'<hr/> <br/>'.$array[6];
    
    //__________________________________________________________________________________________________

    
    // ATRIBUIR VALORES A UM ARRAY:
    $Lista = [
        1 => [
            'Nome' => 'Lara',
            'Idade' => 20
        ],
        2 => [
            'Nome' => 'Natan',
            'Idade' => 28
        ],
        3 => [
            'Nome' => 'Damba',
            'Idade' => 2
        ]
    ];

    var_dump($Lista);

    //_____________________________________________________________________________________

    // LISTAS:
    // Através delas pode-se atribuir valores de um array para variáveis.

    // Passando uma lista de variáveis que irá receber um array com tais valores:
    list($a, $b, $c) = array("Lara", "Natan", "Damba");

?>