<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        echo $_POST['ptas'] . " pesetas son  " . round($_POST['ptas'] / 166.386, 2) . '€'
    ?>
</body>
</html>