<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';


if (isset($_POST['txtNome'])) {
    $nome = strtoupper($_POST['txtNome']);
}
if (isset($_POST['txtemail'])) {
    $email = ($_POST['txtemail']);
}
if (isset($_POST['txtcel'])) {
    $telefone = strtoupper($_POST['txtcel']);
}
if (isset($_POST['txtmsg'])) {
    $mensagem = ($_POST['txtmsg']);
}
?>

<h1>Cadastro</h1>

<form action="./cadastro.php" method="post">
    <div class="areaCadastro">
        <div class="col-md-4">
            <label for="f_nome"></label>
            <input id="f_nome" type="text" name="f_nome" placeholder="NOME" required="" class="" autocomplete="off" style="width: 230px;">
        </div>
        <div class="col-md-4">
            <label for="f_sobrenome"></label>
            <input id="f_sobrenome" type="text" name="f_nome" placeholder="SOBRENOME" required="" class="" autocomplete="off" style="width: 230px;">
        </div>
        <div class="col-md-4">
            <label for="f_nascimento"></label>
            <input id="f_nascimento" type="text" name="f_nascimento" placeholder="DATA DE NASCIMENTO" required="" class="" autocomplete="off" style="width: 230px;">
        </div>
        <div class="col-md-4">
            <label for="cpf"></label>
            <input id="cpf" type="text" name="cpf" placeholder="CPF" required="" class="" autocomplete="off" style="width: 230px;">
        </div>
        <div class="col-md-4">
            <label for="celular"></label>
            <input id="celular" type="text" name="celular" placeholder="CELULAR" required="" class="" autocomplete="off" style="width: 230px;">
        </div>
        <div class="col-md-4">
            <label for="email"></label>
            <input id="email" type="text" name="email" placeholder="E-MAIL" required="" class="" autocomplete="off" style="width: 230px;">
        </div>
        <div class="col-md-4">
            <label for="senha"></label>
            <input id="senha" type="text" name="senha" placeholder="SENHA" required="" class="" autocomplete="off" style="width: 230px;">
        </div>
        <div class="col-md-4">
            <label for="senhan"></label>
            <input id="senhan" type="text" name="senha" placeholder="DIGITE NOVAMENTE A SENHA" required="" class="" autocomplete="off" style="width: 230px;">
        </div>
        </br>
        <a href="pagamento.php">
        <input type="submit" value="Cadastrar">
        </a>
        
    </div>

</form>

<?php
include_once './includes/_footer.php';
?>