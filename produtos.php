<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
?>

<div class="container">
    <h2 style="margin-top: 1cm ;">PRODUTOS</h2>

    <div class="row mt-5">
        <?php
        foreach ($produtos as $key => $value) {
        ?>

            <div class="card m-3" style="width: 15rem;">
                <img src="./content/<?php echo $value['imagem']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <b>
                        <p class="card-title"><?php echo $value['nome']; ?></p>
                    </b>
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