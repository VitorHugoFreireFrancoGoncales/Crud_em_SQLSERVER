<?php
    //sqlsrv:Server=sql_des;Database=des_estagio","lucas", "lucas"
    // usuario lucas
    // senha lucas

    // $servername = "sql_des";//padrão - server local 
    // $database = "des_estagio";//alterar conforme o nomedo seu banco de dados
    // $username = "lucas";//padrão - root
    // $password = "lucas";//senha de conexao do banco de dados.
    

    // // // Create connection
    // $conexao = sqlsrv_connect($servername, $database, $username, $password)



    $servername = "sql_des";//padrão - server local 
    $conexoes = array("Database"=>"des_estagio", "UID"=>"lucas", "PWD"=>"lucas");
    $conexao = sqlsrv_connect($servername, $conexoes);

    if($conexao) {
        echo "Conexão Estabelecida. <br />";
    }else {
        echo "Conexão pode não esta Estabilizada.<br />";
        die(print_r(sqlsrv_errors(), true));
    }
    
?>










