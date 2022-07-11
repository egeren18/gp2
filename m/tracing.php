<?php

class Tracing {

    public static function jList() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/tracing/jList.php';
    }

    public static function jDetail() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/tracing/jDetail.php';
    }

    public static function jUpdateTracingDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/tracing/jUpdateTracingDb.php';
    }

    public static function jAddPlanningDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/tracing/jAddPlanningDb.php';
    }

    public static function jUpdatePlanning() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/tracing/jUpdatePlanning.php';
    }

    public static function jUpdatePlanningDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/tracing/jUpdatePlanningDb.php';
    }

    public static function jDeletePlanningDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/tracing/jDeletePlanningDb.php';
    }

    public static function jAddSchemeDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/tracing/jAddSchemeDb.php';
    }

    public static function jUpdateScheme() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/tracing/jUpdateScheme.php';
    }

    public static function jUpdateSchemeDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/tracing/jUpdateSchemeDb.php';
    }

    public static function jDeleteSchemeDb() {
        
        /*
         * Verificará si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
         */
        require_once '../f/tracing/jDeleteSchemeDb.php';
    }

}

$tracing = new Tracing();
