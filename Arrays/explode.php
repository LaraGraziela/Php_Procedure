<?php
    $frase = 'Entendendo como usar a função do php EXPLODE. Auna= LaraDoNego. Filha da Patricia.';
    #explode (separador, StringASeparar);

    /*Ele separa a meu texto a partir do parâmetro passado:
     ('onde começar a separar', em qual variável separar)*/
    $lista = explode('.', $frase);

    var_dump($lista);

    


?>