<?php
    include 'conexao.php';
    $categoria = $_POST['categoria'];
    $sql = "INSERT INTO categoria (nome_categoria) values ('$categoria')";
    $inserir = sqlsrv_query($conexao,$sql); 
?>
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="estilos/style.css">
<div class="container" style="width: 400px">
<center>
    <h3><i>Adicionado com sucesso</i></h3>
    <div style="margin-top: 10px">
    <a href="adicionar_categoria.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
</div>
</center>
</div>