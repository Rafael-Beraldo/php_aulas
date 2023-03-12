<?php
    //Operadores lógicos

    $n1 = 10;
    $n2 = 15;

    if($n1 > $n2){
        printf("N1 é maior que N2.");
    }elseif($n2 > $n1){
        printf("N2 é maior que N1.");
    }elseif($n1 >= $n2){
        printf("N1 é maior ou Igual a N2.");
    }elseif($n1 <= $n1){
        printf("N1 é menor ou Igual N2.");
    }else{
        printf("Erro");
    }

    if(($n1 + $n2) < $n1 || ($n1 + $n2) == 25){ // || = OU
        printf("OPÇÃO 1");
    }elseif(($n1 + $n2) > $n1 && $n2 > $n1){ // && = AND
        printf("OPÇÃO 2");
    }else{
        printf("OPÇÃO 3");
    }
?>