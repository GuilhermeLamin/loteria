<?php


     function megasena($apostas, $dezenas){



     	    for ($i=0; $i < $apostas; $i++) { 
     	    	
     	    	for ($i=0; $i < $dezenas ; $i++) { 
     	    		
     	    		$sorteadas = rand(1, 25);
     	    	}

     	    }

     	    $valor = $apostas*$dezenas*2.50;


     	    print("As dezenas sorteadas foram: ".$sorteadas." e o valor total do jogo é:".$valor."/n");

     }


     function lotofacil($apostas, $dezenas){



     	    for ($i=0; $i < $apostas; $i++) { 
     	    	
     	    	for ($i=0; $i < $dezenas ; $i++) { 
     	    		
     	    		$sorteadas[] = rand(1,25);
     	    	}

     	    }

     	    $valor = $apostas*$dezenas*1.50;


     	    print("As dezenas sorteadas foram: ".$sorteadas." e o valor total do jogo é:");
     }


     function quina($apostas, $dezenas){



     	    for ($i=0; $i < $apostas; $i++) { 
     	    	
     	    	for ($i=0; $i < $dezenas ; $i++) { 
     	    		
     	    		$sorteadas[] = rand(1,80);
     	    	}

     	    }

     	    $valor = $apostas*$dezenas*2.50;

     	    print("As dezenas sorteadas foram: ".$sorteadas." e o valor total do jogo é:");
     }

     function lotomania($apostas, $dezenas){



     	    for ($i=0; $i < $apostas; $i++) { 
     	    	
     	    	for ($i=0; $i < $dezenas ; $i++) { 
     	    		
     	    		$sorteadas[] = rand(1,100);
     	    	}

     	    }

     	    $valor = $apostas*$dezenas*1.50;

     	    print("As dezenas sorteadas foram: ".$sorteadas." e o valor total do jogo é:");
     }