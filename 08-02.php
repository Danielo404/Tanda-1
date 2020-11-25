<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Esta semana has trabajado: " . $_POST['h'] . " horas.";
        echo "<br>";
        echo "Te corresponden: " . $_POST['h'] * 12 . '€';
    ?>
</body>
</html>