<?php
    session_start();
    $somma = 0;
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
        <h1>Risultato</h1>
    </div> <br>
    <div class="divRecensione">
        <table>
            <tr>
                <td>Totale invii</td>
                <td>Ultima data inviata</td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['invii'];?></td>
                <td><?php echo $_SESSION['ultimaData'];?></td>
            </tr>
        </table><br>
        <div style="text-align:left;">
            <p>Totale voti:</p>
            <ul>
                <?php foreach ($_SESSION['totaleVoti'] as $voto) {
                    echo "<li>$voto</li>";
                    $somma += $voto;
                }?>
            </ul>
            <h3>Media: <?php echo $somma/count($_SESSION['totaleVoti'])?></h3>
            <a href="./index.html">Torna indietro</a>
        </div>
    </div>
    <br>
</body>
</html>