<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <label for="">SUMA DE LOS NUMEROS DEL 1 AL 100</label>
        <input type="submit" name="enviar">
    </form>

    <?php
        $acumulador=0;

         if(isset($_POST['enviar'])){
            for($i=1; $i <= 100; $i++){
               
                echo ($acumulador = $acumulador + $i) . "<br>";

            }
            



         }

    ?>



</body>
</html>