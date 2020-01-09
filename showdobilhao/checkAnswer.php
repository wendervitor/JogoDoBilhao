<?php
	ob_start();
	session_start();
	require 'page_layout/utils.php';
	$answer = $_GET['alternativa'];
	$idQuestion=$_GET['pergunta'];

	$questions = getQuestionsArray();
	$alternatives = getAlternativesArray();
	$answers = getAnswersArray();
	$idAnswered=getIdAnswered($alternatives[$idQuestion],$answer);
	if($idAnswered==$answers[$idQuestion]){
		echo "Acertou";
		//Verificar se o jogo nao acabou, setar cookie etc
		//pagina de gameover e vencedor
		$newid=$idQuestion+1;
		if(!isOver($newid,$questions)){
			$pontos = $_COOKIE["pontos"];
			if($newid>$pontos) setcookie('pontos',$newid);
			header("location: gameplay.php?id=$newid");
		}else{
			echo "GANHOU";
			if($newid>$pontos) setcookie('pontos',$newid);
			header("location: homepage.php");
		}
	}else{
		echo "Errou";

		header("location: homepage.php");
	}
?>