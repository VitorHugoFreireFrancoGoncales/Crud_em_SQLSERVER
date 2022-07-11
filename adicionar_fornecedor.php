<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css"> 
        <!-- Bootstrap ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>

<div class="container" style="margin-top: 40px; width: 500px">
    <div style="text-align: right;">
        <a href="menu.php" role="button" class="btn btn-sm btn-primary">
        <i class="bi bi-arrow-left-circle">
            <b>Voltar</b>
        </i>
        </a>
    </div>

    <h4><i>Cadastro de Fornecedor</i></h4>
    <form action="_inserir_fornecedor.php" method="post">
        <label><i>Fornecedor</i></label>
        <div class="form-group">
            <input type="text" name="fornecedor" class="form-control" placeholder="Digite o nome do Fornecedor" autocomplete="off">
        </div>
        <div style="text-align: right">
        <button type="submit" id="botao" class="btn btn-sm btn-success">
            <i class="bi bi-check-circle-fill">
            <b>Cadastrar</b>
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