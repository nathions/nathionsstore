<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
?>
<div class="container">
    <h2>MAIS VENDIDOS</h2>

    <div  class="row mt-3">
        <?php


        for ($i = 0; $i < 6; $i++) {
        ?>

            <div class="card m-3" style="width: 18rem; height: 30rem;">
                <img style="widht: 50px; height: 250px;" src="./content/<?php echo $produtos[$i]['imagem'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produtos[$i]['nome'] ?></h5>
                </div>
                <div>
                    <a style="background-color: rgb(252,20,20); border: none; margin: 5px;" href="produto-detalhe.php?id=<?php echo $i; ?>" class="btn btn-primary">Comprar</a>
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