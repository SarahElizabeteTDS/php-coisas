<?php

    $numeros = [];

    for ($i=0; $i < 5; $i++) 
    { 
        $numero_informado = readline("Informe um número: ");
        $numeros[] = $numero_informado;
    }
    sort($numeros);
    
    foreach ($numeros as $n) 
    {
        print "$n \n";
    }
    