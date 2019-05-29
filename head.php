<?php
include "funcoes.php";
    
    $usuario = logarUsuario("Rodrigo Toguti", 1);
    //$usuario = "";

    $produtos = [
        "produto1"=> ["nome" => "Curso Fullstack", "descricao" => "O curso fullstack ensina programação", "preco" => 1200, "img" =>"img/img1.jpg"],
        "produto2"=> ["nome" => "Curso Mobile Android", "descricao" => "O curso te ensina a criar apps", "preco" => 1400, "img" => "img/img2.jpg"],
        "produto3"=> ["nome" => "Curso Marketing Digital", "descricao" => "O curso te ensina marketing digital", "preco" => 1300, "img" => "img/img3.jpg"],
        "produto4"=> ["nome" => "Curso Mobile Android", "descricao" => "O curso te ensina a criar apps", "preco" => 1400, "img" => "img/img2.jpg"]
    ];

    $produtos = addProduto("Curso de UX", "Curso incrível", 2000, 'img/img4.jpg', $produtos);
    $produtos = addProduto("Curso de Data Analytics", "Curso incrível", 3000, 'img/img5.jpg', $produtos);

    $categorias = ["Cursos", "Tutoriais", "Artigos", "Fórum", "Códigos"];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja Virtual</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>