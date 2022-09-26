<p class="orcamento-title">Faça um orçamento!</p>

<div class="orcamento">
    <form method="get">
        <input type="hidden" name="p" value="orcamento">
        <label>Nome:</label>
        <input type="text" name="nome"><br>
        <label>Renda:</label>
        <select name="renda" id="renda1">
            <option value="Até R$1.200,00">Até R$1.200</option>
            <option value="Até R$2999">Desde R$1.200 até R$2.999</option>
            <option value="Até R$4500">Desde R$3.000 até R$4.500</option>
            <option value="Até R$9999">Desde R$4.500 até R$9.999</option>
            <option value="Mais R$1000">Mais de R$10.000</option>
        </select><br>
        <label>Primeiros 8 digitos do cartão de crédito:</label>
        <input type="text" name="credito1"><br>
        <label>Últimos 8 digitos do cartão de crédito:</label>
        <input type="text" name="credito2"><br>
        <label>Data de vencimento do cartão:</label>
        <input type="text" name="vcto"><br>
        <label>Três dígitos de segurança do cartão:</label>
        <input type="text" name="seguranca"><br>
        <input type="submit">
    </form>
</div>

<?php
if(isset($_GET["nome"])){

    echo "<hr> Nome: ".$_GET["nome"]."<br>";
    echo "Primeiros 8 dígitos: ".$_GET["credito1"]."<br>";
    echo "Últimos 8 dígitos: ".$_GET["credito2"]."<br>";
    echo "Vencimento: ".$_GET["vcto"]."<br>";
    echo "Dígitos de Segurança: ".$_GET["seguranca"]."<br>";

    if ($_GET["nome"] == ""){
        echo "<br><br>Preencha o Nome <br>";
    }
    if($_GET["credito1"] == ""){
        echo "Preencha os primeiros 8 dígitos <br>";
    }
    if($_GET["credito2"] == ""){
        echo "Preencha os últimos 8 dígitos <br>";
    }
    if($_GET["vcto"] == ""){
        echo "Preencha a Data de Vencimento <br>";
    }
    if($_GET["seguranca"] == ""){
        echo "Preencha os Dígitos de Segurança <br>";
    }
    
}

?>