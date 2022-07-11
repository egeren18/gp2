<?php

class Presubscriber {

    public static function jIndex() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/presubscriber/jIndex.php';
    }

    public static function jRead() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/presubscriber/jRead.php';
    }

    public static function jCreate() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/presubscriber/jCreate.php';
    }

    public static function jCreateDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/presubscriber/jCreateDb.php';
    }

    public static function jUpdate() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/presubscriber/jUpdate.php';
    }

    public static function jUpdateDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/presubscriber/jUpdateDb.php';
    }

    public static function jDelete() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/presubscriber/jDelete.php';
    }

    public static function jDeleteDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/presubscriber/jDeleteDb.php';
    }

}

$presubscriber = new Presubscriber();
