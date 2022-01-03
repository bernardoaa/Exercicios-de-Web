
    <?php
    //Recebendo os dados e veriicando a condicao
    $valor1 = $_GET["numero1"];
    $valor2 = $_GET["numero2"];;

    if ($valor1 > $valor2) {
        echo $valor2 . " " . $valor1;
    } else {
        echo $valor1 . " " . $valor2;
    }
    ?>
