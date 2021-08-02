<?php
    $produtos = [
        1 => [
            'Nome' => 'Sofá',
            'Valor' => 200,
            'Imagem' => 'https://www.etna.com.br/medias/sys_master/images/images/h91/h41/9630883446814/0435707-01.jpg?attachment=true'
        ],
        2 => [
            'Nome' => 'Televisão',
            'Valor' => 2100,
            'Imagem' => 'https://www.casasbahia-imagens.com.br/Control/ArquivoExibir.aspx?IdArquivo=1305222313'
        ],
        3 => [
            'Nome' => 'Geladeira',
            'Valor' => 3500,
            'Imagem' => 'https://images-americanas.b2w.io/produtos/01/00/img7/01/00/item/133605/7/133605724SZ.png'
        ],
        4 => [
            'Nome' => 'Fogão',
            'Valor' => 500,
            'Imagem' => 'https://www.pontofrio-imagens.com.br/Control/ArquivoExibir.aspx?IdArquivo=1099132903'
        ],
    ]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Produtos</title>
</head>


<style>
    .all {
        padding: 30px;
        display: flex;
    }

    .card {
        margin: 10px;
    }

    .btn{
        background-color: #57837B;
        color: white;
    }
</style>


<body>
    <div class="row">
        <div class="col-sm-12 all">
                
                        <?php
                        // Puxando os produtos do arquivo txt:
                        $arquivo = fopen('produtos.txt','r');

                        //Criando o array que vai guardá-los:
                        $lista = [

                        ];
                        
                        while (!feof($arquivo))
                        {
                            $linha = fgets($arquivo, 1024);
                            
                            // Separando os valores dos produtos:
                            $linha = explode(':', $linha);
                            
                            // Enviando os valores para o array $lista.
                            array_push($lista, [
                                'Nome' => $linha[0],
                                'Valor' => $linha[1],
                                'Imagem' => $linha[2].':'.$linha[3], // O explode também separou os ':' do link, e para juntar e tornar um link de novo, fazemos essa concatenação.
                
                            ]);

                        }
                            fclose($arquivo);

                            //var_dump($lista);
                           
                        ?>


                        <?php 

                            // MOSTRAR TODOS OS ITENS DE UMA LISTA SEM PRECISAR CRIAR UM HTML PARA CADA ITEM (FOREACH)

                            /* O foreach é como o 'for' porém eu não preciso atribuir um valor inicial ou final, ele irá pegar
                            TODOS os itens contidos no array. */

                    foreach ($lista as $value) 
                    {
                        // var_dump ($value); Mosta os valores contidos nos arrays dentro de $produtos.
                        
                        ?>
                        <!-- HTML -->

                        <div class="card" style="width:300px">
                            <img class="card-img-top" src="<?php echo $value['Imagem'] ?>">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $value['Nome']  ?></h4>
                                <p class="card-text">R$<?php echo $value['Valor']  ?></p>
                                <a href="#" class="btn">Comprar</a>
                            </div>
                        </div> 
                        
                        <?php
                    }
                        ?>
                 
        </div>
     </div>

    
</body>

</html>