<?php

class Requerimiento {

    public static function jList() {
        require_once '../f/requerimiento/jList.php';
    }

    public static function jAdd() {
        require_once '../f/requerimiento/jAdd.php';
    }
	public static function jAddRubro() {
        require_once '../f/requerimiento/jAddRubro.php';
    }
	public static function jAddsRubro() {
        require_once '../f/requerimiento/jAddsRubro.php';
    }
    public static function jAddDb() {
        require_once '../f/requerimiento/jAddDb.php';
    }

    public static function jUpdate() {
        require_once '../f/requerimiento/jUpdate.php';
    }

    public static function jUpdateDb() {
        require_once '../f/requerimiento/jUpdateDb.php';
    }

    public static function jDelete() {
        require_once '../f/requerimiento/jDelete.php';
    }

    public static function jDeleteDb() {
        require_once '../f/requerimiento/jDeleteDb.php';
    }

}

$requerimiento = new Requerimiento();
