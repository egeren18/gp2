<?php

class Cmodal {

    public static function jIndex($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/cmodal/jIndex.php';
    }
    
    public static function jList($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/cmodal/jList.php';
    }

    public static function jCreate($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/cmodal/jCreate.php';
    }

    public static function jCreateDb($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/cmodal/jCreateDb.php';
    }

    public static function jUpdate($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/cmodal/jUpdate.php';
    }

    public static function jUpdateDb($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/cmodal/jUpdateDb.php';
    }

    public static function jDelete($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/cmodal/jDelete.php';
    }

    public static function jDeleteDb($moduleId) {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/cmodal/jDeleteDb.php';
    }

}

$cmodal = new Cmodal();