<?php

// connection

include '../connection.php';

// module

$module = 'pac';
$action = 'add';
//var
//GET
$tsacId = $_GET["tsacId"];
$cuestionarioId = 1;
// POST
$cacId = $_POST["cacId"];
$t = $_POST["pacText"];
$pacName = $_POST["pacName"];
$p = $_POS["pacText"];
$d = date('d-m-y / g:i a');

$risk = $_POST['risk'] == true ? 1 : NULL;

$v =$tsacId.'_'.$cuestionarioId; 
// mandar a base de datos


 $_ccu = mysqli_query($tipod, "
            SELECT * FROM cuestionario ORDER BY mId DESC LIMIT 1
        ");  
$ccu = $_ccu -> fetch_object();
$ccv  = $ccu -> version;
$vv = $ccv + 1;

$cvv ='1.'.$vv;


 $_cma = mysqli_query($tipomc, "
            SELECT * FROM tipo_de_cuestionario_$tsacId
        ");  
        
        
$vcontador = 0;
$jj = 1 ;
  $insert = $tipod -> prepare ("
            INSERT INTO cuestionario
            (cacId ,pacName, pap, date, risk, access, version, v )
            VALUES
            (?,?,?,?,?,?,?,?)
        ");

        $insert -> bind_param (
            "isssiiis",
            $cacId, $pacName, $t, $d, $risk, $jj, $vv, $cvv
        );

        $insert -> execute();

        $id = mysqli_insert_id($tipod);

while($m = $_cma -> fetch_object()){
    $vcontador++;
    $jAccess = 0;
  $insert = $tipod -> prepare ("
            INSERT INTO cuestionario1_$vcontador
            (cacId ,pacName, pap, date, risk, access, v )
            VALUES
            (?,?,?,?,?,?,?)
        ");

        $insert -> bind_param (
            "isssiis",
            $cacId, $pacName, $t, $d, $risk, $jAccess, $cvv
        );

        $insert -> execute();

        foreach ($_POST['preguntasC1'] as $key => $value) {
        
         $_ccuu = mysqli_query($tipod, "
            SELECT * FROM prisk 
            WHERE  priskId = '" . $value . "'
        ");

         $ccuu = $_ccuu -> fetch_object();
         $priskId  = $ccuu -> priskId;
         $priskName  = $ccuu -> priskName;
         $priskText  = $ccuu -> priskText;
         $priskDate  = $ccuu -> date;
         $priskversion  = $ccuu -> version;
      
            $pAccess = isset($_POST['pc'][$value]) == true ? 1 : 0;
    
            $insert = $tipod -> prepare ("
                INSERT INTO prisk1_$vcontador
                (priskId , mId, priskName, priskText, date, access, version, v )
                VALUES
                (?,?,?,?,?,?,?,?)
    ");
    
            $insert -> bind_param (
                "iisssiis",
                $priskId, $id, $priskName, $priskText, $priskDate, $pAccess, $priskversion, $pAccess
            );
    
            $insert -> execute();
    
        }


}





    echo "<script> window.location='../c/{$module}.php?m=index&n=added&tsacId={$tsacId}'</script>";