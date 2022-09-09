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
        $i = 0;
        do{
            $resp = 'N';
            $valor = 0;
            echo "<form name='form' method='post'>";
            echo "<p>Ingrese un número <input type='text' name='valorP' /></p>";
            $valor = (int)$_POST['valorP'];
            echo "Valor ==".$valor;
            $valorParoImpar = $valor % 2;
            echo "<br> ValorProcesado ".$valorParoImpar;
            echo "<input type='submit' value='Ingresar'>";
            if($valorParoImpar == 0){
                $arregloPar[$i] = $valor;
                var_dump ($arregloPar);
                $i = $i + 1;
            }else{
               echo "Valor no procesado, ya que es Impar";
            }
            echo "</form>";
            
            
           
        }while($resp =! 'S');
            
         /*   for($i = 0; $i<=$arregloPar; $i++){
                echo $arregloPar[$i];
            }*/

    ?>
    

</body>
</html>