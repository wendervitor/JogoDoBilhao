<?php 
	ob_start();
	session_start();
	require 'page_layout/utils.php';
	if($_SESSION['user'] == null){
		header("location:index.php?id=2");
	}
	$id=$_GET["id"];
	$questions = getQuestionsArray();
	$alternatives = getAlternativesArray();
	$answers = getAnswersArray();

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

	<div >
		<div class="pergunta">
			<h1><?php echo $questions[$id]; ?></h1>
		</div>
		<div class="alternativas">
			<div>
				<form action="checkAnswer.php" method="GET">
					<?php 
						echo "<input type=\"hidden\" name=\"pergunta\" value=\"$id\">";
						for($i=0;$i<4;$i++) {
							$alt = $alternatives[$id][$i];
							echo "<div class=\"option\">"."<p>".($i+1)."</p>"."</div>"."<input class=\"alternativa\" type=\"submit\" name=\"alternativa\" value=\"$alt\" >"."<br>";
						}
					?>
				</form>

			</div>
			<div class="estado-atual">
				<h2>Pontuação: <?php echo $id;?></h2>
			</div>			
		</div>

	</div>
	<div class="footer"><?php include 'page_layout/footer.inc';?> </div>
</body>
</html>