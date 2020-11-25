<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
         echo "El volumen del cono es:" . round((pow($_POST['r'], 2) * pi() * $_POST['h']) / 3 , 2);
    ?> 
</body>
</html>