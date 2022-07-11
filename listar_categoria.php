<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css"> 

        <!-- FontAwesome-->
        <script src="https://kit.fontawesome.com/ea7384805a.js" crossorigin="anonymous"></script>

</head>
<body>
    
<div class="container" style="margin-top: 40px; width: 500px">
    <div style="text-align: right;">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
<h3>Lista de Categoria</h3>
<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome Categoria</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>

    <?php
    include 'conexao.php';
    $sql = "SELECT * FROM `categoria`";
    $busca = sqlsrv_query($conexao,$sql);

    while ($array = sqlsrv_fetch_array($busca)) {
        $id_categoria = $array['id_categoria'];
        $nomecategoria = $array['nome_categoria'];
        ?>
    <tr>
        <td><?php echo $nomecategoria ?></td>
        <td>
            <a class="btn btn-warning btn-sm" style="color: #fff;" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
            <a class="btn btn-danger btn-sm" style="color: #fff;" href="deletar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
        </td>
    </tr>

        <?php } ?>
</table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>    
    <script src="bootstrap/bootstrap.min.js"></script>
</body>
</html>