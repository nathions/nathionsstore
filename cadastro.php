<?php
include_once './includes/_head.php';
include_once './includes/_header.php';
include_once './includes/_dados.php';

?>

<h1>Cadastro</h1>

<form action="./cadastro.php" method="post">
    <div class="areaCadastro">
        <div class="col-md-4">
            <input id="f_nome" type="text" name="f_nome" placeholder="NOME" required style="width: 230px; margin: 10px 0;">
        </div>
        <div class="col-md-4">
            <input id="f_sobrenome" type="text" name="f_nome" placeholder="SOBRENOME" required style="width: 230px; margin: 10px 0;">
        </div>
        <div class="col-md-4">
            <input id="f_nascimento" type="text" name="f_nascimento" placeholder="DATA DE NASCIMENTO" required style="width: 230px; margin: 10px 0;">
        </div>
        <div class="col-md-4">         
            <input id="cpf" type="text" name="cpf" placeholder="CPF" required style="width: 230px; margin: 10px 0;">
        </div>
        <div class="col-md-4">          
            <input id="celular" type="text" name="celular" placeholder="CELULAR" required style="width: 230px; margin: 10px 0;">
        </div>
        <div class="col-md-4">       
            <input id="email" type="text" name="email" placeholder="E-MAIL" required style="width: 230px; margin: 10px 0;">
        </div>
        <div class="col-md-4">        
            <input id="senha" type="text" name="senha" placeholder="SENHA" required style="width: 230px; margin: 10px 0;">
        </div>
        <div class="col-md-4">       
            <input id="senhan" type="text" name="senhan" placeholder="DIGITE NOVAMENTE A SENHA" required style="width: 230px; margin: 10px 0;">
        </div>
        
        <a href="pagamento.php">
        <input type="button" value="Cadastrar" required>
        </a>
        
    </div>

</form>

<?php
include_once './includes/_footer.php';
?>