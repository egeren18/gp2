<main>
    <div class="container">
        <div class="row">
            <div class="col s12 m-b-5">
                <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                <a href="../c/project.php?m=list" class="breadcrumb hide-on-med-and-down">Proyectos</a>
                <a href="#!" class="breadcrumb hide-on-med-and-down"><?php echo $phase; ?></a>
                <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                    <i class="material-icons blue-text">help</i>
                </a>
                <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                    <i class="material-icons blue-text">forum</i>
                </a>
                <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                    <?php echo $_SESSION["userFullName"]; ?>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card blue-grey lighten-5 hoverable">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                                <span class="breadcrumb p-l-10">Cliente: <?php echo $client -> clientName; ?></span>
                                <a href="javascript: history.go(-1)" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                    <i class="material-icons blue-grey-text">cancel</i>
                                </a>
                            </div>
                        </div>
                        
<form id="form_validation" action="../c/project.php?m=editDb&c=<?php echo $c;?>&amId=<?php echo $amId?>&serviceId=<?php echo $serviceId;?>&md=<?php echo $md;?>" method="post">
                            <div class="m-l-10 m-r-10">
                                <div class="row">
                                    <div class="col s12 m6 l8 m-t--5 m-b-10">
                                        <div class="p-t-10 p-b-20 font-14 blue-grey-text text-darken-2">
                                            <table class="blue-grey lighten-4">
                                               
                                                <tr>
                                                    <td>Naturaleza del Servicio:</td>
                                                    <td><?php echo $nature -> natureName; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Servicio:</td>
                                                    <td><?php echo $service -> serviceName;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Período del Proyecto:</td>
                                                    <td>
                                                        Desde <span class="p-l-5 p-r-5"><?php echo $project -> projectDateStart; ?></span>
                                                        Hasta <span class="p-l-5"><?php echo $project -> projectDateExpire; ?></span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class='col s12 m6 l4 m-t--5 m-b-10'>
                                        <div class='p-t-10 p-b-20 font-14 blue-grey-text text-darken-2'>
                                                 <table class='blue-grey lighten-4'>
                                                <?php
                                                 $_u = mysqli_query($pquest, "SELECT * FROM repuesta$vv WHERE mmodeloId = '" . $mmodeloId . "'");
                                                    $u = $_u -> fetch_object();
                                                    $projectDoerId = $u -> projectDoerId;
                                                    $projectReviewerId = $u -> projectReviewerId;
                                                    
                                                    $projectDoerDate = $u -> projectDoerDate;
                                                    $projectReviewerDate = $u -> projectReviewerDate;
                                                    
                                                    $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $projectDoerId . "'");
                                                    $user = $_user -> fetch_object();
                                                    
                                                    $_user2 = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $projectReviewerId . "'");
                                                    $user2 = $_user2 -> fetch_object();
                                                
                                                
                                                ?>
                                                <tr>
                                                    <td>Realizado por:</td>
                                                     <td><?php echo $user -> userName . " " . $user -> userSurname;?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Fecha:</td>
                                                    <td><?php echo $projectDoerDate;?></td>
                                                </tr>
                                                <tr>
                                                    <td>Revisado por:</td>
                                                     <td><?php echo $user2 -> userName . " " . $user2 -> userSurname;?>
                                                     </td>
                                                </tr>
                                                <tr>
                                                    <td>Fecha: </td>
                                                    <td><?php echo $projectReviewerDate;?></td>
                                                </tr>
                                               
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m-t--20">
                                        <div class="card-panel white-text blue-grey darken-2">
                                            <?php
                                            echo $actividadName;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m-t--10 m-b-10">
                                        <a href="#rule" class="modal-trigger btn btn-small blue-grey">
                                            Norma(s):
                                            <?php echo $normaText;
                                            ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="m-l-10 m-t-10 m-r-10">
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <ul class="collapsible blue-grey-text text-darken-2">
                                                                <li>
                                                                    <div class="collapsible-header blue-grey lighten-4">
                                                                        Procedimientos que seran realizados, lineamientos y vinculos: 
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <?php 
$contadorr = 1;
while($contadorr <= $npregunta){
?>
<li>
    <div class="collapsible-header">
        <table style="width:100%;">
            <tr>
                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                    <?php
                    if ($contadorr >= 1){ echo $mmodelo -> texto1;}
                    if ($contadorr >= 2){ echo $mmodelo -> texto2;}
                    if ($contadorr >= 3){ echo $mmodelo -> texto3;}
                    if ($contadorr >= 4){ echo $mmodelo -> texto4;}
                    if ($contadorr >= 5){ echo $mmodelo -> texto5;}
                    if ($contadorr >= 6){ echo $mmodelo -> texto6;}
                    if ($contadorr >= 7){ echo $mmodelo -> texto7;}
                    if ($contadorr >= 8){ echo $mmodelo -> texto8;}
                    if ($contadorr >= 9){ echo $mmodelo -> texto9;}
                    if ($contadorr >= 10){ echo $mmodelo -> texto10;}
                    if ($contadorr >= 11){ echo $mmodelo -> texto11;}
                    if ($contadorr >= 12){ echo $mmodelo -> texto12;}
                    if ($contadorr >= 13){ echo $mmodelo -> texto13;}
                    if ($contadorr >= 14){ echo $mmodelo -> texto14;}
                    if ($contadorr >= 15){ echo $mmodelo -> texto15;}
                    if ($contadorr >= 16){ echo $mmodelo -> texto16;}
                    if ($contadorr >= 17){ echo $mmodelo -> texto17;}
                    if ($contadorr >= 18){ echo $mmodelo -> texto18;}
                    if ($contadorr >= 19){ echo $mmodelo -> texto19;}
                    if ($contadorr >= 20){ echo $mmodelo -> texto20;}?>
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
            </tr>
        </table>
    </div>
    <div class="collapsible-body">
        <textarea name="a<?php echo $contadorr;?>" class="ckeditor" >
            <?php
                    if ($contadorr == 1){ echo $mmodelo2 -> a1;}
                    if ($contadorr == 2){ echo $mmodelo2 -> a2;}
                    if ($contadorr == 3){ echo $mmodelo2 -> a3;}
                    if ($contadorr == 4){ echo $mmodelo2 -> a4;}
                    if ($contadorr == 5){ echo $mmodelo2 -> a5;}
                    if ($contadorr == 6){ echo $mmodelo2 -> a6;}
                    if ($contadorr == 7){ echo $mmodelo2 -> a7;}
                    if ($contadorr == 8){ echo $mmodelo2 -> a8;}
                    if ($contadorr == 9){ echo $mmodelo2 -> a9;}
                    if ($contadorr == 10){ echo $mmodelo2 -> a10;}
                    if ($contadorr == 11){ echo $mmodelo2 -> a11;}
                    if ($contadorr == 12){ echo $mmodelo2 -> a12;}
                    if ($contadorr == 13){ echo $mmodelo2 -> a13;}
                    if ($contadorr == 14){ echo $mmodelo2 -> a14;}
                    if ($contadorr == 15){ echo $mmodelo2 -> a15;}
                    if ($contadorr == 16){ echo $mmodelo2 -> a16;}
                    if ($contadorr == 17){ echo $mmodelo2 -> a17;}
                    if ($contadorr == 18){ echo $mmodelo2 -> a18;}
                    if ($contadorr == 19){ echo $mmodelo2 -> a19;}
                    if ($contadorr == 20){ echo $mmodelo2 -> a20;}
            ?>
        </textarea>
    </div>
</li>
<?php 
$contadorr++;
} ?>

                                                                </li>
                                                               <?php include '../v/project/oc.php';?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col s12 m-t-20">
                                                            <div class="file-field input-field">
                                                                <div class="btn blue-grey">
                                                                    <i class="material-icons">attach_file</i>
                                                                    <input type="file" multiple>
                                                                </div>
                                                                <div class="file-path-wrapper">
                                                                    <input class="file-path validate" type="text" placeholder="Adjuntar uno &oacute; m&aacute;s archivos">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
