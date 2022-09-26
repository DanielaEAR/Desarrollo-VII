<?php
//Laboratorio 8.1
    class Ventas{
        private $valor;

        public Function calcularP($valorVenta){
            echo "<br>";
            $valor = $valorVenta;
            if($valor >= 80){
                echo "<br><img src="."img/green.PNG"." alt=".">";
            }elseif($valor >= 50 && $valor<=79){
                echo "<br><img src="."img/yellow.PNG"." alt=".">";
            }else{
                echo "<br><img src="."img/red.PNG"." alt=".">";
            }
        }
    }

//Laboratorio 8.2
class Factorial{

    public Function calcularF($numero){
        $factorial = 1;
        for($i = 1; $i<=$numero; $i++){
            $factorial = $factorial  * $i;
        }
        echo "<br/> El factorial de ".$numero." es de: ".$factorial;
    }
}

//Laboratorio 8.3
class Arreglo{

    private $vector;

    Function __construct(){
        $this->vector = array();
    }
    public Function calcularElemMayor(){

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

        return "El elemento mayor del array es: ".$mayor." y su posición es la #".$id;
    }

}

?>