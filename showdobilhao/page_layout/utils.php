<?php
	
	/**
	* Users classe
	*/
	class User{
		var $nome;
		var $email;
		var $login;
		var $senha;
		function __construct($nome,$email,$login,$senha){
			$this->nome = $nome;
			$this->email = $email;
            $this->login = $login;
            $this->senha = $senha;
		}
	}
	/**
	* Questions class
	*/
	class questions{

		var $question;
		var $alternatives;
		var $answer;
		
		function __construct($question,$alternatives,$answer){
			$this->question = $question;
			$this->alternatives = $alternatives;
			$this->answer = $answer;
		}
	}

    function decodeuser(){
	    $arquivo = fopen("assets/data/usuarios.json","r");
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
    	$file = fopen("assets/data/perguntas.json", "r");
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
    

?>