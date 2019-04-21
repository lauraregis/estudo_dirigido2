<?php
    print "Digite F ou M para informar o sexo:\n";
    $sexo = fgetc(STDIN);
    if($sexo=="M"){
        print "O seu sexo é Masculino.\n";       
    }
    else
    if($sexo== "F"){ 
    print "O sexo é Feminino.\n";    
    }
    else
    if($sexo!= "F" or "M"){
    print "O sexo é inválido.\n";