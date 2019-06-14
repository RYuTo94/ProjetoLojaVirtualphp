<?php

include_once "components/funcoes.php";

$contadorInputVazio = 0;
foreach ($_POST as $item) {
    $item == ""?$contadorInputVazio++:0;
}

$itensPost= is_array($_POST)?count($_POST):0;
if($contadorInputVazio == $itensPost){
    echo "<h1>Você não enviou nenhuma informação sobre o login</h1>";
    echo '<a class="btn btn-primary" href="login.php">Voltar para pagina de login/a>';
exit;
}

$usuarios = file_exists("json/Usuarios.json")?file_get_contents('json/Usuarios.json'):"";
$usuarios = json_decode($usuarios,true);

$email = $_POST['emailUsuario'];
$senha = $_POST['senhaUsuario'];

foreach($usuarios['usuarios'] as $chave => $usuario) {
    if ($usuario['email'] == $email){
        $usuarioExiste = $usuarios['usuarios'][$chave];
        break;
    }
}

if (isset($usuarioExiste) && password_verify($senha,$usuarioExiste['senha'])) {
    logarUsuario($usuarioExiste['nome'],$usuarioExiste['nivelAcesso']);
    header("Location:index.php");
} else {
    echo "Email ou senha inválida! Tente novamente!";
    echo '<a class="btn btn-primary" href="login.php">Voltar para pagina de login</a>';
}
