<?php

	class Booglans{

		private $booglan;

		public function preposicoes($texto){

			$novoTexto = explode(" ", $texto); //transforma o texto recebido em um array
			$preposicao = array();
			
			$foo = array("r","t","c","d","b"); //define o array foo
			$l = 'l';

			//verifica se a palavra tem 5 letras
			//verifica se a palavra não possui a letra L
			//verifica se a ultima letra da palavra é diferente de alguma letra do array foo
			foreach ($novoTexto as $novo) {
				if(strlen($novo) == 5 && strpos($novo, $l) === false && !in_array(substr($novo, -1), $foo)){
						$preposicao[] = $novo; // adiciona a palavra que passou nos parametros para o array
					}
				
			}	
			return "Existem ".count($preposicao)." registros de preposição <br/>"; //retorna o valor do array
		}


		 public function verbos($texto){
		 	$novoTexto = explode(" ", $texto); //transforma o texto recebido em array
			$verbo = array();
			$primeiraPessoa = array();
			
			$foo = array("r","t","c","d","b"); //define o array foo
			$l = 'l';

			//verifica se a palavra tem 8 ou mais letras
			//verifica se a ultima letra da palavra é diferente de alguma letra do array foo
			foreach ($novoTexto as $novo) {
				if(strlen($novo) >= 8 && !in_array(substr($novo, -1), $foo)){
						$verbo[] = $novo;
					}
				
				//verifica se a palavra tem 8 ou mais letras
				//verifica se a primeira letra é diferente de alguma letra do array foo
				//verifica se a ultima letra da palavra é diferente de alguma letra do array foo
				if(strlen($novo) >= 8 && !in_array(substr($novo, 0, 1), $foo) && !in_array(substr($novo, -1), $foo)){
						$primeiraPessoa[] = $novo;
				}

			}	
			
			return "Existem ". count($verbo)." Verbos e ".count($primeiraPessoa)." verbos em primeira Pessoa <br/>";

		}
	 
		public function ordenarPalavras($texto){
		    $textoArray = explode ( ' ', $texto );
		    usort ( $textoArray, "cmp" );
		 
		    $i = 0;
		    while ( isset ( $textoArray [$i] ) ) {
		        echo $textoArray [$i]." ";
		        $i++;
	   		}
		}

	 
		public function numeroBonito($number){
        	return ($numero == 422224 && $numero % 3 == 0);
    	}



}