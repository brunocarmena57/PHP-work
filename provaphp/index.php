<!doctype html>
<html lang="pt-br">
<style><?php include 'C:\xampp\htdocs\provaphp\style.css'?> </style>
<head>
	<meta charset="UTF-8">
	<title>
	<?php
	isset($_GET["p"])? $titulo = $_GET["p"]: $titulo = "home";

	if ($titulo == "home"){
		echo "Titulo Home";
	}elseif($titulo == "sobreNos"){
		echo "Titulo Sobre Nos";
	}elseif($titulo == "cadastro"){
		echo "Titulo Cadastro";
	}elseif($titulo == "orcamento"){
		echo "Titulo Orçamento";
	}elseif($titulo == "jogo"){
		echo "Titulo Jogue!";
	}elseif($titulo == "idade"){
		echo "Titulo Idade!";
	}else{
		echo "Tilulo ERRO";
	}


	?>
	</title>
</head>
<body>

<div id="box">
<?php
	require_once("./header.php");
	if(isset($_GET["p"])){
		$page = $_GET["p"];
	}else{
		$page = "home";
	}

	switch($page){
		case "home":
			require_once("./pages/home.php");
		break;
		case "sobreNos":
			require_once("./pages/sobreNos.php");
		break;
		case "cadastro":
			require_once("./pages/cadastro.php");
		break;
		default:
			require_once("./pages/error404.php");
		break;
		case "orcamento":
			include_once("./pages/orcamento.php");
		break;
		case "jogo":
			include_once("./pages/jogo.php");
		break;
		case "idade":
			include_once("./pages/idade.php");
			break;
	}

	require_once("./footer.php");
?>
</div>
</body>



</html>