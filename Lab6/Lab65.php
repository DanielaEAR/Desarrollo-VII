<?php
    class ClaseBase {
        
        public function test() {
            echo "ClaseBase::test() llamada\n";
        }
        final public function masTests() {
            echo "ClaseBase::masTests() llamada\n";
        }
    }

    class ClaseHijo extends ClaseBase {

            public function masTests() {
            echo "ClaseHijo::masTests() llamada\n";
        }
    }

    // Explicación de la salida:
        /*
            El método masTests es de tipo final además de pertenecer a la clase padre,
            por lo que no se puede sobreescribir en una clase hija un método final. 
        */


?>