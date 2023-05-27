<!DOCTYPE html>
<html>

<head>
    <title>Calculadora basica V1</title>
</head>

<body>
    <h1>Calculadora Basica Para <b>SUMAR</b></h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="n1" placeholder="Numero 1" required><br><br>
        <input type="number" name="n2" placeholder="Numero 2" required><br><br>

        

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        
        $res = $n1+$n2;

        echo "<h2>La suma es: $res</h2>";
    }
    ?>
</body>
</html>
