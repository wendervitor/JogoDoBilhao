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
		/*
		$newid=$idQuestion+1;
		setcookie("pontos",$newid);
		echo $_COOKIE['pontos'];*/
		//header("location: gameplay.php?id=$newid");
	}else{
		echo "Errou";
	}
?>