<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';
?>

<form action="./cartoes.php" method="post">
    <ul style="margin: 2cm;">
        <label for="txtNumero">Número do Cartão</label>
        <input type="text" name="txtNumero" id="txtNumero">
        <label for="txtVencimento">Vencimento</label>
        <input type="text" name="txtVencimento" id="txtVencimento">
        <label for="txtCodigo">Código de Segurança</label>
        <input type="text" name="txtCodigo" id="txtCodigo">
        <br>
        <br>
        <label for="txtNomet">Nome do titular</label>
        <input type="text" name="txtNomet" id="txtNoet">
        <label for="txtVencimento">CPF do titular</label>
        <input type="text" name="txtCPF" id="txtCPF">
        <label for="txtVencimento">Data de nascimento</label>
        <input type="text" name="txtData" id="txtData">
        <br>
        <input style="background-color: rgb(252,20,20); border: none; color: white; border-radius: 5px; margin: 1rem; height:1cm; width: 4cm;" type="submit" value="Cadastrar Cartão">
    </ul>
</form>

<?php

if (isset ( $_POST['txtNumero']) ) {;
    echo '<h5>Cartão cadastrado com sucesso!</h5>', '<h5>Em breve você receberá atualizações do seu pedido através do e-mail.</h5>';
}
?>

<?php
include_once './includes/_footer.php';
?>