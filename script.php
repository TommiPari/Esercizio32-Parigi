<?php
    session_start();
    if (isset($_SESSION['invii'])) {
        $_SESSION['invii']++;
    } else {
        $_SESSION['invii'] = 1;
    }
    if (!isset($_SESSION['totaleVoti'])) {
        $_SESSION['totaleVoti'] = array();
    }
    $_SESSION['ultimaData'] = $_POST['data'];
    array_push($_SESSION['totaleVoti'], $_POST['voto']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div class="titolo">
        <h1>Recensione inviata</h1>
    </div> <br>
    <div class="divRecensione">
        <h2>Totale invii: <?php echo $_SESSION['invii'];?></h2>
        <h2>Ultima data d'inserimento: <?php echo $_SESSION['ultimaData'];?></h2>
        <p>Totale voti: <?php foreach ($_SESSION['totaleVoti'] as $voto) {
            echo "$voto ";    
        }?></p>
        <a href="./risultato.php">Risultato</a> <br>
        <a href="./index.html">Torna indietro</a>
    </div>
    <br>
</body>
</html>