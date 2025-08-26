<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>primero</h1>

        <form action="" method="post">
            <label>PRIMER NUMERO 1</label><br>
            <input type="number" id="numero_1" name="numero1" required><br>
            <label>PRIMER NUMERO 2</label><br>
            <input type="number" id="numero_2" name="numero2" required><br>
            <label>SELECCIONE OPERACION</label><br>
            <select name="operacion" id="operacion">
                <option value="1">suma</option>
                <option value="2">resta</option>
            </select><br>


            <input type="submit" name="enviar">

        </form>


<div class="contend">
    <div >

    </div>

</div>


<?php
    
    if(isset($_POST['enviar']) ){
        $n1 = $_POST['numero1'];
        $n2 = $_POST['numero2'];
        $operacion = $_POST['operacion'];

        if($operacion == 1){
        $suma = $n1 + $n2;
        echo "<h3>El resultado de $n1 + $n2 es: $suma</h3>";
        }

        if($operacion == 2){
            $resta = $n1 - $n2;
            echo "<h3>El resultado de $n1 - $n2 es: $resta</h3>"; 
        }


    }
    
?>  



</body>
</html>