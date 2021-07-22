<?php
    #Comparando o que há de diferente entre duas listas
    #array_diff($lista1, $lista2);
    $a1=array("Nome"=>"Lara","Setor"=>"FrontEnd","Computador"=>"Ideapad3i","Ativo"=>'sim');
    $a2=array("Nome"=>"Natan","Setor"=>"Backend","Computador"=>"Lenovo","Ativo"=>'Não');
    $a3=array("Nome"=>"Natan","Setor"=>"Backend","Computador"=>"Lenovo","Ativo"=>'Sim');

    #Mostra a diferença entre as duas variáveis.
    $diferenca1 = array_diff($a1, $a2);

    var_dump($diferenca1);
?>