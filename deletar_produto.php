<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM estoque WHERE id_estoque = $id";
$deletar = sqlsrv_query($conexao,$sql);
?>

    <link rel="stylesheet" href="bootstrap/bootstrap.min.css"> 
<center>
    <h3>Deletado com sucesso</h3>
    <div style="margin-top: 10px">
    <a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
</div>
</center>
</div>