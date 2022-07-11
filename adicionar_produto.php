<!doctype html>
<html lang="pt-br">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Adicionar Produto</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css"> 

    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="adicionar_produto.css">
    </head>
    <body>

        <div class="container" id="tamanhoContainer" style="margin-top: 40px;">

        <div style="text-align: right;">
            <a href="menu.php" role="button" class="btn btn-sm btn-primary">
                <i class="bi bi-arrow-left-circle">
                <b>Voltar</b>
                </i>
            </a>
            </div>
            
        <h4><i>Formulário de Cadastro</i></h4>
            <form action="_inserir_produto.php" method="post" style="margin-top: 20px;">
                <div class="form-group">
                    <label><b>Numero do Produto:</b></label>
                    <input type="number" class="form-control" name=" nroproduto" placeholder="Insira o numero do produto" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label><b>Nome do Produto:</b></label>
                    <input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label><b>Categoria do Produto:</b></label>
                    <select class="form-control" name="categoria">
                    
                    <?php
                    include 'conexao.php';
                    $sql = "SELECT * FROM categoria order by nome_categoria ASC";
                    //Realiza a conexão com o banco de dados
                    $buscar = sqlsrv_query($conexao,$sql);

                    while ($array = sqlsrv_fetch_array($buscar)){
                        echo $id_categoria = $array['id_categoria'];
                        echo $nome_categoria = $array['nome_categoria'];
                    ?>

                    <option><?php echo $nome_categoria ?></option>

                    <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label><b>Quantidade:</b></label>
                    <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label><b>Fornecedor:</b></label>
                    <select class="form-control" name="fornecedor">
                    <?php
                    include 'conexao.php';
                    echo $sql2 = "SELECT * FROM fornecedor";
                   echo $buscar2 = sqlsrv_query($conexao,$sql2);

                    while ($array2 = sqlsrv_fetch_array($buscar2)){
                        echo $id_fornecedor = $array2['id_forn'];
                        echo $nome_fornecedor = $array2['nome_forn'];
                    ?>

                        <option><?php echo $nome_fornecedor ?></option>

                    <?php } ?>
                    </select>
                </div>

                <div style="text-align: right;">
                        <button type="submit" id="botao" 
                        class="btn btn-sm btn-success">
                        <i class="bi bi-check-circle-fill">
                        <b>Cadatrar</b>
                        </i>
                    </button>
                </div>

            </form>

        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>    
    <script src="bootstrap/bootstrap.min.js"></script>
    </body>
</html>