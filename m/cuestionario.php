<?php

class Cuestionario {

    public static function jIndex() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/cuestionario/jIndex.php';
    }
        public static function jlist() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/cuestionario/jList.php';
    }

    public static function jRead() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/cuestionario/jRead.php';
    }

    public static function jCreate() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/cuestionario/jCreate.php';
    }

    public static function jCreateDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/cuestionario/jCreateDb.php';
    }

    public static function jUpdate() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/cuestionario/jUpdate.php';
    }

    public static function jUpdateDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/cuestionario/jUpdateDb.php';
    }

    public static function jDelete() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/cuestionario/jDelete.php';
    }

    public static function jDeleteDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/cuestionario/jDeleteDb.php';
    }

}

$cuestionario = new Cuestionario();
