<?php

    final class ClaseBase {

        public function test() {
            echo "ClaseBase::test() llamada\n";
        }
        // Aquí da igual si se declara el método como
        // final o no
        final public function moreTesting() {
            echo "ClaseBase::moreTesting() llamada\n";
        }
    }
    class ClaseHijo extends ClaseBase {

    }

    //Explicación de la salida:
    /*
     *  La clase "claseBase" al ser de tipo 'final', no puede ser heredada a ninguna otra clase (hija) 
     */

?>