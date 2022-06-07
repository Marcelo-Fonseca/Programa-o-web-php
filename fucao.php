<?php
/*Fazer validação de email se esta dentro dos padroes do email usando função em php*/

function ValidaEmail($email) {
    if(filter_var($email,FILTER_VALIDATE_EMAIL)) {
        return true;

    }else{
        return false;
    }
}
$email = "marcelo@teste.com";
    if($email == ValidaEmail($email)) {
        echo 'Email verificado esta valido!! :)<br>';
    }else {
        echo "Favor verificar seu Email, pode estar com erro de digitação :(";

        
        
    }









/*function fazerCafe($tipo = "cappuccino ") {
    return "Fazer uma xicara de cafe: $tipo <br>";
}

echo fazerCafe();
echo fazerCafe("expresso");*/





