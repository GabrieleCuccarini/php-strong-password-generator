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
    </div>
</body>

</html>

<?php
$Stringinput = isset($_GET["passlength"]) ? $_GET["passlength"] : '';
$NumInput = (int)$Stringinput;
// var_dump($NumInput);

getRndmKey();

function getRndmKey() {
    $minlett = "abcdefghilmnopqrstuvzjkywx";
    $capslett = "ABCDEFGHILMNOPQRSTUVZJKYWX";
    $numbers = "1234567890";
    $altsimbols  = "àèìòùÀÈÌÒÙéç+^&";
    $allstring = $minlett . $capslett . $numbers . $altsimbols;

    $keyindex = rand(0, strlen($allstring) - 1);
    return $allstring[$keyindex];
}

?>