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
                        
<form id="form_validation" action="../c/project.php?m=ccreateDb&c=<?php echo $c;?>&amId=<?php echo $amId;?>&serviceId=<?php echo $serviceId;?>&md=<?php echo $md;?>" method="post">
                            <div class="m-l-10 m-r-10">
                                <div class="row">
                                    <div class="col s12 m6 l8 m-t--5 m-b-10">
                                        <div class="p-t-10 p-b-20 font-14 blue-grey-text text-darken-2">
                                            <table class="blue-grey lighten-4">
                                                <?php
                                                while ($leader = $_leader -> fetch_object()) {

                                                    /*
                                                     * Realiza una consulta a la base de datos.
                                                     */

                                                    $_thisRole = mysqli_query($master, "SELECT * FROM designated WHERE designatedId = '" . $leader -> designatedId . "'");
                                                    $thisRole = $_thisRole -> fetch_object();

                                                    echo "<tr>";
                                                    echo "<td>" . $thisRole -> designatedName . ":</td>";


                                                    /*
                                                     * Realiza una consulta a la base de datos.
                                                     */

                                                    $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $leader -> userId . "'");
                                                    $user = $_user -> fetch_object();
                                                    echo "<td>" . $user -> userName . " " . $user -> userSurname . "</td>";
                                                    echo "</tr>";
                                                }
                                                while ($consultant = $_consultant -> fetch_object()) {

                                                    /*
                                                     * Realiza una consulta a la base de datos.
                                                     */

                                                    $_thisRole = mysqli_query($master, "SELECT * FROM designated WHERE designatedId = '" . $consultant -> designatedId . "'");
                                                    $thisRole = $_thisRole -> fetch_object();

                                                    echo "<tr>";
                                                    echo "<td>" . $thisRole -> designatedName . ":</td>";


                                                    /*
                                                     * Realiza una consulta a la base de datos.
                                                     */

                                                    $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $consultant -> userId . "'");
                                                    $user = $_user -> fetch_object();
                                                    echo "<td>" . $user -> userName . " " . $user -> userSurname . "</td>";
                                                    echo "</tr>";
                                                }
                                                ?>
                                                <tr>
                                                    <td>Naturaleza del Servicio:</td>
                                                    <td><?php echo $nature -> natureName; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Servicio:</td>
                                                    <td><?php echo $service -> serviceName; ?></td>
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
                                                <tr>
                                                    <td>Realizado por:</td>
                                                </tr>
                                                <tr>
                                                    <td>Fecha:</td>
                                                </tr>
                                                <tr>
                                                    <td>Revisado por:</td>
                                                </tr>
                                                <tr>
                                                    <td>Fecha:</td>
                                                </tr>
                                                <tr>
                                                    <td>Estatus:</td>
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
                                                                    
                                                                    if ($modeloId == 1){include "../v/project/planning/p1.php";}
                                                                    if ($modeloId == 2){include "../v/project/planning/p2.php";}
                                                                    if ($modeloId == 3){include "../v/project/planning/p3.php";}
                                                                    if ($modeloId == 4){include "../v/project/planning/p4.php";}
                                                                    if ($modeloId == 5){include "../v/project/planning/p5.php";}
                                                                    if ($modeloId == 6){include "../v/project/planning/p6.php";}
                                                                    if ($modeloId == 7){include "../v/project/planning/p7.php";}
                                                                    if ($modeloId == 8){include "../v/project/planning/p8.php";}
                                                                    if ($modeloId == 8){include "../v/project/planning/p8.php";}
                                                                    if ($modeloId == 9){include "../v/project/planning/p9.php";}
                                                                    if ($modeloId == 10){include "../v/project/planning/p10.php";}
                                                                    if ($modeloId == 11){include "../v/project/planning/p11.php";}
                                                                    if ($modeloId == 12){include "../v/project/planning/p12.php";}
                                                                    if ($modeloId == 13){include "../v/project/planning/p13.php";}
                                                                    
                                                                    ?>
                                                                </li>
                                                               <?php  include '../v/project/oc.php';?>
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
