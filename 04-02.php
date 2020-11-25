<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
    echo $_POST['a'] . ' + ' . $_POST['b'] . ' = ' . ($_POST['a'] + $_POST['b']);
    echo "<br>";
    echo $_POST['a'] . ' - ' . $_POST['b'] . ' = ' . ($_POST['a'] - $_POST['b']);
    echo "<br>";
    echo $_POST['a'] . ' X ' . $_POST['b'] . ' = ' . $_POST['a'] * $_POST['b'];
    echo "<br>";
    echo $_POST['a'] . ' / ' . $_POST['b'] . ' = ' . $_POST['a'] / $_POST['b'];
    ?>
</body>
</html>