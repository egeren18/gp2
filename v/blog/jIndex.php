<?php 
    
    $n = $d;
   
   switch ($n) {
   
       case '1':
        
           require_once 'jIndex1.php';
           break;
   
       case '2':
       
           require_once 'jIndex2.php';
           break;
   
       case '3':
       
           require_once 'jIndex3.php';
           break;
   
   
       default:
           require_once 'jIndex4.php';
           break;
   }
       