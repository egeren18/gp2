<?php

session_start();

// module

$module = "project";
$moduleId = 28;

// connection

include '../connection.php';
include '../allow.php';

// model

require_once '../m/main.php';
require_once '../m/project.php';

// mode

$mode = $_GET["m"];

// view

$main -> jTimer();
$main -> jCheckSession();
$main -> jHeader();
$main -> jNavbar();


switch ($_SESSION["userTypeId"]) {
    
    case 2:

        switch ($mode) {


            case 'questionS':
                $project -> jQuestionS();
                $main -> jFooter();
                break;
                
            case 'index':
                $project -> jIndex();
                $main -> jFooter();
                break;
                
            case 'asignar':
                $project -> jAsignar();
                $main -> jFooter();
                 break;

            case 'updateAsignar':
                $project -> jUpdateAsignar();
                $main -> jFooter();
                break;
                
            case 'updateAsignarDb':
                $project -> jUpdateAsignarDb();
                $main -> jFooter();
                break;
            case 'updateAsignarp':
                $project -> jUpdateAsignarp();
                $main -> jFooter();
                break;
                
            case 'updateAsignarpDb':
                $project -> jUpdateAsignarpDb();
                $main -> jFooter();
                break;

            case 'add':
                $project -> jAdd();
                $main -> jFooter();
                break;
                
            case 'createt':
                $project -> jCreatet();
                $main -> jFooter();
                break;
                
            case 'createDb':
                $project -> jCreateDb();
                $main -> jFooter();
                break;

            case 'detail':
                $project -> jDetail();
                $main -> jFooter();
                break;

            case 'detailDb':
                $project -> jDetailDb();
                $main -> jFooter();
                break;
            
            case 'projectTeam':
                $project -> jProjectTeam();
                $main -> jFooter();
                break;
            
            case 'insertProjectTeamDb':
                $project -> jInsertProjectTeamDb();
                $main -> jFooter();
                break;
            
            case 'updateProjectTeam':
                $project -> jUpdateProjectTeam();
                $main -> jFooter();
                break;
            
            case 'updateProjectTeamDb':
                $project -> jUpdateProjectTeamDb();
                $main -> jFooter();
                break;
            
            case 'deleteProjectTeam':
                $project -> jDeleteProjectTeam();
                $main -> jFooter();
                break;
            
            case 'deleteProjectTeamDb':
                $project -> jDeleteProjectTeamDb();
                $main -> jFooter();
                break;
            
            case 'planning':
                $project -> jPlanning();
                $main -> jFooter();
                break;
            
            case 'strategy':
                $project -> jStrategy();
                $main -> jFooter();
                break;
            
            case 'execution':
                $project -> jExecution();
                $main -> jFooter();
                break;
            
            case 'conclusion':
                $project -> jConclusion();
                $main -> jFooter();
                break;
            
            case 'question':
                $project -> jQuestion();
                $main -> jFooter();
                break;
            
            case 'questionDb':
                $project -> jQuestionDb();
                $main -> jFooter();
                break;
                
            case 'questionEditDb':
                $project -> jQuestionEditDb();
                $main -> jFooter();
                break;
                
            case 'execution2':
                $project -> jExecution2();
                $main -> jFooter();
                break;  
            case 'execution3':
                $project -> jExecution3();
                $main -> jFooter();
                break;  
            case 'execution4':
                $project -> jExecution4();
                $main -> jFooter();
                break;  
            case 'execution5':
                $project -> jExecution5();
                $main -> jFooter();
                break;  
            case 'execution6':
                $project -> jExecution6();
                $main -> jFooter();
                break;   
            case 'execution7':
                $project -> jExecution7();
                $main -> jFooter();
                break;  
            case 'execution8':
                $project -> jExecution8();
                $main -> jFooter();
                break;  
            case 'execution9':
                $project -> jExecution9();
                $main -> jFooter();
                break;  
            case 'execution10':
                $project -> jExecution10();
                $main -> jFooter();
                break;  
            case 'execution11':
                $project -> jExecution11();
                $main -> jFooter();
                break; 
            case 'execution12':
                $project -> jExecution12();
                $main -> jFooter();
                break;     
            case 'revisionA1Db':
                $project -> jRevisionA1Db();
                $main -> jFooter();
                break;      
            case 'revision':
                $project -> jRevision();
                $main -> jFooter();
                break;  
                
            case 'revision2':
                $project -> jRevision2();
                $main -> jFooter();
                break;
            case 'revision2Db':
                $project -> jRevision2Db();
                $main -> jFooter();
                break;
                
            case 'revisionA2Db':
                $project -> jRevisionA2Db();
                $main -> jFooter();
                break;      
            case 'revisionAnalitica1Db':
                $project -> jRevisionAnalitica1Db();
                $main -> jFooter();
                break;          
            case 'matrizDb':
                $project -> jMatrizDb();
                $main -> jFooter();
                break;
                
                
            case 'ccreate':
                $project -> aCcreate();
                $main -> jFooter();
                break;
                
            case 'ccreateDb':
                $project -> aCcreateDb();
                $main -> jFooter();
                break;
                
            case 'edit':
                $project -> aEdit();
                $main -> jFooter();
                break;
                
            case 'editDb':
                $project -> aEditDb();
                $main -> jFooter();
                break;
                
            case 'redit':
                $project -> aRedit();
                $main -> jFooter();
                break;
                
            case 'reditDb':
                $project -> aReditDb();
                $main -> jFooter();
                break;    
                
            case 'read':
                $project -> aRead();
                $main -> jFooter();
                break;
                
            case 'readDb':
                $project -> aReadDb();
                $main -> jFooter();
                break;
                
            case 'ra':
                $project -> aRa();
                $main -> jFooter();
                break;    
                
            case 'consultar':
                $project -> aConsultar();
                $main -> jFooter();
                break;    
                
                
                
            default:
                $main -> jError();
                $main -> jFooter();
        }
        break;

    default:
        $main -> jError();
        $main -> jFooter();

}
