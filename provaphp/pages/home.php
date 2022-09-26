<p class='home_name'>Para continuar, informe o seu nome:</p>

<form method="get">
<input type="text" name="nome">
<input type="submit">
</form>

<div class="resposta">
Seja bem-vindo
<?php
if (isset($_GET["nome"])) {
    echo $_GET["nome"];
}
?>
!
</div>