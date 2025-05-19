
<?php   
    function NomeIdade($Nome, $idade) {
        echo "Seu nome e $Nome, e sua idade e de $idade ";
    }

NomeIdade("Luiz","20");

    function ParImpar($x){
        if($x % 2 === 0 ){
        echo "Par";
        }
        else{
            echo "Impar";
        }    
    }
$valor = readline("Digitar o valor ");
ParImpar($valor);