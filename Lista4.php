<?php

$num = readline("Digite o numero: ");


if (is_bool($num) ) {
    $num = $num / 4;
    echo "True";

}
else{
    echo  "False";
}
