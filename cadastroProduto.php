<!DOCTYPE html>
<html lang="en">
<?php include_once "components/head.php"; ?>
<body>
<?php include_once "components/header.php"; ?>
<main class="container">
    <section class="row justify-content-center">
        <div class="col-md-6">
            <form action="salvarProduto.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" id="nomeProduto" aria-describedby="emailHelp" placeholder="Nome do Produto" name="nomeProduto">
                </div>
                <div class="form-group">
                    <label for="precoProduto">Preço do Produto</label>
                    <input type="number" step="any" class="form-control" id="precoProduto" placeholder="Preço do Produto" name="precoProduto">
                </div>
                <div class="form-group">
                    <label for="descProduto">Descrição do Produto</label>
                    <textarea name="descProduto" id="descProduto" class="form-control"></textarea>
                </div>
                <div class="form-group">
                <label for="imgProduto">Imagem do Produto</label>
                <input type="file" name="arquivo" id="imgProduto">
                </div>
                <button class="btn btn-success"type="submit">Finalizar Cadastro</button>
        </div>
    </section>
</main>

</form>
</body>
</html>