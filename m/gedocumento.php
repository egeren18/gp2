<?php

class Gedocumento {

    public static function aIndex($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/gedocumento/aIndex.php';
    }

    
    public static function aCreateDb($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/gedocumento/aCreateDb.php';
    }

    public static function aUpdateDb($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/gedocumento/aUpdateDb.php';
    }

    public static function aDeleteDb($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/gedocumento/aDeleteDb.php';
    }
    


}

$gedocumento = new Gedocumento();