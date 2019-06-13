<?php
    session_start();
    function logarUsuario($nome ,$nivelAcesso){
        $usuario = ["logado"=> true, "nome"=> $nome, "nivelAcesso" => $nivelAcesso];
        $_SESSION['usuario'] = $usuario;
    }

    function addProduto($nome, $descricao, $preco, $img){
        $jsonProdutos = file_get_contents('Produtos.json');
        $produtos = json_decode($jsonProdutos, true);
        //$produtos = $produtos['Produtos'];

        $chave = count($produtos['Produtos']) + 1;
        $novoProduto = ["id" => "produto$chave", 'nome' => $nome, 'descricao' => $descricao, 'preco' => $preco, 'img' => $img];
        
        $produtos["Produtos"][] = $novoProduto;

        $jsonProdutos= json_encode($produtos);

        file_put_contents('Produtos.json', $jsonProdutos);

        return true;
    }

    function validarNome($nome){
        return $nome != "" && strlen($nome) >= 3;
    }

    function validarCPF($cpf){
        return strlen($cpf) == 11;
    }

    function validarCartao($numCartao){
        return strlen($numCartao) == 16;
    }

    function validarDataVal($dataValidade){
        return $dataValidade > date('y-m-d');
    }

    function validarCVV($cvv){
        return strlen($cvv) == 3;
    }

    function addUsuario($nomeUsuario, $emailUsuario, $senhaUsuario, $nivelAcesso){
        $jsonUsuarios = file_exists("json/Usuarios.json")?file_get_contents('json/Usuarios.json'):"";
        $usuarios = json_decode($jsonUsuarios, true);
        $itensUsuarios = is_array($usuarios['usuarios'])?count($usuarios['usuarios']):0;
        $chave = $itensUsuarios + 1;
        $novoUsuario = ["id" => "usuario$chave", 'nome' => $nomeUsuario, 'email' => $emailUsuario, 'senha' => $senhaUsuario, 'nivelAcesso' => $nivelAcesso];
        
        $usuarios["usuarios"][] = $novoUsuario;

        $jsonUsuarios= json_encode($usuarios);

        return file_put_contents('Usuarios.json', $jsonUsuarios);;
    }