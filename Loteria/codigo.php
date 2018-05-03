<?php

   include 'sorteio.php';


    print("Informe o número para o jogo desejado:


          1- Mega-sena

          2- Lotofácil

          3- Quina

          4- Lotomania\n");


    $jogo = (int) fgets(STDIN);

    //verificar o numeros de dezenas de acordo com as regras de cada jogo
    print("Informe o número de dezenas: \n");
    $dezenas = (int) fgets(STDIN);

    print("Informe quantas apostas deseja gerar: \n");
    $apostas = (int) fgets(STDIN);

    if ($jogo == 1 and $dezenas >= 6 and $dezenas <= 15) {
    	
    	megasena($apostas, $dezenas);

    }elseif ($jogo == 2 and $dezenas >= 5 and $dezenas <= 15) {
 
      lotofacil($apostas, $dezenas);    	
 
    }elseif ($jogo == 3 and $dezenas >= 15 and $dezenas <= 18) {
    	 
     quina($apostas, $dezenas);

    }elseif ($jogo == 4 and $dezenas == 50 ) {
    	
    	lotomania($apostas, $dezenas);

   }else{

    	print("O número de jogo informado não existe \n");
   }


