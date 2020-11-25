<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
        echo "El precio total con IVA es: " . round($_POST['precio'] * 1.21, 2);
    ?>
</body>
</html>