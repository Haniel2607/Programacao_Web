<?php
 
$num_sorteado = rand(1, 50);
 
echo "Bem-vindo ao jogo de adivinhação! Tente adivinhar o número sorteado pelo computador entre 1 e 50.\n";
 
while (true) {
    $palpite = intval("Insira seu palpite: ");
    if ($palpite === $num_sorteado) {
        echo "Parabéns! Você acertou o número sorteado: $num_sorteado\n";
        break;
    } elseif ($palpite < $num_sorteado) {
        echo "O número sorteado é maior do que o seu palpite.\n";
    } else {
        echo "O número sorteado é menor do que o seu palpite.\n";
    }
}
 
?>