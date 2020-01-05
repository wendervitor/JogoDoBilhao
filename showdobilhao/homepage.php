<?php ob_start(); ?>
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
	<div class="container">
		<div class="play">
			<input type="submit" value="Jogar"><br>
		</div>
		<div class="leaderboard">
			<h1>Leaderboard</h1>
			<table>
				<tr>
					<th>Rank</th>
					<th>Nome</th>
					<th>Total</th>
				</tr>
			</table>
		</div>
		<?php 
			session_start();
			//if($_SESSION['user'] != null) echo $_SESSION['user'];
			//else header("location: index.php");
		?>

	</div>
	<div class="footer">
		<?php include 'page_layout/footer.inc';?>
	</div>

</body>
</html>