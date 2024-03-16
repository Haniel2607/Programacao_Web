<?php
 
function gerarNumeros($inicio, $fim) {
    if ($inicio <= $fim) {
        for ($i = $inicio; $i <= $fim; $i++) {
            echo $i . " ";
        }
    } else {
        for ($i = $fim; $i <= $inicio; $i++) {
            echo $i . " ";
        }
    }
}
 
$numero1 = ;
$numero2 = ;
 
gerarNumeros($numero1, $numero2);
 
?>