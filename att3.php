<?php

    $notas = [];

    for ($i=0; $i < 4; $i++) 
    { 
        $nota_informada = readline("Informe sua nota no bimestre: ");
        $notas[] = $nota_informada;
    }
    
    $media = ($notas[0] + $notas[1] + $notas[2] + $notas[3])/4;
    print "Sua média é $media \n";
    