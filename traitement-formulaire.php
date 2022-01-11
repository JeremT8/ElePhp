<?php
    $name = $_POST["userName"] ?? "user";
    $age = $_POST["userAge"] ?? 18;

    if(empty($age)) $age=19;
    if(empty($name)) $name='User'
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premiere page en PhP</title>
</head>
<body>
<h1>Bonjour <?php echo $name;?> vous avez <?php echo $age;?> ans </h1>
</body>
</html>