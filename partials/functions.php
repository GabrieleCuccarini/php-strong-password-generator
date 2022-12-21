<?php
function randomPassword() {
    $Stringinput = isset($_GET["passlength"]) ? $_GET["passlength"] : '';
    $NumInput = (int)$Stringinput;
    // var_dump($NumInput);
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //Dichiaro $pass come array
    $alphaLength = strlen($alphabet) - 1; //setto l'index assegnandogli stringlength -1
    for ($i = 0; $i < $NumInput; $i++) {
        $n = rand(0, $alphaLength); //$n è l'index nel ciclo for, impostato casualmente tra 0 e alphalenght
        $pass[] = $alphabet[$n]; // aggiungo all'array $pass il carattere trovato all'indice $n dell'array $alphabet
    }
    $password = implode($pass);
    // var_dump(implode($pass));
    return $password; //converto e ritorno l'array $pass trasformato nella stringa $password
}
?>