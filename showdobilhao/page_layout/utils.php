<?php
	
	/**
	* Users classe
	*/
	class User{
		var $nome;
		var $email;
		var $login;
		var $senha;
		function __construct($nome,$email,$login,$senha)
		{
			$this->nome = $nome;
			$this->email = $email;
            $this->login = $login;
            $this->senha = $senha;
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

?>