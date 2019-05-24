<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php 
        // echo "<h1>Olá Mundo!</h1>";
        // echo "Rodrigo";
        $nome = "Rodrigo";
        
        if ($nome =="Rodrigo"){
            var_dump($nome ."<br>");
        }else{
            echo "Não é o Rodrigo"."<br>";
        }

        for($i=0; $i<5; $i++){
            echo "Olá $nome!!!" ."<br>";
        }
    ?>
    
</body>
</html>