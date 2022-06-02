<?php
/*$nome = "Fulano";
$sobrenome = "da Silva";
$email = "fulanodasilva@gmail.com";
$cidade = "Curitiba";
$estado = "Parana" ;
$cep = 83.000-000;*/

function ValidarNome($nome = "douglas") {
    if($nome == $nome) {
        echo "Favor verificar nome pois esta diferente";
    }else {
        echo "oi meu nome é: $nome";

    }
    validarNome();

}



function fazerCafe($tipo = "cappuccino ") {
    return "Fazer uma xicara de cafe: $tipo <br>";
}

echo fazerCafe();
echo fazerCafe("expresso");





