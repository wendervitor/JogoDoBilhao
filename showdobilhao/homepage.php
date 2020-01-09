<?php 
	ob_start();
	session_start();  
	if($_SESSION['user'] == null){
		header("location:index.php?id=2");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jogo do Bilhão</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header">
		<p class="exit"> <a class="btn" href="index.php?id=3">Sair</a></p>
		<?php include 'page_layout/header.inc';?>
	</div>

	<div class="container">
		<div >
			<button class="playbutton" onclick="location.href = 'gameplay.php?id=0' ;">Jogar</button> <br>
			<p class="points">Maior Pontuação: <?php echo $_COOKIE["pontos"]; ?> </p>
		</div>
	</div>
	<div class="footer">
		<?php include 'page_layout/footer.inc';?>
	</div>

</body>
</html>