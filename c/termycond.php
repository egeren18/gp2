<?php

session_start();

// module

$module = "termycond";
$moduleId =29;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/termycond.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();

                switch ($mode) {
                    case 'index':
                        $termycond -> jIndex($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'end':
                        $termycond -> jEnd($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'team':
                        $termycond -> jTeam($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'teamc':
                        $termycond -> jTeamc($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'teamDelete':
                        $termycond -> jTeamDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'create':
                        $termycond -> jCreate($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'createt':
                        $termycond -> jCreatet($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create2':
                        $termycond -> jCreate2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'create3':
                        $termycond -> jCreate3($moduleId);
                        $main -> jFooter();
                    break;
                    case 'edit':
                        $termycond -> jEdit($moduleId);
                        $main -> jFooter();
                    break;
                    case 'editDb1':
                        $termycond -> jEditDb1($moduleId);
                        $main -> jFooter();
                    break;
                    case 'editDb2':
                        $termycond -> jEditDb2($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'editDb3':
                        $termycond -> jEditDb3($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'editDb4':
                        $termycond -> jEditDb4($moduleId);
                        $main -> jFooter();
                    break;

                    case 'createDb':
                        $termycond -> jCreateDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'list':
                        $termycond -> jList($moduleId);
                        $main -> jFooter();
                    break;
                    
                     case 'createDb1':
                        $termycond -> jCreateDb1($moduleId);
                        $main -> jFooter();
                    break;
                    case 'createDb11':
                        $termycond -> jCreateDb11($moduleId);
                        $main -> jFooter();
                    break;
                    case 'createDb111':
                        $termycond -> jCreateDb111($moduleId);
                        $main -> jFooter();
                    break;
                    case 'createDb2':
                        $termycond -> jCreateDb2($moduleId);
                        $main -> jFooter();
                    break;
                    case 'createDb22':
                        $termycond -> jCreateDb22($moduleId);
                        $main -> jFooter();
                    break;
                    case 'createDb222':
                        $termycond -> jCreateDb222($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'createDb3':
                        $termycond -> jCreateDb3($moduleId);
                        $main -> jFooter();
                    break;
                    case 'createDb33':
                        $termycond -> jCreateDb33($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'createDb4':
                        $termycond -> jCreateDb4($moduleId);
                        $main -> jFooter();
                    break;
                    case 'createDb44':
                        $termycond -> jCreateDb44($moduleId);
                        $main -> jFooter();
                    break;

                    case 'update':
                        $termycond -> jUpdate($moduleId);
                        $main -> jFooter();
                    break;
                    case 'update2':
                        $termycond -> jUpdate2($moduleId);
                        $main -> jFooter();
                    break;

                    case 'updateDb1':
                        $termycond -> jUpdateDb1($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb2':
                        $termycond -> jUpdateDb2($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb3':
                        $termycond -> jUpdateDb3($moduleId);
                        $main -> jFooter();
                    break;
                    case 'updateDb4':
                        $termycond -> jUpdateDb4($moduleId);
                        $main -> jFooter();
                    break;

                    case 'delete':
                        $termycond -> jDelete($moduleId);
                        $main -> jFooter();
                    break;

                    case 'deleteDb':
                        $termycond -> jDeleteDb($moduleId);
                        $main -> jFooter();
                    break;
                    
                    case 'read':
                        $termycond -> jRead($moduleId);
                        $main -> jFooter();
                    break;

                    default:
                        $main -> jError();
                        $main -> jFooter();
                }