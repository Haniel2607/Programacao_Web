<?php
 
while (true) {
    $nota = x;
    if ($nota >= 0 && $nota <= 10) {
        echo "Nota válida: " . $nota . "\n";
        break;
    } else {
        echo "Valor inválido. Por favor, digite uma nota entre zero e dez.\n";
    }
}
 
?>