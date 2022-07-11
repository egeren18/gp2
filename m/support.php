<?php

class Support {

    public static function jList() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/support/jList.php';
    }

    public static function jAdd() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/support/jAdd.php';
    }

    public static function jcreateDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/support/jcreateDb.php';
    }

    public static function jUpdate() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/support/jUpdate.php';
    }

    public static function jUpdateDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/support/jUpdateDb.php';
    }

    public static function jDelete() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/support/jDelete.php';
    }

    public static function jDeleteDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/support/jDeleteDb.php';
    }

}

$support = new Support();
