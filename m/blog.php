<?php

class Blog {

    public static function jIndex($moduleId) {
        require_once '../f/blog/jIndex.php';
    }

    public static function jCreate($moduleId) {
        require_once '../f/blog/jCreate.php';
    }

    public static function jCreateDb($moduleId) {
        require_once '../f/blog/jCreateDb.php';
    }
    public static function jCreateDbR($moduleId) {
        require_once '../f/blog/jCreateDbR.php';
    }

    public static function jRead($moduleId) {
        require_once '../f/blog/jRead.php';
    }
    
    public static function jUpdate($moduleId) {
        require_once '../f/blog/jUpdate.php';
    }

    public static function jUpdateDb($moduleId) {
        require_once '../f/blog/jUpdateDb.php';
    }

    public static function jUpdateDbR($moduleId) {
        require_once '../f/blog/jUpdateDbR.php';
    }

    public static function jDelete($moduleId) {
        require_once '../f/blog/jDelete.php';
    }

    public static function jDeleteDb($moduleId) {
        require_once '../f/blog/jDeleteDb.php';
    }

}

$blog = new Blog();
