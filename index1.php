<?php

    include 'conexao.php';
    //include 'script/password.php';

    $usuario = $_POST['usuario'];
    $senhausuario = $_POST['senha'];

    $sql = "SELECT mail_usuario,senha_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status='Ativo'";
    $buscar = sqlsrv_query($conexao,$sql);
    $total = sqlsrv_num_rows($buscar);
    
     //$total = sqlsrv_num_rows($buscar);
     //$total = count($array = sqlsrv_fetch_array($buscar));

while ($array = sqlsrv_fetch_array($buscar)) {

        $senha = $array['senha_usuario'];
        $email = $array['mail_usuario'];

    if(!empty($email)) {
        if ($senhausuario == $senha) {
            
            session_start();

            $_SESSION['usuario'] = $usuario;
            header('Location: menu.php');
        }else {
            header('Location: erro.php');
        }

    }else {

        header('Location: erro.php');

    }


}

?>