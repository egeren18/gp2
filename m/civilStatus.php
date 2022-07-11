<?php

class CivilStatus {

    public static function jIndex($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/civilStatus/jIndex.php';
    }

    public static function jCreate($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/civilStatus/jCreate.php';
    }

    public static function jCreateDb($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/civilStatus/jCreateDb.php';
    }

    public static function jUpdate($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/civilStatus/jUpdate.php';
    }

    public static function jUpdateDb($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/civilStatus/jUpdateDb.php';
    }

    public static function jDelete($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/civilStatus/jDelete.php';
    }

    public static function jDeleteDb($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/civilStatus/jDeleteDb.php';
    }

}

$civilStatus = new CivilStatus();
