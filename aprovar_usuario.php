<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Aprovar Usuário</title>

        <!-- Bootstrap CSS -->
<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <!-- FontAwesome-->
        <script src="https://kit.fontawesome.com/ea7384805a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

</head>
<body>
    
<div class="container" style="margin-top: 40px;">
    <div style="text-align: right;">
        <a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
<h3>Lista de Usuários</h3>
<br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Nível</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>

    <?php
    include 'conexao.php';
    $sql = "SELECT * FROM usuarios WHERE status = 'Inativo'";
    $busca = sqlsrv_query($conexao,$sql);

    while ($array = sqlsrv_fetch_array($busca)) {
        
        $id_usuario = $array['id_usuario'];
        $nomeusuario = $array['nome_usuario'];
        $mail = $array['mail_usuario'];
         $nivel =$array['nivel_usuario'];

        ?>
    <tr>
            <td><?php echo $nomeusuario ?></td>
            <td><?php echo $mail ?></td>
            <td><?php echo $nivel ?></td>
        <td>
            <a class="btn btn-success btn-sm" style="color: #fff;" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=1" role="button"><i class="far fa-edit"></i>&nbsp;Administrador</a>
            <a class="btn btn-warning btn-sm" style="color: #fff;" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=2" role="button"><i class="far fa-edit"></i>&nbsp;Funcionário</a>
            <a class="btn btn-dark btn-sm" style="color: #fff;" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=3" role="button"><i class="far fa-edit"></i>&nbsp;Conferente</a>
            <a class="btn btn-danger btn-sm" style="color: #fff;" href="_deletar_usuario.php?id=<?php echo $id_usuario ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
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