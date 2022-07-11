<?php 

include 'conexao.php';

    $id = $_POST['id'];
    $nomecategoria = $_POST['nomecategoria'];
    $sql = "UPDATE categoria SET nome_categoria='$nomecategoria' WHERE id_categoria = $id";
    $atualizar = sqlsrv_query($conexao,$sql);
?>
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css"> 
        <link rel="stylesheet" href="estilos/style.css">
    <div class="container" style="width: 400px">

<center>
    <h3>Atualizado com sucesso</h3>
    <div style="margin-top: 10px">
    <a href="listar_categoria.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
</div>
</center>

</div>