<?php

include_once "components/funcoes.php";

$contadorInputVazio = 0;
foreach ($_POST as $item) {
    $item == ""?$contadorInputVazio++:0;
}

$itensPost= is_array($_POST)?count($_POST):0;
if($contadorInputVazio == $itensPost){
    echo "<h1>Você não enviou nenhuma informação sobre o usuário</h1>";
    echo '<a class="btn btn-primary" href="cadastroUsuario.php">Voltar para pagina de cadastro</a>';
exit;
}

$nomeUsuario = $_POST['nomeUsuario'];
$emailUsuario = $_POST['emailUsuario'];
$senhaUsuario = password_hash($_POST['senhaUsuario'],PASSWORD_DEFAULT);
$nivelDeAcesso = $_POST['nivelUsuario'];

if(addUsuario($nomeUsuario,$emailUsuario,$senhaUsuario,$nivelDeAcesso)){
    echo '<h1>Usuário cadastrado com sucesso!</h1>';
    echo '<a class="btn btn-primary" href="login.php">Ir para pagina de login</a>';
} else {
    echo '<h1>Verifique sua informações! Tente novamente!</h1>';
    echo '<a class="btn btn-primary" href="cadastroUsuario.php">Voltar para pagina de cadastro</a>';
}