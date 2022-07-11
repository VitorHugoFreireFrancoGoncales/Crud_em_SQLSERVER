<?php
    $id = $_GET['id'];
    $deletar = "DELETE FROM usuarios where id_usuario = $id";
    $fila = sqlsrv_query($conexao,$deletar);
    header ("Location: aprovar_usuario.php"); //Redireciona novamente para página de aprovação.
?>