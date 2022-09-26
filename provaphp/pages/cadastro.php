<div id="pg_cadastro"><p>Cadastre-se</p></div>
<div class="cadastro">
    <form method="get">
        <input type="hidden" name="p" value="cadastro">
        <label>Nome:</label>
        <input type="text" name="nome"><br>
        <label>E-mail:</label>
        <input type="text" name="email"><br>
        <label>Telefone:</label>
        <input type="text" name="telefone"><br>
        <label>Endereço:</label>
        <input type="text" name="endereço"><br>
        <label>CPF:</label>
        <input type="text" name="CPF"><br>
        <label>País:</label>
        <input type="text" name="pais"><br>
        <label>Cidade e Estado:</label>
        <input type="text" name="cep"><br>
        <input type="submit">
    </form>
</div>
<?php

if(isset($_GET["nome"])){

    echo "<hr> Nome: ".$_GET["nome"]."<br>";
    echo "E-mail: ".$_GET["email"]."<br>";
    echo "Telefone: ".$_GET["telefone"]."<br>";
    echo "Endereço: ".$_GET["endereço"]."<br>";
    echo "CPF: ".$_GET["CPF"]."<br>";
    echo "País: ".$_GET["pais"]."<br>";
    echo "Cidade e Estado: ".$_GET["cep"]."<br>";

    if ($_GET["nome"] == ""){
        echo "<br><br>Preencha o Nome <br>";
    }
    if($_GET["telefone"] == ""){
        echo "Preencha o Telefone <br>";
    }
    if($_GET["endereço"] == ""){
        echo "Preencha o Endereço <br>";
    }
    if($_GET["CPF"] == ""){
        echo "Preencha o CPF <br>";
    }
    if($_GET["email"] == ""){
        echo "Preencha o E-mail <br>";
    }
    if($_GET["pais"] == ""){
        echo "Preencha o País <br>";
    }
    if($_GET["cep"] == ""){
        echo "Preencha a Cidade e Estado <br>";
    }
    
}


?>