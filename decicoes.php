<?php

$idade = 18;
$numeroDePessoas = 1;

    echo "Você só pode entrar a partir de 18 anos.";
    echo " Ou a partir de 16 anos acompanhado por um maior de idade ". PHP_EOL;

 if ($idade >= 18){
     echo "Você tem $idade anos. Pode entrar sozinho!";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, e está acompanhado(a), entrada permitida!". PHP_EOL;
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}
