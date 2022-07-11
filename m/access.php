<?php

class Access {

    public static function jIndex() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/access/jIndex.php';
    }

    public static function jCreate() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/access/jCreate.php';
    }

    public static function jCreateDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/access/jCreateDb.php';
    }

    public static function jUpdate() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/access/jUpdate.php';
    }

    public static function jUpdateDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/access/jUpdateDb.php';
    }

}

$access = new Access();
