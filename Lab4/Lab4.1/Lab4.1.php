<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.1</title>
</head>
<body>
    <h3>Aplicación web con imagen dinámica</h3>
    <form name="form" method="post" action="Lab4.1.php">
        <p>Desempeño de ventas realizadas <input type="text" name="valorV" /></p>
        <input type="submit" value="Ingresar">
    </form>
    
    <?php 
        echo "<br>";
        $valor = (int)$_POST['valorV'];
  
        echo "<br>";
        if($valor >= 80){
    ?>
        <img src="img/green.PNG" alt="">
    <?php 
        }elseif($valor >= 50 && $valor<=79){
    ?>
        <img src="img/yellow.PNG" alt="">
    <?php 
        }else{
    ?>  
        <img src="img/red.PNG" alt="">
    <?php 
        }
    ?>
    
</body>
</html>