<?php
session_start();
if (strlen($_SESSION['password']) > 0) { ?>
    <h2 class="mt-4 text-center">Password di <?php echo strlen($_SESSION['password'])?> caratteri generata:</h2>
    <h1 class="mt-2 text-center"><?php echo $_SESSION['password'];?></h1>
<?php } else { ?> 
    <h2 class="mt-2 text-center">La password non può essere generata, spunta almeno una checkbox tra lettere, numeri e simboli</h2>
<?php }
session_destroy();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>