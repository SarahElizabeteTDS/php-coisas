<?php

    $numeros = [];

    for ($i=0; $i < 5; $i++) 
    { 
        $numero_informado = readline("Informe um número: ");
        array_unshift($numeros, $numero_informado);
    }
    
    foreach ($numeros as $n) 
    {
        print "$n \n";
    }
    
    