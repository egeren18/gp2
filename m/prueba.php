<?php

class Prueba {

    public static function jList() {
        require_once '../f/prueba/jList.php';
    }

    public static function jAdd() {
        require_once '../f/prueba/jAdd.php';
    }
	public static function jAddRubro() {
        require_once '../f/prueba/jAddRubro.php';
    }
	public static function jAddsRubro() {
        require_once '../f/prueba/jAddsRubro.php';
    }
    public static function jAddDb() {
        require_once '../f/prueba/jAddDb.php';
    }

    public static function jUpdate() {
        require_once '../f/prueba/jUpdate.php';
    }

    public static function jUpdateDb() {
        require_once '../f/prueba/jUpdateDb.php';
    }

    public static function jDelete() {
        require_once '../f/prueba/jDelete.php';
    }

    public static function jDeleteDb() {
        require_once '../f/prueba/jDeleteDb.php';
    }

}

$prueba = new Prueba();
