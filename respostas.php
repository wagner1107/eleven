<?php
	
	require 'classes/booglans.class.php';

	$t = new Booglans();
	$array = array();


    echo "Questão dos números Booglans não consegui realizar com os conhecimentos adquiridos";

	echo "<hr/>";


	if(isset($_POST['textoa']) && !empty($_POST['textoa']) && isset($_POST['textob']) && !empty($_POST['textob']) ){
		$textoa = addslashes($_POST['textoa']);
		$textob = addslashes($_POST['textob']);

		echo "Respostas TEXTO A <br/>";
		echo $t->preposicoes($textoa);
		echo $t->verbos($textoa);
		echo "<hr/>";

		echo "Respostas TEXTO B <br/>";
		
		echo $t->preposicoes($textob);
		echo $t->verbos($textob);

		echo "<hr/>";

		echo "ORDENANDO TEXTO A <br/>";

		$textoOrdenadoA = $t->ordenarPalavras($textoa);
		echo "<hr/>";

		echo "ORDENANDO TEXTO B <br/>";
		$textoOrdenadoB = $t->ordenarPalavras($textob);
	}


	
	function cmp ( $palavra_1, $palavra_2) {
    $alfabeto = "twhzkdfvcjxlrnqmgpsb";

    if ( $palavra_1 === $palavra_2 ) {
        return 0;
    }

    $alfabetoValores = str_split ( $alfabeto ); // transforma em array o alfabeto
    $alfabetoValores = array_flip ( $alfabetoValores ); // altera chave e valor

    $palavra_1 = str_split ( $palavra_1 );
    $palavra_2 = str_split ( $palavra_2 );

    $i = 0;
    while ( isset ( $palavra_1 [$i] ) && isset ( $palavra_2 [$i] ) ) {
        $letra_1 = $palavra_1 [$i];
        $letra_2 = $palavra_2 [$i];

        if ( $alfabetoValores [$letra_1] < $alfabetoValores [$letra_2] ) {
            return -1; //palavra_1 vem antes;
        }
        if ( $alfabetoValores [$letra_1] > $alfabetoValores [$letra_2] ) {
            return 1; //palavra_1 vem depois;
        }
        // Se passou pelos dois "if" é sinal que letra_1 e letra_2 são iguais
        $i++;
    };
    // Se saiu do loop, é sinal de que as letras são iguais até a última letra da menor palavra.
    // Agora podemos concluir qual palavra vem antes baseados apenas no tamanho das palavras:
    return ( count ( $palavra_1 ) < count ( $palavra_2 ) ? -1 : 1 );
    }
	


?>