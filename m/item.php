<?php

class Item {

    public static function jMenu() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/item/jMenu.php';
    }

    public static function jList() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/item/jList.php';
    }

    public static function jAdd() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/item/jAdd.php';
    }

    public static function jcreateDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/item/jcreateDb.php';
    }

    public static function jUpdate() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/item/jUpdate.php';
    }

    public static function jUpdateDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/item/jUpdateDb.php';
    }

    public static function jDelete() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/item/jDelete.php';
    }

    public static function jDeleteDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/item/jDeleteDb.php';
    }

}

$item = new Item();
