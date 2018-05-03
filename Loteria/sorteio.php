<?php


function megasena($apostas, $dezenas){

     for ($i=1; $i <= $apostas ; $i++) { 

       $sorteados = [];

       for ($j=0; $j < $dezenas ; $j++) { 

             //validacao
            do {
               $x = rand(1, 60);
          } while (in_array($x, $sorteados));

          $sorteados[] = $x;
     }

     sort($sorteados);

     $resultado = implode(",", $sorteados);


     echo "Sorteio número $i: \n";
     print("As dezenas sorteadas foram:".$resultado." e o valor total foi de: \n");

  }


}


function lotofacil($apostas, $dezenas){


    for ($i=1; $i <= $apostas ; $i++) { 

       $sorteados = [];

       for ($j=0; $j < $dezenas ; $j++) { 

             //validacao
            do {
               $x = rand(1, 25);
          } while (in_array($x, $sorteados));

          $sorteados[] = $x;
     }

     sort($sorteados);

     $resultado = implode(",", $sorteados);


     echo "Sorteio número $i: \n";
     print("As dezenas sorteadas foram:".$resultado." e o valor total foi de: \n");

  }


}

function quina($apostas, $dezenas){

     for ($i=1; $i <= $apostas ; $i++) { 

       $sorteados = [];

       for ($j=0; $j < $dezenas ; $j++) { 

             //validacao
            do {
               $x = rand(1, 80);
          } while (in_array($x, $sorteados));

          $sorteados[] = $x;
     }

     sort($sorteados);

     $resultado = implode(",", $sorteados);


     echo "Sorteio número $i: \n";
     print("As dezenas sorteadas foram:".$resultado." e o valor total foi de: \n");

  }


}


function lotomania($apostas, $dezenas){



     for ($i=1; $i <= $apostas ; $i++) { 

       $sorteados = [];

       for ($j=0; $j < $dezenas ; $j++) { 

             //validacao
            do {
               $x = rand(1, 100);
          } while (in_array($x, $sorteados));

          $sorteados[] = $x;
     }

     sort($sorteados);

     $resultado = implode(",", $sorteados);


     echo "Sorteio número $i: \n";
     print("As dezenas sorteadas foram:".$resultado." e o valor total foi de: \n");

  }


}