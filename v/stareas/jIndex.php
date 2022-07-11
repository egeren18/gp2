<?php 

$h = $_GET["h"];
if($h != 1 && $h != 2 ) {
 $n = $_SESSION["userId"];
   
   switch ($n) {
   
       case '1':
        
           require_once 'jIndex1.php';
           break;
   
       case '2':
       
           require_once 'jIndex1.php';
           break;
   
   
   
       default:
           require_once 'jIndex2.php';
           break;
   }
   }else{
   

   
      switch ($h) {
   
       case '1':
        
           require_once 'jIndex3.php';
           break;
   
       case '2':
       
           require_once 'jIndex2.php';
           break;
           
          default:
           require_once 'jIndex2.php';
           break;
       
        
    }
    
   }
