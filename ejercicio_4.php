<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario con ford</title>
</head>
<body>

<form action="" method="post">    

<label for="">numero a mostrar</label>
<input type="number" required  name="n1" placeholder="Ingresar nombre" >

<input type="submit" name="enviar">
</form>
a

<?php

if(isset($_POST['enviar'])){
    $numero1 = $_POST['n1'];

    for ($i=0; $i <= $numero1; $i++){
        echo $i. "<br>";
    }
}



?>



</body>
</html>