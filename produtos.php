<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
?>

<div class="container">
<h2>Produtos</h2>

    <div class="row mt-5">
<?php
    foreach ($produtos as $key => $value) {
?>

    <div class="card m-3" style="width: 18rem;">
        <img src="./content/<?php echo $value['imagem'];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $value['nome'];?></h5>
            <a style="background-color: rgb(252,20,20); border: none;" href="produto-detalhe.php?id=<?php echo $key;?>" class="btn btn-primary">Comprar</a>
        </div>
    </div>

    <?php
    }
    ?>

</div>
</div>
    
<?php
include_once './includes/_footer.php';
?>