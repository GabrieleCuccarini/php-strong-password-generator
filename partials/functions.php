<?php
function randomPassword() {
    $stringinput = isset($_GET["passlength"]) ? $_GET["passlength"] : '';
    $checklett = isset($_GET["letters"]);
    $checknumb = isset($_GET["numbers"]);
    $checksymb = isset($_GET["symbols"]);
    $checkrepeat = isset($_GET["repetition"]);
    if (!empty($stringinput)) {
    $NumInput = (int)$stringinput;
    // var_dump($NumInput);
    $lettstring = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbstring = '1234567890';
    $symbstring = '!"£%/()^?§*°_-';
    $totalstr = array();
    // var_dump($checklett, $checknumb, $checksymb); THEY WORK
    if ($checklett) {
        $totalstr[] = $lettstring;
    };
    if ($checknumb) {
        $totalstr[] = $numbstring;
    } ;  
    if ($checksymb) {
        $totalstr[] = $symbstring;
    };
    $totalarray = implode($totalstr);
    // PEZZO DI FUNCTION POST "GESTIONE" DELLE CHECKBOX
    $pass = array(); //Dichiaro $pass come array
    $alphaLength = strlen($totalarray) - 1; //setto l'index assegnandogli stringlength -1
    $i = 0;
    while ( $i < $NumInput) {
        $n = rand(0, $alphaLength); //$n è l'index nel ciclo for, impostato casualmente tra 0 e alphalenght
        if ($checkrepeat) {
            $pass[] = $totalarray[$n];
            $i++; 
        // Se le ripetizioni sono consentite aggiungo all'array $pass il carattere trovato 
        // all'indice $n di $totalarray. Else -->
        } else {
        if (in_array($totalarray[$n], $pass)) {
            } else {
               $pass[] = $totalarray[$n]; 
               $i++;
            }
        }
    };
    $password = implode($pass);
    $_SESSION['password'] = $password;
    var_dump($_SESSION['password']);
    //return $password;    ritorno la stringa $password
    header('Location: ./partials/password.php');
    }
};
?>