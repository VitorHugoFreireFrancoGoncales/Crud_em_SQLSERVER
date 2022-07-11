<?php
include 'conexao.php';

$id = $_GET['id'];

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Formulário de Edição</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style type="text/css">

        #tamanhoContainer {
            width: 500px;
        }

        #botao {
            background-color: #FF1168;
            color: #ffffff;
        }
    </style>

    </head>
    <body>

        <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
        <h4>Formulário de Edição</h4>
            <form action="_atualizar_categoria.php" method="post" style="margin-top: 20px;">
                <?php

                $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
                $buscar = sqlsrv_query($conexao,$sql);
                while ($array = sqlsrv_fetch_array($buscar)){

                    $id_categoria = $array['id_categoria'];
                    $nomecategoria = $array['nome_categoria'];

                ?>

                <div class="form-group">
                    <label>Nome Categoria</label>
                    <input type="text" class="form-control" name="nomecategoria" value="<?php echo $nomecategoria ?>">
                    <input type="text" class="form-control" name="id" value="<?php echo $id_categoria ?>" style="display: none;">
                </div>

                <div style="text-align: right;">
                    <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
                </div>
            <?php } ?>
            </form>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="bootstrap/jquery-3.3.1.slim.min.js"></script>
        <script src="bootstrap/popper.min.js"></script>    
        <script src="bootstrap/bootstrap.min.js"></script>
    </body>
</html>