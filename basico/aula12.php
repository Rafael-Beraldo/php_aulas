<?php
    // Loopings

    $n1 = 10;
    $n2 = 10;

    do{ // o Do sempre vai fazer 1x o que estiver dentro, depois verifica a condição.
        printf("DO-WHILE <br>");
        $n1++;
    }while($n1 != 15);

    while($n2 > 5){ // o While já testa a condição antes de fazer o looping.
        printf("WHILE <br>");
        $n2--;
    }

    for($i = 0;$i < 5;$i++){ // o For é para um valor que você já sabe quantas vezes precisa.
        printf("FOR <br>");
    }
?>