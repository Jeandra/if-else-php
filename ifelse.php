<?php

$media_final = 6;

if ($media_final >= 7) {

    echo "Aprovado";
} else if ($media_final < 6){
    echo "Reprovado";
} else {
    echo "Recuperação";

}
echo "<hr>";

$resultado = ($media_final >= 7) ? "Aprovado" : "Reprovado";
echo "$resultado";
