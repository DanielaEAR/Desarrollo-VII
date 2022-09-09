<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.5</title>
</head>
<body>
    <h3>Manejo de Matrices</h3>
    <?php
        $i=1;
        
        if(array_key_exists('btn', $_POST)){
            if($_REQUEST['numero']!=""){
                $tamañoMa = $_REQUEST['numero'];
                if($tamañoMa>1){
                    $unit =1;
                    echo "<table border=1>";
                
                    for ($n1= 1; $n1<=$tamañoMa; $n1++){
                        echo "<tr>";
                        for($n2= 1; $n2<=$tamañoMa; $n2++){   
                            if($unit == $n2){
                                echo"<td bgcolor=#82E0AA>",1,"</td>";
                            }
                            else{
                                echo "<td>",0,"</td>";
                            }
                        }  
                        $unit = $unit +1;
                        echo "</tr>";
                    }
                        echo "</table>";
                }else{
                    echo "Numero no aceptado, Ingrese un Numero mayor a 1";
                }
            }
        }
    ?>
        <FORM ACTION="lab4.5.php" METHOD="POST">
            <br><br>Ingrese el tamaño de la matriz : <input type="text" name="numero"><br><br>
            <input type="submit" name= "btn" value="Ingresar">
        </FORM>
  
</body>
</html>