<div class="row">
      <div class="col s12 m-b-10">
                                            <ul class="collapsible">
                                                <li>
                                                    <div class="collapsible-header blue-grey-text text-darken-2">
                                                        <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                        Observaci&oacute;n Revisor
                                                    </div>
                                                    <div class="collapsible-body">
                                                        <textarea name="obs" class="ckeditor" readonly><?php echo  $mmodelo2 -> obs; ?></textarea>
                                                    </div>
                                                </li>
                                            </ul>
    </div>
</div>
                                             <div class="row">
                                                    <div class="col s12">
                                                        <label>
                                                            <input name="completado" type="checkbox" class="validate" value="1"/>
                                                            <span class="black-text">Completado</span>
                                                        </label>
                                                    </div>
                                                    </div>
                                           
                                                    <div class="row">
                                                    <div class="col s12">
                                                        <label>
                                                            <input type="checkbox" class="validate filled-in" required="" />
                                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12 m-t-30">
                                                        <a href="javascript: history.go(-1)" class="btn red waves-light">
                                                            <i class="material-icons">cancel</i>
                                                        </a>
                                                        <button type="submit" class="btn blue waves-effect">
                                                            <i class="material-icons">save</i>
                                                        </button>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col s12 m-t-10">
                                <span class="blue-grey-text font-14 left p-l-10">© 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versión: 1.0.0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<div id="help" class="modal">
    <div class="modal-content">
        <p class="">Manual de Usuario</p>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="modal-footer">
        <button class="modal-close waves-effect waves-light btn blue btn-small">Continuar</button>
    </div>
</div>
<div id="rule" class="modal">
    <div class="modal-content">
        <p class="">
            <?php
            if ($p == 'p') {
                echo $r_questionP -> ruleDescription;
            }
            elseif ($p == 's') {
                echo $r_questionS -> ruleDescription;
            }
            elseif ($p == 'e') {
                echo $r_questionE -> ruleDescription;
            }
            elseif ($p == 'c') {
                echo $r_questionC -> ruleDescription;
            }
            ?>
        </p>
    </div>
    <div class="modal-footer">
        <button class="modal-close waves-effect waves-light btn blue btn-small">Salir</button>
    </div>
</div>
<?php include '../v/support/modalAdd.php'; ?>
<?php include '../v/project/ocModal.php'; ?>
