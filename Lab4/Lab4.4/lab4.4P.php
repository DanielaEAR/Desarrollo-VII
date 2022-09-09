<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.4</title>
</head>
<body>
    <h3>Manejo de Arreglos P2</h3>
    <?php
    $resp = 'S';
    $i = 0;
         while($resp == 'S'){
            $valor = 0;
            
            echo "<form name='form' method='post' action='lab4.4P.php'>";
            echo "<p>Ingrese un número <input type='text' name='valorP' /></p>";
            echo "<input type='submit' value='Ingresar'>";
            echo "</form>";

            $valor = (int)$_POST['valorP'];
            echo "Valor ==".$valor;
            $valorParoImpar = $valor % 2;
            echo "<br> ValorProcesado ".$valorParoImpar;
            $resp = 'N';
            if($valorParoImpar == 0){
                $arregloPar[$i] = $valor;
                var_dump ($arregloPar);

                echo "<form name='form2' method='post' action='lab4.4P.php'>";
                echo "<p>Desea ingresar otro numero S/N<input type='text' name='valorR' /></p>";
                echo "<input type='submit' value='Aceptar'>";
                echo "</form>"; 
                
                $resp = $_POST['valorR'];

                if($resp == 'S'){
                    $i = $i + 1;
                }
                
            }/*else{
               $resp = 'S';
               echo "Valor no procesado, ya que es Impar";
               $valor = 0;
            }*/
            
        }
            
         /*   for($i = 0; $i<=$arregloPar; $i++){
                echo $arregloPar[$i];
            }*/

    ?>
    

</body>
</html>