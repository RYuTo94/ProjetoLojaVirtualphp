<!DOCTYPE html>
<html lang="en">
<?php include_once "components/head.php"; ?>
<body>
<?php include_once "components/header.php"; ?>
<main class="container">
    <section class="row justify-content-center">
        <div class="col-md-6">
            <form action="logarUsuario.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="emailUsuario">Email:</label>
                    <input type="email" class="form-control" id="emailUsuario" placeholder="email@example.com" name="emailUsuario">
                </div>
                <div class="form-group">
                    <label for="senhaUsuario">Senha:</label>
                    <input type="password" class ="form-control" id="senhaUsuario" placeholder="Senha" name="senhaUsuario">
                </div>
                <div class="form-inline justify-content-end">
                    <div class="mr-2">
                    <a class="btn btn-primary" href="cadastroUsuario.php">Cadastre-se</a>
                    </div>
                    <button class="btn btn-success"type="submit">Login</button>
                </div>
                    
        </div>
    </section>
</main>

</form>
</body>
</html>