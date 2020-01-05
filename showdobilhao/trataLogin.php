<!DOCTYPE html>
<html>
<head>
	<title>Jogo do Bilhão</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header">
		<?php include 'page_layout/header.inc';?>
	</div>
	<div>
		<?php
			ob_start();
    		session_start();
			$name = $_POST["login"];
			$senha = $_POST["senha"];
			require 'page_layout/utils.php';
			if(empty($senha) || empty($name)) header("location: index.php?id=0");
			else{
				$linhas=decodeuser();
				if(verificalogin($linhas,$name,$senha)==true){
					if(isset($_SESSION['user'])){
						header("location: homepage.php");
					}else{
						$_SESSION['user'] = $name;
						setcookie("pontos", 0);
                    	date_default_timezone_set('America/Sao_Paulo');
                    	setcookie("data", date("d/m/Y"));
                    	header("location: homepage.php");
					}
				}
				else header("location: index.php?id=1");
			}

		?>
	</div>
	<div class="footer">
		<?php include 'page_layout/footer.inc';?>
	</div>

</body>
</html>