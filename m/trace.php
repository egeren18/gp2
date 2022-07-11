<?php

class Trace {

    public static function jIndex() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/trace/jIndex.php';
    }

}

$trace = new Trace();
