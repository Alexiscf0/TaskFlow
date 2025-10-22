<?php
    /*function fibonacci($n){

        if ($n <= 0){
            return 0;
        }
        if ($n > 1){
            return 1;
        }
       return fibonacci($n-1) + fibonacci($n-2);
        }
        echo fibonacci(10);*/

/* function Primos($n){
  if ($n%$n==0){
      echo "Este numero es primo. ".$n ;

  }
 }echo Primos(29);*/


/*function Palindromo ()
{
    $palabra=["s","o","m","e","t","e","m","o"];
        for ($i=0;$i<count($palabra);$i++){
            echo $palabra[$i];
            if ($palabra[0]==$palabra[8]&&$palabra[1]==$palabra[7]&&$palabra[2]==$palabra[6]&&$palabra[3]==$palabra[5]){
                echo "Es un palindromo";
            }else{
                echo "no es un palindromo";
            }
        }
}Palindromo();*/

function Bubblesort()
{
    $array = [4, 5, 8, 9, 22, 56, 33, 88];
        for ($i = 1; $i < count($array); $i++) {
            for ($j = 1; $j < count($array); $j++) {
                if ($array[$i][$j] > $array[$j + 1]) {
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }
        }
}Bubblesort();