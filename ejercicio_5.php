<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        <label for="">INGRESAR TABLA A MULTIPLICAR</label>
        <input type="number" name="numero" placeholder="ingrese numero" required>

        <input type="submit" name="enviar">

    </form>


    <?php
        if(isset($_POST['enviar'])){
            $n1 = $_POST['numero'];

            for($i=1; $i <= 10; $i++){

                echo $i ."x". $n1. "=". $i*$n1."<br>";
            };
        }



    ?>







</body>
</html>