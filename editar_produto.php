<?php
include 'conexao.php';
    $id = $_GET['id'];   
?>

<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="editar_produto.css">
    </head>
    <body>

        <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
        <h4><i>Formulário de Cadastro</i></h4>
            <form action="_atualizar_produto.php" method="post" style="margin-top: 20px;">
                <?php

                $sql = "SELECT * FROM estoque WHERE id_estoque = $id";
                $buscar = sqlsrv_query($conexao,$sql);

                while ($array = sqlsrv_fetch_array($buscar)) {
                    $id_estoque = $array['id_estoque'];
                    $nroproduto = $array['nroproduto'];
                    $nomeproduto = $array['nomeproduto'];
                    $categoria = $array['categoria'];
                    $quantidade = $array['quantidade'];
                    $fornecedor = $array['fornecedor'];
                ?>

                <div class="form-group">
                    <label>Numero do Produto</label>
                    <input type="number" class="form-control" name=" nroproduto" value="<?php echo $nroproduto ?>" disabled>
                    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
                </div>

                <div class="form-group">
                    <label><i>Nome do Produto</i></label>
                    <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
                </div>

                <div class="form-group">
                    <label><i>Categoria do Produto</i></label>
                    <select class="form-control" name="categoria">
                        <option>Periféricos</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Celulares</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Quantidade Produto</label>
                    <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
                </div>

                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor">
                        <option>Fornecedor A</option>
                        <option>Fornecedor B</option>
                        <option>Fornecedor C</option>
                    </select>
                </div>

                <div style="text-align: right;">
                    <button type="submit" id="botao" class="btn btn-sm btn-success">
                    <i class="bi bi-check2-circle">
                        Atualizar
                    </i>
                    </button>
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