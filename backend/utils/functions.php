<?php

    function decodeuser(){
	    $arquivo = fopen("../assets/data/usuarios.json","r");
	    $linhas = "";

	    while(!feof($arquivo)){
	        $linhas .= fgets($arquivo);
	    }

	    $linhasdecode = json_decode($linhas);
	    fclose($arquivo);
	    return $linhasdecode;
	}
	
    function verificalogin($decodefile,$login,$senha){
    	foreach ($decodefile as $key) {
    		if($key->login == $login && $key->senha==$senha)return true;
    	}
    }

    function decodequestions(){
    	$file = fopen("../assets/data/perguntas.json", "r");
    	$linhas = "";

    	while (!feof($file)) {
    		$linhas .= fgets($file);
    	}

    	$linhasdecode = json_decode($linhas);
    	fclose($file);
    	return $linhasdecode;
    }

    function getQuestionsArray(){
		$aux = decodequestions();
		$questions = [];
		foreach ($aux as $key) {
			array_push($questions, $key->question);
		}
		return $questions;
    }

    function getAlternativesArray(){
		$aux = decodequestions();
		$alternatives = [];
		foreach ($aux as $key) {
			array_push($alternatives, $key->alternatives);
		}
		return $alternatives;
    }
	
    function getAnswersArray(){
		$aux = decodequestions();
		$answers = [];
		foreach ($aux as $key) {
			array_push($answers, $key->answer);
		}
		return $answers;
    }

    function getIdAnswered($question,$answer){
		for ($i = 0; $i<4; $i++){
		if(strcmp($question[$i], $answer) == 0)
			return $i;
		}
		return -1;
    }
    
    function isOver($id,$questions){
    	if($id>(count($questions)-1)) return 1;
    	else return 0;
	}
	
?>