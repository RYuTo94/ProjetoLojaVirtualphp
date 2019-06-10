<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>
<body>
<?php include_once "header.php"; ?>
<main class="container">
    <section class="row justify-content-center">
        <div class="col-md-6">
            <form action="salvarUsuario.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nomeUsuario">Nome do Usuário</label>
                    <input type="text" class="form-control" id="nomeUsuario" placeholder="Nome do Usuário" name="nomeUsuario">
                </div>
                <div class="form-group">
                    <label for="emailUsuario">Email do Usuário</label>
                    <input type="email" class="form-control" id="emailUsuario" placeholder="email@example.com" name="emailUsuario">
                </div>
                <div class="form-group">
                    <label for="senhaUsuario">Senha</label>
                    <input type="password" class ="form-control" id="senhaUsuario" placeholder="Senha" name="senhaUsuario">
                </div>
                <div class="form-group">
                    <label for="nivelUsuario">Nível de Acesso</label>
                    <select class="form-control" id="nivelUsuario" name="nivelUsuario">
                    <option selected disabled> Selecione o nível!</option>
                    <option value="0">Administrador</option>
                    <option value="1">Usuário</option>
                    </select>
                </div>
                <button class="btn btn-success"type="submit">Finalizar Cadastro</button>
        </div>
    </section>
</main>

</form>
</body>
</html>