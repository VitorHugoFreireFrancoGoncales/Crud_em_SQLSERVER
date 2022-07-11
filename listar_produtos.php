<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css"> 
        <!-- Bootstrap ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    <?php
session_start();
$usuario = $_SESSION['usuario'];

if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

include 'conexao.php';

$sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status='Ativo'";
$buscar = sqlsrv_query($conexao,$sql);
$array = sqlsrv_fetch_array($buscar);
$nivel = $array['nivel_usuario'];    
?>

<div class="container" style="margin-top: 40px; text-align: center;">
    <div style="text-align: right;">
        <a href="menu.php" role="button" class="btn btn-sm btn-primary">
            <i class="bi bi-arrow-left-circle">
                <b>Voltar</b>
            </i>
        </a>
    </div>

<h3><i>Lista de Produtos</i></h3>
<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nro Produto</th>
            <th scope="col">Nome Produto</th>
            <th scope="col">Categoria</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Fornecedor</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>

    <?php
    include 'conexao.php';
    $sql = "SELECT * FROM estoque";
    $busca = sqlsrv_query($conexao,$sql);

    while ($array = sqlsrv_fetch_array($busca)) {

        $id_estoque = $array['id_estoque'];
        $nroproduto = $array['nroproduto'];
        $nomeproduto = $array['nomeproduto'];
        $categoria = $array['categoria'];
        $quantidade = $array['quantidade'];
        $fornecedor = $array['fornecedor'];
        ?>

        <tr>
            <td><?php echo $nroproduto ?></td>
            <td><?php echo $nomeproduto ?></td>
            <td><?php echo $categoria ?></td>
            <td><?php echo $quantidade ?></td>
            <td><?php echo $fornecedor ?></td>
        <td>

            <?php
                if(($nivel == 1)||($nivel == 2)) {
            ?>
            <a class="btn btn-warning btn-sm" style="color: #fff;" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="bi bi-trash"></i>&nbsp;Editar</a>
            <?php } 
            
            if ($nivel == 1) {
            ?>
            <a class="btn btn-danger btn-sm" style="color: #fff;" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="bi bi-x-octagon"></i>&nbsp;Excluir</a>

            <?php } ?>
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