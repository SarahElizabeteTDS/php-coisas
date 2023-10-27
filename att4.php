<?php

    $suspeita = 0;
    $perguntas = ["Telefonou para a vitima?\n","Esteve no local do crime?\n","Mora perto da vitima?\n","Devia para a vitima?\n","Já trabalhou com a vitima?\n"];
    
    for ($i=0; $i < sizeof($perguntas); $i++)
    { 
        $resposta = readline($perguntas[$i]);
            if ($resposta == "sim")
            {
                $suspeita++;
            }
    }
    
    if ($suspeita == 0)
    {
        print "Você é inocente\n";
    }
    else if ($suspeita == 2)
    {
        print "Você é suspeito!\n";
    }
    else if ($suspeita == 3 || $suspeita == 4)
    {
        print "Você é cúmplice!\n";
    }
    else
    {
        print "Você é culpado!\n";
    }