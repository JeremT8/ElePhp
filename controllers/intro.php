<?php

$name = $_GET['name'];
if(! isset($_GET["name"])){
    $name = 'Jérémy';
} else {
    $name = $_GET["name"];
}

$color = $_GET['color'];
if(! isset($_GET["color"])){
    $color = 'green';
} else {
    $color = $_GET["color"];
}

$backgroundColor = 'yellowgreen';
$age = 24;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premiere page en PhP</title>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>
        }
        h1 {
            color: <?php echo $color; ?>
        }

    </style>
</head>
<body>
<h1>
    Bonjour <?= $name; ?> la date du jour est :
    <?php echo date("d/m/Y"); ?>
</h1>

<pre>
    <?php // var_dump($variableATester); permet de debugger son code // ?>
    <?php // print_r($_SERVER) rapporte les informations du Server ?>
</pre>
<table>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2) {
            echo '<tr style="background-color:#CCC;">';
        } else {
            echo '<tr>';
        }

        for ($k = 1; $k <= 10; $k++) {
            if ($k % 2 == 0) {
                echo '<td style="background-color:#888;">' . $i * $k . '</td>';
            } else {
                echo '<td>' . $i * $k . '</td>';
            }

        }
        echo '</tr>';
    }
    ?>
</table>
<ul>
    <?php for ($i = 1; $i <= 10; $i++) : { ?>
        <li> <?= $i ?></li>
    <?php } endfor; ?>
</ul>
</body>
</html>