<main>

<!-- Page -->
<div class="container">

    <!-- Breadcrumb -->
    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="../c/project.php?m=list" class="breadcrumb hide-on-med-and-down">Proyectos</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down blue-text">Equipo de Trabajo</a>
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
    <!-- #END# Breadcrumb -->

    <!-- Content -->
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="card blue-grey lighten-5 hoverable">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <span class="breadcrumb p-l-10">Equipo de Trabajo</span>
                            <a href="../c/project.php?m=projectTeam&p=<?php echo $p; ?>" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                <i class="material-icons blue-grey-text">cancel</i>
                            </a>
                        </div>
                    </div>
                    <div class="card m-l-5 m-r-5">
                        <div class="p-l-20 p-t-20 p-r-20 p-b-20">
                            <div class="row">
                                <div class="col s12 m6 l8 m-b-10">
                                    <table class="blue-grey lighten-5">
                                        <tr>
                                            <td>Cliente:</td>
                                            <td><?php echo $client -> clientName; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Proyecto:</td>
                                            <td><?php echo $service -> serviceName; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            
                                <div class="row">
                                    <div class="col s12 m-t-20">
                                        <ul class="collection">
                                            <li class="collection-item blue-grey lighten-5">
                                                <p>Modificar informaci&oacute;n sobre el integrante del Equipo de Trabajo.</p>
                                            </li>
                                        </ul>                                                            
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m6 l3 m-t-20">
                                        <div class="input-field">
                                            <label class="active">Consultor</label>
                                            <input value="<?php echo $user -> userName . " " . $user -> userSurname;  echo $user -> userId?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l3 m-t-20">
                                        <div class="input-field">
                                            <label class="active">Rol en el Proyecto</label>
                                            <input value="<?php echo $role -> roleName . " " . $role -> roleName; ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l3 m-t-20">
                                        <div class="input-field">
                                            <label class="active">Linea de Serv&iacute;cios</label>
                                            <input value="<?php echo $line  -> lineName . " " . $line -> lineName; ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l3 m-t-20">
                                        <div class="input-field">
                                            <label class="active">Designaci&oacute;n</label>
                                            <input value="<?php echo $designated  -> designatedName . " " . $designated -> designatedName; ?>" disabled="">
                                        </div>
                                    </div>
                                    
                                </div>


                                <!-- tabla para dividir el area de trabajo 
                                1 planificacion = p1
                                2 estrategias   = p2
                                3 ejecucion     = p3
                                4 conclusion    = p4
                                -->

                                <div class="row">
                                    <div class="col s12 m-t-20">
                                        <ul class="tabs">
                                        <li class="tab col l3 blue-grey lighten-5"><a class="active tooltipped" data-position="bottom" data-tooltip="Planificaci&oacute;n" href="#P1">Planificaci&oacute;n</a></li>
                                        <li class="tab col l3 blue-grey lighten-5"><a class="tooltipped" data-position="bottom" data-tooltip="Estrategia" href="#P2">Estrategia</a></li>
                                        <li class="tab col l3 blue-grey lighten-5"><a class="tooltipped" data-position="bottom" data-tooltip="Ejecuci&oacute;n" href="#P3">Ejecuci&oacute;n</a></li>
                                        <li class="tab col l3 blue-grey lighten-5"><a class="tooltipped" data-position="bottom" data-tooltip="Conclusi&oacute;n" href="#P4">Conclusi&oacute;n</a></li>
                                        </ul>
                                    </div>
                               

                                        <!-- tabla para dividir el area de trabajo 
                                            1 planificacion = p1 -->
                                            <div id="P1" class="col s12">
                                            <?php include 'p1.php'; ?>                   
                                            </div>


                                            <!-- tabla para dividir el area de trabajo 
                                            2 estrategia = p2 -->
                                            <div id="P2" class="col s12">
                                            <?php include 'p2.php'; ?>                   
                                            </div>


                                            <!-- tabla para dividir el area de trabajo 
                                            3 ejecucion = p3 -->
                                            <div id="P3" class="col s12">
                                            <?php include 'p3.php'; ?> 
                                            </div>


                                            <!-- tabla para dividir el area de trabajo 
                                            4 conclusion = p4 -->
                                            <div id="P4" class="col s12">
                                            <?php include 'p4.php'; ?> 
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

<!-- Help -->
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
<!-- #END# Help -->

<!-- Ticket -->
<?php include '../v/support/modalAdd.php'; ?>
<!-- #END# Ticket -->
