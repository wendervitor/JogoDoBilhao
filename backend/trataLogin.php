
<?php
	ob_start();
	session_start();
	
	$name = $_POST["login"];
	$senha = $_POST["senha"];
	require './utils/functions.php';
	header("location: ../index.php");
	if(empty($senha) || empty($name)) header("location: ../index.php?id=0");
	else{
		$linhas=decodeuser();
		if(verificalogin($linhas,$name,$senha)==true){
			if(isset($_SESSION['user'])){
				header("location: ../pages/homepage.php");
			}else{
				$_SESSION['user'] = $name;
				setcookie("pontos", 0);
            	date_default_timezone_set('America/Sao_Paulo');
            	setcookie("data", date("d/m/Y"));
            	header("location: ../pages/homepage.php");
			}
		}
		else header("location: ../index.php?id=1");
	}

?>
