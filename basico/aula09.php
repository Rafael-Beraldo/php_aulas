<?php
    //Condições

    $n1 = "Rafael";
    $n2 = "Cleber";

    if($n1 == $n2){
        echo '<div style="width:300px;height:300px;background:red;"></div>';
    }else{
        echo "A Condição não é Verdade!";
    }
?>


<?php
    //Uma coisa que eu não imaginava é que da para passar um código inteiro HTML como caminho simplesmente abrindo outra parte PHP.

    $a = "Rafael";
    $b = "Rafael";

    if($a == $b){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <p>CONDIÇÃO PRIMÁRIA</p>
</body>
</html>
<?php

    }else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <p>CONDIÇÃO SECUNDARIA</p>
</body>
</html>

<?php
    }
?>