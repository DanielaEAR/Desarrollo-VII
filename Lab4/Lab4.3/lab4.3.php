<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.3</title>
</head>
<body>
    <h3>Manejo de Arreglos P1</h3>

    <?php
        $vector = array();
        $mayor = 0;
        for($i = 1; $i<=20; $i++){
            $vector[$i] = $i;
            echo $vector[$i]."<br>";
            if($vector[$i] > $mayor){
                $mayor = $vector[$i];
                $id = $i;
            } 
        }
        echo "--------------------- <br>";

        echo "El elemento mayor del array es: ".$mayor." y su posición es la #".$id;
    ?>


</body>
</html>