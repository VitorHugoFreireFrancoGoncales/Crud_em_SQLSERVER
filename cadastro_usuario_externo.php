<!DOCTYPE html>
<html lang="pt_br">
<head>
<meta charset="UTF-8">
<title>Pagina Principal</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!--CSS / Icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        
</head>
<body>

<div class="container" style="width: 400px; margin-top: 40px">
<div style="text-align: right;">
<a href="index.php" role="button" class="btn btn-primary btn-sm">Voltar</a>
</div>
<h4>Cadastro de Usuário</h4>
<form action="_insert_usuario_externo.php" method="post">
    <div class="form-group">
        <label>Nome do Usuário</label>
        <input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">
    </div>

    <div class="form-group">
        <label>E-mail</label>
        <input type="email" name="mailusuario" class="form-control" required autocomplete="off" placeholder="Seu E-mail">
    </div>

    <div class="form-group">
        <label>Senha</label>
        <input id="senha" type="password" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Senha">
    </div>

    <div class="form-group">
        <label>repitir senha</label>
        <input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Repitir Senha" oninput="validaSenha(this)">
        <small>Precisa ser igual a senha digitada acima.</small>
    </div>

    <div style="text-align: right;">
    <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
    </div>

</form>

</div>
    <!-- Optional JavaScript -->
    <script src="./script/cadastro_usuario.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>