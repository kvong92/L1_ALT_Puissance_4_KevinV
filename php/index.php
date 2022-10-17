<?php
// ecrire code php
$name = 'Jean';
$hello2 = "Hello $name";

$newHello = $name . '' . $hello2;
// Jean Hello Jean

echo "ce qu'on veut $hello2";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?= $hello2; ?>
    </div>
</body>
</html>