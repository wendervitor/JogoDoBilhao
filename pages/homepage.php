<?php
ob_start();
session_start();
if ($_SESSION['user'] == null) {
	header("location: ../index.php?id=2");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Jogo do Bilhão</title>
	<link rel="stylesheet" type="text/css" href="../style/homepage.css">
	<link rel="stylesheet" type="text/css" href="../style/global.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<p class="exit"> <a class="btn" href="./login.php?id=3">Sair</a></p>
	<?php include '../page_layout/header.inc'; ?>

	<div class="main">
		<button class="playbutton" onclick="location.href = './gameplay.php?id=0' ;">Jogar</button> <br>
		<!-- <p class="points">Maior Pontuação: <?php /*echo $_COOKIE["pontos"];*/ ?> </p> -->
	</div>

	<?php include '../page_layout/footer.inc'; ?>

</body>

</html>