<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Áreas</title>
</head>
<body>

<h1>Calculadora de Áreas</h1>

<?php
// ==================== PASO 2: Calcular área ====================
if (isset($_POST['calcular'])) {
    $figura = $_POST['figura'];

    if ($figura == "triangulo") {
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $area = ($base * $altura) / 2;
        echo "<h3>El área del triángulo es: $area</h3>";

    } elseif ($figura == "cuadrado") {
        $lado = $_POST['lado'];
        $area = $lado * $lado;
        echo "<h3>El área del cuadrado es: $area</h3>";

    } elseif ($figura == "circulo") {
        $radio = $_POST['radio_valor'];
        $area = pi() * pow($radio, 2);
        echo "<h3>El área del círculo es: $area</h3>";
    }

    echo '<br><a href="">Volver al inicio</a>';
}

// ==================== PASO 1: Mostrar formulario de datos ====================
elseif (isset($_POST['enviar'])) {
    $figura = $_POST['radio'];

    if ($figura == "triangulo") {
        echo "<h3>Introduce base y altura del triángulo:</h3>";
        ?>
        <form action="" method="post">
            <label>Base:</label>
            <input type="number" name="base" required><br>
            <label>Altura:</label>
            <input type="number" name="altura" required><br>
            <input type="hidden" name="figura" value="triangulo">
            <input type="submit" name="calcular" value="Calcular">
        </form>
        <?php
    } elseif ($figura == "cuadrado") {
        echo "<h3>Introduce el lado del cuadrado:</h3>";
        ?>
        <form action="" method="post">
            <label>Lado:</label>
            <input type="number" name="lado" required><br>
            <input type="hidden" name="figura" value="cuadrado">
            <input type="submit" name="calcular" value="Calcular">
        </form>
        <?php
    } elseif ($figura == "circulo") {
        echo "<h3>Introduce el radio del círculo:</h3>";
        ?>
        <form action="" method="post">
            <label>Radio:</label>
            <input type="number" name="radio_valor" required><br>
            <input type="hidden" name="figura" value="circulo">
            <input type="submit" name="calcular" value="Calcular">
        </form>
        <?php
    }
}

// ==================== PASO 0: Formulario principal ====================
else {
    ?>
    <form action="" method="post">
        <label>Círculo</label>
        <input type="radio" name="radio" value="circulo" required><br>

        <label>Cuadrado</label>
        <input type="radio" name="radio" value="cuadrado" required><br>

        <label>Triángulo</label>
        <input type="radio" name="radio" value="triangulo" required><br>

        <br>
        <input type="submit" name="enviar" value="Elegir figura">
    </form>
    <?php
}
?>

</body>
</html>
