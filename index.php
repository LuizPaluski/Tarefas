<?php

$dados = [-456, false, "0.87", 1.67, "Casa 8", 0, 1000, true, "-900", 3, 0.0, -3.1415, 32150, 128288, "false" ];

foreach($dados as $dado){
    if(is_int($dado)){
        echo "$dado e inteiro; ";
    }
    elseif(is_float($dado)){
        echo "$dado e float; ";
    }
    elseif(is_bool($dado)){
        echo "O valor e booleano ";
    }
    elseif(is_string($dado)){
        echo "$dado e string; ";
        }
    }
    
    