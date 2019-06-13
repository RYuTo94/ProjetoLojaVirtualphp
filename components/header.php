<header class="bg-light">
<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Cursos</a>
        <?php if(isset($usuario) && $usuario !="" && $usuario['logado']): ?>
            <a class="nav-link" href="#">Olá <?php echo $usuario['nome']; ?></a>
        <?php else: ?> <!-- Else do if logado existente -->
            <a class="nav-link" href="login.php">Login </a>
        <?php endif; ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php if(isset($usuario) && $usuario !="" && $usuario['logado']): ?>
                    <?php if($usuario['nivelAcesso'] == 0): ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Ações <span class="sr-only">(current)</span></a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Perfil <span class="sr-only">(current)</span></a>
                        </li>
                    <?php endif; ?>  
                <?php endif; ?>                        
            </ul>
            <ul class="navbar-nav navbar-right" >
                <?php foreach($categorias as $categoria): ?>
                    <li class="nav-link"><?=$categoria?></li>
                <?php endforeach; ?>
            </ul>
        </div>
</div>
</header>