<?php
function randomPassword() {
    $Stringinput = isset($_GET["passlength"]) ? $_GET["passlength"] : '';
    if (!empty($Stringinput)) {
    $NumInput = (int)$Stringinput;
    // var_dump($NumInput);
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //Dichiaro $pass come array
    $alphaLength = strlen($alphabet) - 1; //setto l'index assegnandogli stringlength -1
    for ($i = 0; $i < $NumInput; $i++) {
        $n = rand(0, $alphaLength); //$n è l'index nel ciclo for, impostato casualmente tra 0 e alphalenght
        $pass[] = $alphabet[$n]; // aggiungo all'array $pass il carattere trovato all'indice $n dell'array $alphabet
    };
    $password = implode($pass);
    $_SESSION['password'] = $password;
    var_dump($_SESSION['password']);
    // var_dump(implode($pass));
     //return $password;    ritorno la stringa $password
    header('Location: ./partials/password.php');
    }
};
?>