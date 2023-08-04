<?php

/*
 * Escribe un programa que muestre por consola (con un print) los
 * números de 1 a 100 (ambos incluidos y con un salto de línea entre
 * cada impresión), sustituyendo los siguientes:
 * - Múltiplos de 3 por la palabra "fizz".
 * - Múltiplos de 5 por la palabra "buzz".
 * - Múltiplos de 3 y de 5 a la vez por la palabra "fizzbuzz".
 */

 /*
//  Forma Facil

 for($numero=1;$numero<=100;$numero++)
 {
    if($numero%3==0 and $numero%5==0)
    {
        echo "fizzbuzz";
    }
    else
    {
        if($numero%3==0)
            echo "fizz";
        
        if($numero%5==0) 
            echo "buzz";
        
        if($numero%3!=0 and $numero%5!=0)
        echo $numero;
    }
    echo "<br>";
 }
 */

//  Forma Ternaria
 for($numero=1;$numero<=100;$numero++)
 {
    ($numero%3==0 and $numero%5==0)? print("fizzbuzz"):(
        $numero%3==0? print("fizz"):(
            $numero%5==0? print("buzz"):print($numero)
            ));
    echo "<br>";
 }