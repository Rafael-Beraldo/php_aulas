<?php
    //Arrays

    $nome = array('Rafael',"Guilherme","Cleber"); //Pode ser ' ou ".
    $nomeDiferente = ['Rafael','Guilherme','Cleber']; //Outra forma de declarar Array.
    $vet = ["Rafael",18,"09/06/2004"]; //Pode misturar dados.

    echo "$nome[1] <br>";
    echo "$nomeDiferente[0] <br> <br>";

    // O indice pode ser uma String;

    $info['nome'] = "Rafael";
    $info['idade'] = 18;
    $info['nascimento'] = "09/06/2004";

    echo "$info[nome] <br>";
    echo "$info[idade] <br>";
    echo "$info[nascimento] <br>";

    /* Laço de repetição ainda não foi visto na aula, mas por já saber fiz um teste rapido.
    $vet = array(1,2,3,4);

    for($i = 0;$i<4;$i++){
        echo "$vet[$i] <br/>";
    }
    */

?>