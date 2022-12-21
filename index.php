<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Password-Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./style.css" rel="stylesheet">
</head>

<body>
    <h1 class="mt-2">Strong Password Generator</h1>
    <div class="container py-2 bg-w mt-4">
        <form action="" method="GET" class="d-flex justify-content-around">
            <label for="inp"><h4>Lunghezza Password</h4></label>
            <input name="passlength" type="number" id="inp" class="form-control w450"
            placeholder="Inserisci la lunghezza della password da generare">
            <input class="wider" type="submit">
        </form>
        <div class="d-flex justify-content-center">
            <h3 class="color-green">Password generata:</h3>
            <h3 class="text-center color-red mx-3"><?php echo randomPassword() ?></h3> 
        </div>
    </div>
</body>

</html>

<?php

randomPassword();

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