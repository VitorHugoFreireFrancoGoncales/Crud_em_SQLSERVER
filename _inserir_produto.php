<?php

    include 'conexao.php';

    $nroproduto = $_POST['nroproduto']; //recebe o valor do atributo
    $nomeproduto = $_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];

    echo $sql = "INSERT INTO estoque (nroproduto,nomeproduto,categoria,quantidade,fornecedor) VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";
    $inserir = sqlsrv_query($conexao,$sql);

?>
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<div class="container" style="width: 500px; margin-top: 20px">
    <center>
    <h4>Produto Adicionado com sucesso!</h4>
    <div style="padding-top: 20px;">
    <a href="menu.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Ítem</a>
    </center>
</div>
</div>