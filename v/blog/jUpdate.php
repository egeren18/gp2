<?php 
    
    $n = $d;
   
   switch ($n) {
   
       case '1':
        
           require_once 'jUpdate1.php';
           break;
   
       case '2':
       
           require_once 'jUpdate2.php';
           break;
   
       case '3':
       
           require_once 'jUpdate3.php';
           break;
   
   
       default:
           require_once 'jUpdate4.php';
           break;
   }
       