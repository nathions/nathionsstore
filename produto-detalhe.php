<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';


$id = $_GET['id'];
?>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1><?php echo $produtos[$id]['nome'];?></h1>
                <img src="./content/<?php echo $produtos[$id]['imagem']?>">
                <h3><?php echo $produtos[$id]['preco']?></h3>
                <p><?php echo $produtos[$id]['descricao']?></p>
            </div>
        </div>
        
            <div class="row">
            <div class="col">
                <a style="background-color: rgb(252,20,20); border: none;" href="index.php" class="btn btn-primary">Voltar</a>
            </div>
            <div class="col">
                <a style="background-color: rgb(252,20,20); border: none;" href="cadastro.php" class="btn btn-primary">Comprar</a>
            </div>
            </div>
        </div>
    </div>

<?php
include_once './includes/_footer.php';
?>