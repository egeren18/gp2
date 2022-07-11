<?php

class Consulta {

    public static function jIndex($moduleId) {
        require_once '../f/consulta/jIndex.php';
    }

    public static function jCreate($moduleId) {
        require_once '../f/consulta/jCreate.php';
    }

    public static function jCreateDb($moduleId) {
        require_once '../f/consulta/jCreateDb.php';
    }
    public static function jCreateDbR($moduleId) {
        require_once '../f/consulta/jCreateDbR.php';
    }

    public static function jRead($moduleId) {
        require_once '../f/consulta/jRead.php';
    }
    
    public static function jUpdate($moduleId) {
        require_once '../f/consulta/jUpdate.php';
    }

    public static function jUpdateDb($moduleId) {
        require_once '../f/consulta/jUpdateDb.php';
    }

    public static function jUpdateDbR($moduleId) {
        require_once '../f/consulta/jUpdateDbR.php';
    }

    public static function jDelete($moduleId) {
        require_once '../f/consulta/jDelete.php';
    }

    public static function jDeleteDb($moduleId) {
        require_once '../f/consulta/jDeleteDb.php';
    }

}

$consulta = new Consulta();
