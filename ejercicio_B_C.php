<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="TABLA" placeholder="INGRESE TABLA" required> 
        <br>
        <br>
        <button type="submit">GENERAR TABLA</button>
    </form>


</body>
</html>
<?php
   if(isset($_POST["TABLA"])){

        $numero=$_POST["TABLA"];

        for($i =1; $i <10; $i++){
            $resultado=$numero*$i;
            echo $numero, "x", $i, "=", $resultado, "<br>" ; 
            #ivan estuvo aqui
        }


   };
    
     


?>