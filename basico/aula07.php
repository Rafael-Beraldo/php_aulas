<?php

    $frase = "Meu nome é ";
    $nome = "Rafael";
    $idade = 18;

    define('NOME','Eduardo');

    echo $frase.$nome;
    echo "<br>Meu nome é $nome"; //Tem que ter cuidado ao se trabalhar junto com HTML
    /* Exemplo de conflito 
    echo "<div class="$nome">";
    
    Jeito de contornar Erro
    echo "<div class=\"$nome\>";
    */
?>