<?php

class PuntosControl {

    public static function jList() {
        require_once '../f/puntosControl/jList.php';
    }

    public static function jAdd() {
        require_once '../f/puntosControl/jAdd.php';
    }
	public static function jAddRubro() {
        require_once '../f/puntosControl/jAddRubro.php';
    }
	public static function jAddsRubro() {
        require_once '../f/puntosControl/jAddsRubro.php';
    }
    public static function jAddDb() {
        require_once '../f/puntosControl/jAddDb.php';
    }

    public static function jUpdate() {
        require_once '../f/puntosControl/jUpdate.php';
    }

    public static function jUpdateDb() {
        require_once '../f/puntosControl/jUpdateDb.php';
    }

    public static function jDelete() {
        require_once '../f/puntosControl/jDelete.php';
    }

    public static function jDeleteDb() {
        require_once '../f/puntosControl/jDeleteDb.php';
    }
   
    public static function jconsulta() {
        require_once '../f/puntosControl/jConsulta.php';
    }
    
    public static function jconsultaDb() {
        require_once '../f/puntosControl/jConsultaDb.php';
    }
    
    public static function jVista() {
        require_once '../f/puntosControl/jvista.php';
    }
    
    public static function jVistaDb() {
        require_once '../f/puntosControl/jvistaDb.php';
    }

}

$puntosControl = new PuntosControl();
