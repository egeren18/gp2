<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal admin</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Ticket</a>
            <a href="#!" class="breadcrumb ">Lista</a>
            <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                <i class="material-icons blue-text">help</i>
            </a>
            <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                <i class="material-icons blue-text">forum</i>
            </a>
            <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                <?php echo $_SESSION["userFullName"];?>
            </span>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m12 l12 m-t-5">
            <div class="card blue-grey lighten-5 hoverable">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <span class="blue-text p-l-10">Ticket</span>
                            <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar"><i class="material-icons blue-grey-text">cancel</i></a>
                            <a class="tooltipped right" data-position="left">
                                <i class="material-icons grey-text">add_circle</i>
                            </a>
                        </div>
                    </div>
                    <div class="card m-t-10 m-l-5 m-r-5">
                        <div class="row">
                            <div class="col s12">
                                <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                <div class="col s12 m-t-20">
                                                        <ul class="tabs">
 <li class="tab col l2 blue-grey lighten-5"><a class="active tooltipped" data-position="bottom" data-tooltip="Datos Generales" href="#P1">En proceso</a></li>
  <li class="tab col l2 blue-grey lighten-5"><a class="tooltipped" data-position="bottom" data-tooltip="Persona Contacto" href="#P2">Terminado</a></li>
                                                            
                                                        </ul>
                                                    </div>

                                                    
                                                    <div id="P1" class="col s12 ">
                                                        <div class="m-t-30"></div>
                                                        <div class="row">
                                                        <table id='example' class='display nowrap' style='width:100%'>
                                        <thead>
                                            <tr>
                                                <td>Nro</td>
                                                <td>Suscriptor</td>
                                                <td>Usuario Suscriptor</td>
                                                <td>Ticket</td>
                                                <td>Departamento</td>
                                                <td class="td-block">Fecha</td>
                                                <td>Estatus</td> 
                                                <td>Acci&oacute;n</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($ticket = $_ticket1 -> fetch_object()) {
                                            $de = mysqli_query($master, "
                                                    SELECT * FROM department
                                                    WHERE departmentId = '" . $ticket -> departmentId . "'
                                                ");
                                                $r_de = mysqli_fetch_array($de);
                                                // set fields
                                                $dname = $r_de["departmentName"];?>
                                            <tr>
                                                <td ><?php echo $ticket -> ticketId; ?></td>
                                                <td ><?php echo $ticket -> subs; ?></td>
                                                 <td ><?php echo $ticket -> nombre;?></td>
                                                <td>
                                                    <?php echo $ticket -> ticketName; ?>
                                                </td>
                                                 <td>
                                                    <?php echo $dname; ?>
                                                </td>
                                                <td>
                                                    <?php echo $ticket -> date; ?>
                                                </td>
                                                <td>
                                           <?php if($ticket -> ticketStatus ==3){?><i class="material-icons m-l-10 blue-text ">done_all</i><?php }?>
                                            <?php if($ticket -> ticketStatus ==2){?><i class="material-icons m-l-10 green-text">done</i><?php }?>
                                            <?php if($ticket -> ticketStatus ==1){?><i class="material-icons m-l-10 orange-text">done</i><?php }?>
                                            
                                                </td>
                                                <td>
<a href="../c/ticket.php?m=read&id=<?php  echo $ticket -> ticketId ?>&d=1" class="tooltipped m-l-10" data-position="top" data-tooltip="Consultar"><i class="material-icons blue-text">search</i></a>     

<?php if($ticket -> ticketStatus == 1 ){?>
<a href="../c/ticket.php?m=update&id=<?php  echo $ticket -> ticketId ?>&d=1" class="tooltipped m-l-10" data-position="left" data-tooltip="Modificar">
<i class="material-icons  blue-text">edit</i></a>
<?php }else
{?>
<a href="#" class="tooltipped m-l-10" data-position="left" data-tooltip="Modificar">
<i class="material-icons  grey-text">edit</i></a>

<?php }?>



<a href="#" class="tooltipped m-l-10" data-position="top" data-tooltip="Eliminar"><i class="material-icons grey-text">delete</i></a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                                      

                                                        </div>
                                                        <div class="row">
                                                            <div class="col s12">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="P2" class="col s12">
                                                        <div class="m-t-30"></div>
                                                        
                                                        
                                                        
                                                        <div class="row">
                                                    
                                                        <table id='example2' class='display nowrap' style='width:100%'>
                                        <thead>
                                            <tr>
                                                <td>Nro</td>
                                                <td>Suscriptor</td>
                                                <td>Usuario Suscriptor</td>
                                                <td>Ticket</td>
                                                  <td>Departamento</td>
                                                <td class="td-block">Fecha</td>
                                                <td>Estatus</td> 
                                                <td>Acci&oacute;n</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($ticket = $_ticket2 -> fetch_object()) {
                                            $de = mysqli_query($master, "
                                                    SELECT * FROM department
                                                    WHERE departmentId = '" . $ticket -> departmentId . "'
                                                ");
                                                $r_de = mysqli_fetch_array($de);
                                                // set fields
                                                $dname = $r_de["departmentName"];?>
                                            <tr>
                                                <td ><?php echo $ticket -> ticketId; ?></td>
                                                <td ><?php echo $ticket -> subs; ?></td>
                                                <td ><?php echo $ticket -> nombre;?></td>
                                                <td>
                                                    <?php echo $ticket -> ticketName; ?>
                                                </td>
                                                  <td>
                                                    <?php echo $dname; ?>
                                                </td>
                                                <td>
                                                    <?php echo $ticket -> date; ?>
                                                </td>
                                                <td>
                                           <?php if($ticket -> ticketStatus ==3){?><i class="material-icons m-l-10 blue-text ">done_all</i><?php }?>
                                            <?php if($ticket -> ticketStatus ==2){?><i class="material-icons m-l-10 green-text">done</i><?php }?>
                                            <?php if($ticket -> ticketStatus ==1){?><i class="material-icons m-l-10 orange-text">done</i><?php }?>
                                            
                                                </td>
                                                <td>
<a href="../c/ticket.php?m=read&id=<?php  echo $ticket -> ticketId ?>" class="tooltipped m-l-10" data-position="top" data-tooltip="Consultar"><i class="material-icons blue-text">search</i></a>     

<a href="#" class="tooltipped m-l-10" data-position="left" data-tooltip="Modificar">
<i class="material-icons  grey-text">edit</i></a>

<a href="#" class="tooltipped m-l-10" data-position="top" data-tooltip="Eliminar"><i class="material-icons grey-text">delete</i></a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>


                                                        </div>

                                                        <div class="row">
                                                            <div class="col s12">
                                                               
                                                            </div>
                                                        </div>
                                                    </div>





                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m-t-10">
                            <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                            <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</main>

<div id="help" class="modal center">
<div class="modal-content">
    <p class="left">Aceptaci&oacute;n y Continuidad</p>
</div>
<div class="modal-footer m-t--20 m-b-10">
    <button class="modal-close waves-effect waves-light btn blue">Cerrar</button>
</div>
</div>

<?php include '../v/support/modalAdd.php'; ?>1