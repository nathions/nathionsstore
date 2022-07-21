<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
?>

<h1>ESCOLHA O MÉTODO DE PAGAMENTO</h1>

<ul>
    <li>
        <a href="pix.php"><img style="height: 5rem; margin: 2rem;" src="./content/pix.png"></a>
        <a href="pix.php">
            <h3 style="color: black;">PAGAR COM PIX</h3>
        </a>
    </li>
    <li>
        <a href="cartoes.php"><img style="height: 200px; margin: 1rem;" src="./content/debito.webp"></a>
        <a href="cartoes.php">
            <h3 style="color: black;">PAGAR COM CARTÃO DE DÉBITO</h3>
        </a>
    </li>
    <li>
        <a href="cartoes.php"><img style="height: 200px; margin: 1rem;" src="./content/credito.png"></a>
        <a href="cartoes.php">
            <h3 style="color: black;">PAGAR COM CARTÃO DE CRÉDITO</h3>
        </a>
    </li>
</ul>

<?php
include_once './includes/_footer.php';
?>