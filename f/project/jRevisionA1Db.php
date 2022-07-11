<?php

// connection

include '../connection.php';
include '../connection2.php';
// module

$module = 'project';
$action = 'revison';

$cl= 1;
$su = 1;

$c = $_GET["c"];
$i = $_GET["i"];
$a = $_GET["a"];
$b = $_GET["b"];

$dateFa1 = $_POST['dateFa1'];
$dateFa2= $_POST['dateFa2'];

$rubroId = $_POST['rubroId'];
$monto1 = $_POST['monto1'];
$monto2= $_POST['monto2'];
$o = $_POST['observacion'];

    
// insert area donde creo la revison 1
if ($a == 1){
$rv = 1;    
  $insert = $master -> prepare ("
        INSERT INTO revisionA1
        (revisionN, projectId, clientId, subscriberId,  dateFa1, dateFa2)
        VALUES
        (?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiss",
    $rv, $c, $cl, $su,  $dateFa1, $dateFa2
    );

    $insert -> execute();

    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view

    echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
    
    
}

// insert area donde actualizo la revison 1
  if ($a == 11){
$rv = 1;        


  // update
$update = $master -> prepare ("
    UPDATE revisionA1
    SET
    dateFa1 = ?,
    dateFa2 = ?
    WHERE
    projectId = ? AND revisionN = ?  
");	

$update -> bind_param (
    "ssii",
    $dateFa1, $dateFa2, $c, $rv
);

$update -> execute();



    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view
    
 echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
        
      
      
  }
  
  // insert area donde creo la revison 2
if ($a == 2){
$rv = 2;    
  $insert = $master -> prepare ("
        INSERT INTO revisionA1
        (revisionN, projectId, clientId, subscriberId,  dateFa1, dateFa2)
        VALUES
        (?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiss",
    $rv, $c, $cl, $su,  $dateFa1, $dateFa2
    );

    $insert -> execute();

    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view

    echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
    
    
}

// insert area donde actualizo la revison 2
  if ($a == 22){
$rv = 2;        


  // update
$update = $master -> prepare ("
    UPDATE revisionA1
    SET
    dateFa1 = ?,
    dateFa2 = ?
    WHERE
    projectId = ? AND revisionN = ?  
");	

$update -> bind_param (
    "ssii",
    $dateFa1, $dateFa2, $c, $rv
);

$update -> execute();



    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view
    
 echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
        
      
      
  }
  
  
    // insert area donde creo la revison 3
if ($a == 3){
$rv = 3;    
  $insert = $master -> prepare ("
        INSERT INTO revisionA1
        (revisionN, projectId, clientId, subscriberId,  dateFa1, dateFa2)
        VALUES
        (?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiss",
    $rv, $c, $cl, $su,  $dateFa1, $dateFa2
    );

    $insert -> execute();

    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view

    echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
    
    
}

// insert area donde actualizo la revison 3
  if ($a == 33){
$rv = 3;        


  // update
$update = $master -> prepare ("
    UPDATE revisionA1
    SET
    dateFa1 = ?,
    dateFa2 = ?
    WHERE
    projectId = ? AND revisionN = ?  
");	

$update -> bind_param (
    "ssii",
    $dateFa1, $dateFa2, $c, $rv
);

$update -> execute();



    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view
    
 echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
        
      
      
  }
  
 // insert area donde creo la revison 5
if ($a == 5){
$rv = 5;    
  $insert = $master -> prepare ("
        INSERT INTO revisionA1
        (revisionN, projectId, clientId, subscriberId,  dateFa1, dateFa2)
        VALUES
        (?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiss",
    $rv, $c, $cl, $su,  $dateFa1, $dateFa2
    );

    $insert -> execute();

    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view

    echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
    
    
}

// insert area donde actualizo la revison 5
  if ($a == 55){
$rv = 5;        


  // update
$update = $master -> prepare ("
    UPDATE revisionA1
    SET
    dateFa1 = ?,
    dateFa2 = ?
    WHERE
    projectId = ? AND revisionN = ?  
");	

$update -> bind_param (
    "ssii",
    $dateFa1, $dateFa2, $c, $rv
);

$update -> execute();



    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view
    
 echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
        
      
      
  }  
   
    // insert area donde creo la revison 6
if ($a == 6){
$rv = 6;    
  $insert = $master -> prepare ("
        INSERT INTO revisionA1
        (revisionN, projectId, clientId, subscriberId,  dateFa1, dateFa2)
        VALUES
        (?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiss",
    $rv, $c, $cl, $su,  $dateFa1, $dateFa2
    );

    $insert -> execute();

    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view

    echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
    
    
}

// insert area donde actualizo la revison 6
  if ($a == 66){
$rv = 6;        


  // update
$update = $master -> prepare ("
    UPDATE revisionA1
    SET
    dateFa1 = ?,
    dateFa2 = ?
    WHERE
    projectId = ? AND revisionN = ?  
");	

$update -> bind_param (
    "ssii",
    $dateFa1, $dateFa2, $c, $rv
);

$update -> execute();



    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view
    
 echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
        
      
      
  }  
   
   
   // insert area donde creo la revison 7
if ($a == 7){
$rv = 7;    
  $insert = $master -> prepare ("
        INSERT INTO revisionA1
        (revisionN, projectId, clientId, subscriberId,  dateFa1, dateFa2)
        VALUES
        (?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiss",
    $rv, $c, $cl, $su,  $dateFa1, $dateFa2
    );

    $insert -> execute();

    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view

    echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
    
    
}

// insert area donde actualizo la revison 7
  if ($a == 77){
$rv = 7;        


  // update
$update = $master -> prepare ("
    UPDATE revisionA1
    SET
    dateFa1 = ?,
    dateFa2 = ?
    WHERE
    projectId = ? AND revisionN = ?  
");	

$update -> bind_param (
    "ssii",
    $dateFa1, $dateFa2, $c, $rv
);

$update -> execute();



    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view
    
 echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
        
      
      
  }  

   // insert area donde creo la revison 8
if ($a == 8){
$rv = 8;    
  $insert = $master -> prepare ("
        INSERT INTO revisionA1
        (revisionN, projectId, clientId, subscriberId,  dateFa1, dateFa2)
        VALUES
        (?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiss",
    $rv, $c, $cl, $su,  $dateFa1, $dateFa2
    );

    $insert -> execute();

    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view

    echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
    
    
}

// insert area donde actualizo la revison 8
  if ($a == 88){
$rv = 8;        


  // update
$update = $master -> prepare ("
    UPDATE revisionA1
    SET
    dateFa1 = ?,
    dateFa2 = ?
    WHERE
    projectId = ? AND revisionN = ?  
");	

$update -> bind_param (
    "ssii",
    $dateFa1, $dateFa2, $c, $rv
);

$update -> execute();



    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view
    
 echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
        
      
      
  }     
  
   // insert area donde creo la revison 9
if ($a == 9){
$rv = 9;    
  $insert = $master -> prepare ("
        INSERT INTO revisionA1
        (revisionN, projectId, clientId, subscriberId,  dateFa1, dateFa2)
        VALUES
        (?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiss",
    $rv, $c, $cl, $su,  $dateFa1, $dateFa2
    );

    $insert -> execute();

    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view

    echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
    
    
}

// insert area donde actualizo la revison 9
  if ($a == 99){
$rv = 9;        


  // update
$update = $master -> prepare ("
    UPDATE revisionA1
    SET
    dateFa1 = ?,
    dateFa2 = ?
    WHERE
    projectId = ? AND revisionN = ?  
");	

$update -> bind_param (
    "ssii",
    $dateFa1, $dateFa2, $c, $rv
);

$update -> execute();



    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view
    
 echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
        
      
      
  }   
  
   // insert area donde creo la revison 10
if ($a == 10){
$rv = 10;    
  $insert = $master -> prepare ("
        INSERT INTO revisionA1
        (revisionN, projectId, clientId, subscriberId,  dateFa1, dateFa2)
        VALUES
        (?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiss",
    $rv, $c, $cl, $su,  $dateFa1, $dateFa2
    );

    $insert -> execute();

    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view

    echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
    
    
}

// insert area donde actualizo la revison 10
  if ($a == 1010){
$rv = 10;        


  // update
$update = $master -> prepare ("
    UPDATE revisionA1
    SET
    dateFa1 = ?,
    dateFa2 = ?
    WHERE
    projectId = ? AND revisionN = ?  
");	

$update -> bind_param (
    "ssii",
    $dateFa1, $dateFa2, $c, $rv
);

$update -> execute();



    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view
    
 echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
        
      
      
  }   
 
    // insert area donde creo la revison 11
if ($a == 111){
$rv = 11;    
  $insert = $master -> prepare ("
        INSERT INTO revisionA1
        (revisionN, projectId, clientId, subscriberId,  dateFa1, dateFa2)
        VALUES
        (?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiss",
    $rv, $c, $cl, $su,  $dateFa1, $dateFa2
    );

    $insert -> execute();

    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view

    echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
    
    
}

// insert area donde actualizo la revison 11
  if ($a == 1111){
$rv = 11;        


  // update
$update = $master -> prepare ("
    UPDATE revisionA1
    SET
    dateFa1 = ?,
    dateFa2 = ?
    WHERE
    projectId = ? AND revisionN = ?  
");	

$update -> bind_param (
    "ssii",
    $dateFa1, $dateFa2, $c, $rv
);

$update -> execute();



    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view
    
 echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
        
      
      
  }        
  
  
    // insert area donde creo la revison 12
if ($a == 12){
$rv = 12;    
  $insert = $master -> prepare ("
        INSERT INTO revisionA1
        (revisionN, projectId, clientId, subscriberId,  dateFa1, dateFa2)
        VALUES
        (?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiss",
    $rv, $c, $cl, $su,  $dateFa1, $dateFa2
    );

    $insert -> execute();

    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view

    echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
    
    
}

// insert area donde actualizo la revison 12
  if ($a == 1212){
$rv = 12;        


  // update
$update = $master -> prepare ("
    UPDATE revisionA1
    SET
    dateFa1 = ?,
    dateFa2 = ?
    WHERE
    projectId = ? AND revisionN = ?  
");	

$update -> bind_param (
    "ssii",
    $dateFa1, $dateFa2, $c, $rv
);

$update -> execute();

    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view
    
 echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
        
      
      
  }          
    
// insert area activo
if ($b == 1){
$ta = 1;
  $insert = $master -> prepare ("
        INSERT INTO ractivo
        (projectId, clientId, subscriberId, rubroId, monto1, monto2, observacion, tipoId)
        VALUES
        (?,?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiiisi",
    $c, $cl, $su, $rubroId, $monto1, $monto2, $o, $ta 
    );

    $insert -> execute();




    $id = $master -> insert_id;
    
    
    
    
    
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();
    
    if ($rubroId == 1)
    {
      $srubroStatus = 0;
      $srubro = 10;
      $tipoId = 1;
        $ta = 1;
      $f1 = 1;
      $f2 = 2;
      $f3 = 3;
      $f4 = 4;
      $f5 = 5;
      $f6 = 6;
          
      
      while ($srubro <= 18) {
          
      $insert = $connection -> prepare ("
      INSERT INTO test
      (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus,frecuencia )
      VALUES
      (?,?,?,?,?,?,?,?,?,?)
  ");

  $insert -> bind_param (
      "iiiiiiiiii",
  $c, $cl, $su, $rubroId, $monto1, $monto2, $tipoId, $srubro, $srubroStatus, $f1
  );

  $insert -> execute();
  
  $insert2 = $connection -> prepare ("
      INSERT INTO test
      (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus,frecuencia )
      VALUES
      (?,?,?,?,?,?,?,?,?,?)
  ");

  $insert2 -> bind_param (
      "iiiiiiiiii",
  $c, $cl, $su, $rubroId, $monto1, $monto2, $tipoId, $srubro, $srubroStatus, $f2
  );

  $insert2 -> execute();
  $insert3 = $connection -> prepare ("
      INSERT INTO test
      (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus,frecuencia )
      VALUES
      (?,?,?,?,?,?,?,?,?,?)
  ");

  $insert3 -> bind_param (
      "iiiiiiiiii",
  $c, $cl, $su, $rubroId, $monto1, $monto2, $tipoId, $srubro, $srubroStatus, $f3
  );

  $insert3 -> execute();
  $insert4 = $connection -> prepare ("
      INSERT INTO test
      (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus,frecuencia )
      VALUES
      (?,?,?,?,?,?,?,?,?,?)
  ");

  $insert4 -> bind_param (
      "iiiiiiiiii",
  $c, $cl, $su, $rubroId, $monto1, $monto2, $tipoId, $srubro, $srubroStatus, $f4
  );

  $insert4 -> execute();
 $insert5 = $connection -> prepare ("
      INSERT INTO test
      (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus,frecuencia )
      VALUES
      (?,?,?,?,?,?,?,?,?,?)
  ");

  $insert5 -> bind_param (
      "iiiiiiiiii",
  $c, $cl, $su, $rubroId, $monto1, $monto2, $tipoId, $srubro, $srubroStatus, $f5
  );

  $insert5 -> execute();
    $insert6 = $connection -> prepare ("
      INSERT INTO test
      (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus,frecuencia )
      VALUES
      (?,?,?,?,?,?,?,?,?,?)
  ");

  $insert6 -> bind_param (
      "iiiiiiiiii",
  $c, $cl, $su, $rubroId, $monto1, $monto2, $tipoId, $srubro, $srubroStatus, $f6
  );

  $insert6 -> execute();
  
  
  $srubro = $srubro + 1 ;     

    }
  }

  if ($rubroId == 2)
  {
    $srubroStatus = 0;
    $srubro = 19;
    $tipoId = 1;
    while ($srubro <= 34) {
        
    $insert = $connection -> prepare ("
    INSERT INTO test
    (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus )
    VALUES
    (?,?,?,?,?,?,?,?,?)
");

$insert -> bind_param (
    "iiiiiiiii",
$c, $cl, $su, $rubroId, $monto1, $monto2, $tipoId, $srubro, $srubroStatus
);

$insert -> execute();
$srubro = $srubro + 1 ;     

  }
} 
if ($rubroId == 3)
{
  $srubroStatus = 0;
  $srubro = 35;
  $tipoId = 1;
  while ($srubro <= 37) {
      
  $insert = $connection -> prepare ("
  INSERT INTO test
  (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus )
  VALUES
  (?,?,?,?,?,?,?,?,?)
");

$insert -> bind_param (
  "iiiiiiiii",
$c, $cl, $su, $rubroId, $monto1, $monto2, $tipoId, $srubro, $srubroStatus
);

$insert -> execute();
$srubro = $srubro + 1 ;     

}
} 

if ($rubroId == 4)
{
  $srubroStatus = 0;
  $srubro = 38;
  $tipoId = 1;
  while ($srubro <= 47) {
      
  $insert = $connection -> prepare ("
  INSERT INTO test
  (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus )
  VALUES
  (?,?,?,?,?,?,?,?,?)
");

$insert -> bind_param (
  "iiiiiiiii",
$c, $cl, $su, $rubroId, $monto1, $monto2, $tipoId, $srubro, $srubroStatus
);

$insert -> execute();
$srubro = $srubro + 1 ;     
}
}

if ($rubroId == 5)
{
  $srubroStatus = 0;
  $srubro = 48;
  $tipoId = 1;
  while ($srubro <= 53) {
      
  $insert = $connection -> prepare ("
  INSERT INTO test
  (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus )
  VALUES
  (?,?,?,?,?,?,?,?,?)
");

$insert -> bind_param (
  "iiiiiiiii",
$c, $cl, $su, $rubroId, $monto1, $monto2, $tipoId, $srubro, $srubroStatus
);

$insert -> execute();
$srubro = $srubro + 1 ;     
}
}

if ($rubroId == 6)
{
  $srubroStatus = 0;
  $srubro = 54;
  $tipoId = 1;
  while ($srubro <= 58) {
      
  $insert = $connection -> prepare ("
  INSERT INTO test
  (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus )
  VALUES
  (?,?,?,?,?,?,?,?,?)
");

$insert -> bind_param (
  "iiiiiiiii",
$c, $cl, $su, $rubroId, $monto1, $monto2, $tipoId, $srubro, $srubroStatus
);

$insert -> execute();
$srubro = $srubro + 1 ;     
}
}
if ($rubroId == 7)
{
  $srubroStatus = 0;
  $srubro = 59;
  $tipoId = 1;
  while ($srubro <= 59) {
      
  $insert = $connection -> prepare ("
  INSERT INTO test
  (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus )
  VALUES
  (?,?,?,?,?,?,?,?,?)
");

$insert -> bind_param (
  "iiiiiiiii",
$c, $cl, $su, $rubroId, $monto1, $monto2, $tipoId, $srubro, $srubroStatus
);

$insert -> execute();
$srubro = $srubro + 1 ;     
}
}



    // view

    echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
}
// insert area pasivo
if ($b == 2){
    $tp = 2;
  $insert = $master -> prepare ("
        INSERT INTO ractivo
        (projectId, clientId, subscriberId, rubroId, monto1, monto2, observacion,tipoId)
        VALUES
        (?,?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiiisi",
    $c, $cl, $su, $rubroId, $monto1, $monto2, $o, $tp
    );

    $insert -> execute();

    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view

    if ($rubroId == 8)
    {
      $srubroStatus = 0;
      $srubro = 60;
      while ($srubro <= 67) {
          
      $insert = $connection -> prepare ("
      INSERT INTO test
      (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus )
      VALUES
      (?,?,?,?,?,?,?,?,?)
    ");
    
    $insert -> bind_param (
      "iiiiiiiii",
    $c, $cl, $su, $rubroId, $monto1, $monto2, $tp, $srubro, $srubroStatus
    );
    
    $insert -> execute();
    $srubro = $srubro + 1 ;     
    }
    }
    if ($rubroId == 9)
    {
      $srubroStatus = 0;
      $srubro = 68;
      while ($srubro <= 71) {
          
      $insert = $connection -> prepare ("
      INSERT INTO test
      (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus )
      VALUES
      (?,?,?,?,?,?,?,?,?)
    ");
    
    $insert -> bind_param (
      "iiiiiiiii",
    $c, $cl, $su, $rubroId, $monto1, $monto2, $tp, $srubro, $srubroStatus
    );
    
    $insert -> execute();
    $srubro = $srubro + 1 ;     
    }
    }
    if ($rubroId == 10)
    {
      $srubroStatus = 0;
      $srubro = 72;
      while ($srubro <= 76) {
          
      $insert = $connection -> prepare ("
      INSERT INTO test
      (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus )
      VALUES
      (?,?,?,?,?,?,?,?,?)
    ");
    
    $insert -> bind_param (
      "iiiiiiiii",
    $c, $cl, $su, $rubroId, $monto1, $monto2, $tp, $srubro, $srubroStatus
    );
    
    $insert -> execute();
    $srubro = $srubro + 1 ;     
    }
    }
    if ($rubroId == 11)
    {
      $srubroStatus = 0;
      $srubro = 77;
      while ($srubro <= 78) {
          
      $insert = $connection -> prepare ("
      INSERT INTO test
      (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus )
      VALUES
      (?,?,?,?,?,?,?,?,?)
    ");
    
    $insert -> bind_param (
      "iiiiiiiii",
    $c, $cl, $su, $rubroId, $monto1, $monto2, $tp, $srubro, $srubroStatus
    );
    
    $insert -> execute();
    $srubro = $srubro + 1 ;     
    }
    }
    
    if ($rubroId == 12)
    {
      $srubroStatus = 0;
      $srubro = 79;
      while ($srubro <= 85) {
          
      $insert = $connection -> prepare ("
      INSERT INTO test
      (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus )
      VALUES
      (?,?,?,?,?,?,?,?,?)
    ");
    
    $insert -> bind_param (
      "iiiiiiiii",
    $c, $cl, $su, $rubroId, $monto1, $monto2, $tp, $srubro, $srubroStatus
    );
    
    $insert -> execute();
    $srubro = $srubro + 1 ;     
    }
    }

    echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
    
    
}
// insert area patrimonio
if ($b == 3){
  $tpa = 3;    
  $insert = $master -> prepare ("
        INSERT INTO ractivo
        (projectId, clientId, subscriberId, rubroId, monto1, monto2, observacion, tipoId)
        VALUES
        (?,?,?,?,?,?,?,?)
    ");

    $insert -> bind_param (
        "iiiiiisi",
    $c, $cl, $su, $rubroId, $monto1, $monto2, $o, $tpa
    );

    $insert -> execute();

    $id = $master -> insert_id;
    
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();
    if ($rubroId == 13)
    {
      $srubroStatus = 0;
      $srubro = 86;
      while ($srubro <= 87) {
          
      $insert = $connection -> prepare ("
      INSERT INTO test
      (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus )
      VALUES
      (?,?,?,?,?,?,?,?,?)
    ");
    
    $insert -> bind_param (
      "iiiiiiiii",
    $c, $cl, $su, $rubroId, $monto1, $monto2, $tpa, $srubro, $srubroStatus
    );
    
    $insert -> execute();
    $srubro = $srubro + 1 ;     
    }
    }
    if ($rubroId == 14)
    {
      $srubroStatus = 0;
      $srubro = 88;
      while ($srubro <= 90) {
          
      $insert = $connection -> prepare ("
      INSERT INTO test
      (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus )
      VALUES
      (?,?,?,?,?,?,?,?,?)
    ");
    
    $insert -> bind_param (
      "iiiiiiiii",
    $c, $cl, $su, $rubroId, $monto1, $monto2, $tpa, $srubro, $srubroStatus
    );
    
    $insert -> execute();
    $srubro = $srubro + 1 ;     
    }
    }
    if ($rubroId == 15)
    {
      $srubroStatus = 0;
      $srubro = 91;
      while ($srubro <= 95) {
          
      $insert = $connection -> prepare ("
      INSERT INTO test
      (projectId, clientId, subscriberId, rubroId, monto1, monto2, tipoId, srubroId, srubroStatus )
      VALUES
      (?,?,?,?,?,?,?,?,?)
    ");
    
    $insert -> bind_param (
      "iiiiiiiii",
    $c, $cl, $su, $rubroId, $monto1, $monto2, $tpa, $srubro, $srubroStatus
    );
    
    $insert -> execute();
    $srubro = $srubro + 1 ;     
    }
    }
    // view

    echo "<script> window.location='../c/{$module}.php?m=question&p=p&c={$c}&i={$i}'</script>";
    
    
}
    
    