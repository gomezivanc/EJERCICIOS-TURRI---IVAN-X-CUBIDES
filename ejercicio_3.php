<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="">
        <p>kilometros a metros</p>
        <label>introduce los kilometros</label><br>
        <input type="number" name="kilometros" required><br>
        <input type="submit" name="enviar" value="convertir">



    </form>


#hola

<?php
    if(isset($_GET['enviar'])){
        $km = $_GET['kilometros'];
        $metros = $km * 1000;
        echo "<h3>$km kilometros son $metros metros</h3>";
    }

?>


</body>
</html>