<main>

    <div class="container">

        <div class="row">
            <div class="col s12 m-b-5">
                <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                <a href="#!" class="breadcrumb hide-on-med-and-down">Proyecto Sagra GP</a>
                <a href="#!" class="breadcrumb ">Modificar</a>
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
                <div class="col s12 m12 l12 m-t-5">
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <a href="#!" class="breadcrumb  m-l-10">Modificar</a>
                                    <a href="#!" class="breadcrumb ">Proyecto Sagra GP</a>
                                    <a href="#!" class="breadcrumb"><?php echo "{$user->userName} {$user->userSurname}" ?></a>
                                    <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Men&uacute de Inicio">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                    <a href="javascript: history.go(-1);" class="tooltipped right m-l-5" data-position="left" data-tooltip="Atr&aacute;s">
                                        <i class="material-icons blue-grey-text">undo</i>
                                    </a>
                                </div>
                            </div>
                            <div class="card m-t-10 m-l-5 m-r-5">
                                <div class="card p-b-15 p-l-20 p-r-20">
                                    <div class="row">

                                        <div class="col s12">
                                            <table class="m-t-20" style="width:100%;">
                                                <?php
                                                $_namer = mysqli_query($master, "
                                                SELECT * FROM rubro
                                                WHERE rubroId = '" . $rubroId . "'
                                            ");
                                                $namer = $_namer->fetch_object();

                                                ?>
                                                <td class="  td-block" style="width:100%">
                                                    <?php echo $namer->rubroName; ?>
                                                </td>
                                            </table>
                                        </div>


                                        <div class="col s12">
                                            <table class="m-t-20" style="width:100%;">
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>


<form id="form_validation" action="../c/project.php?m=eDrDb&c=<?php echo $c;?>&amId=<?php echo $amId;?>&serviceId=<?php echo $serviceId;?>&md=<?php echo $md;?>&rubroId=<?php echo $rubroId;?>&frecuencia=<?php echo $frecuencia;?>" method="post" enctype="multipart/form-data"  onsubmit="return checkForm(this);" >
                                        <!-- tabla q contiene las actividades en un desplegable  -->

                                        <div class="col s12 m12 l12 ">
                                            <ul class="collapsible">
                                                <li>
                                                    <div class="collapsible-header grey lighten-4"><i class="material-icons blue-text">list</i>Descripci&oacute;n</div>
                                                    <div class="collapsible-body">
                                                        <div class="row">


                                                            <table class="" style="width:100%;">
                                                                <tbody>
<tr>
<td class="blue-grey lighten-4" style="width:64%;background-color:white">Descripc&oacute;n </td>
<td class="center grey lighten-4">
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    C
                                                                                         </a></div>
</td>                                                                                         
<td class="center grey lighten-4">
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    A
                                                                                         </a></div>
</td>
<td class="center grey lighten-4">
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    E/O
                                                                                         </a></div>
</td>
<td class="center grey lighten-4" >
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    CO
                                                                                         </a></div>
</td>
<td class="center grey lighten-4" >
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    RO
                                                                                         </a></div>
</td>
<td class="center grey lighten-4" >
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    VA
                                                                                         </a></div>
</td>
<td class="center grey lighten-4" >
                                                                                    <div class='q-items b-b-white'> <a href='#' class="blue-text">
                                                                                    PD
                                                                                         </a></div>
</td>
<td class="center grey lighten-4" style="width:3%;">
</td>
</tr>
                                                                    <?php

                                                                    while ($mmodelo = $_mmodelo->fetch_object()) {

                                                                        $_namex = mysqli_query($appf, "
                                                                            SELECT * FROM act$v
                                                                            WHERE actividadId = '" . $mmodelo->actividadId  . "'
                                                                            ");
                                                                        $namex = $_namex->fetch_object();


                                                                    ?>

                                                                        <tr>
                                                                           
                                                                            <td class="blue-grey lighten-1 white-text" style="width:64%;">


                                                                                <?php echo $namex->actividadName;  ?><?php echo $mmodelo->aId; ?>
                                                                            </td>
                                                                            <td class="  grey lighten-4" style="width:3%;background-color:white">

                                                                                <a class=" tooltipped" data-tooltip="Asercion  1 C">


                                                                                    <label>
                                                                                        <input value="<?php echo $mmodelo->aId; ?>" type="hidden" name="preguntasC1[]" />
                                                                                        <input class="filled-in " <?php echo $checked = ($mmodelo-> a1 == 1) ? 'checked' : ''; ?>  value="1" type="checkbox" name="pc[<?php echo $mmodelo->aId; ?>]" />
                                                                                        <span class="blue-grey-text text-darken-2"> </span>
                                                                                    </label>



                                                                                </a>



                                                        </div>
                                                        </td>
                                                        <td class="center  grey lighten-4" style="width:3%; background-color:#cfd8dc">
                                                            <div>
                                                                <a class=" tooltipped" data-tooltip="Asercion 2 A">
                                                                    <label>
                                                                        <input value="<?php echo $mmodelo->aId; ?>" type="hidden" name="preguntasC2[]" />
                                                                        <input class="filled-in " <?php echo $checked = ($mmodelo-> a2 == 1) ? 'checked' : ''; ?> type="checkbox" value="1"  name="pca[<?php echo $mmodelo->aId; ?>]" />
                                                                        <span class="blue-grey-text text-darken-2"></span>
                                                                    </label>
                                                                     

                                                                </a>


                                                            </div>
                                                        </td>
                                    
                                                        <td class="center grey lighten-4" style="width:3%;background-color:#cfd8dc">
                                                            <div>
                                                                <a class=" tooltipped" data-tooltip="Asercion 3 E/O">
                                                                    <label>
                                                                        <input value="<?php echo $mmodelo->aId; ?>" type="hidden" name="preguntasC3[]" />
                                                                        <input class="filled-in " <?php echo $checked = ($mmodelo-> a3 == 1) ? 'checked' : ''; ?> type="checkbox" name="pcb[<?php echo $mmodelo->aId; ?>]" />
                                                                        <span class="blue-grey-text text-darken-2"></span>
                                                                    </label>

                                                                </a>
                                                            </div>
                                                        </td>

                                                        <td class="center  grey lighten-4" style="width:3%;background-color:#cfd8dc">
                                                            <div>
                                                                <a class=" tooltipped" data-tooltip="Asercion 4 CO">

                                                                    <label>
                                                                        <input value="<?php echo $mmodelo->aId; ?>" type="hidden" name="preguntasC4[]" />
                                                                        <input class="filled-in " <?php echo $checked = ($mmodelo-> a4 == 1) ? 'checked' : ''; ?> type="checkbox" name="pcc[<?php echo $mmodelo->aId; ?>]" />
                                                                        <span class="blue-grey-text text-darken-2"></span>
                                                                    </label>


                                                                </a>

                                                            </div>
                                                        </td>

                                                        <td class="center  grey lighten-4" style="width:3%;background-color:white">
                                                            <div>
                                                                <a class=" tooltipped" data-tooltip="Asercion 5 RO">
                                                                    <label>
                                                                        <input value="<?php echo $mmodelo->aId; ?>" type="hidden" name="preguntasC5[]" />
                                                                        <input class="filled-in " <?php echo $checked = ($mmodelo-> a5 == 1) ? 'checked' : ''; ?> type="checkbox" name="pcd[<?php echo $mmodelo->aId; ?>]" />
                                                                        <span class="blue-grey-text text-darken-2"> </span>
                                                                    </label>

                                                            </div>

                                                            </a>
                                                    </div>
                                                    </td>

                                                    <td class="center  grey lighten-4" style="width:3%; background-color:#cfd8dc">
                                                        <div>
                                                            <a class=" tooltipped" data-tooltip="Asercion 6 VA">
                                                                <label>
                                                                    <input value="<?php echo $mmodelo->aId; ?>" type="hidden" name="preguntasC6[]" />
                                                                    <input class="filled-in " <?php echo $checked = ($mmodelo-> a6 == 1) ? 'checked' : ''; ?> type="checkbox" name="pce[<?php echo $mmodelo->aId; ?>]" />
                                                                    <span class="blue-grey-text text-darken-2"></span>
                                                                </label>

                                                        </div>
                                                        </a>
                                        </div>
                                        </td>

                                        <td class="center  grey lighten-4" style="width:3%;background-color:#cfd8dc">
                                            <div>

                                                <a class=" tooltipped" data-tooltip="Asercion 7 PD">
                                                    <label>
                                                        <input value="<?php echo $mmodelo->aId; ?>" type="hidden" name="preguntasC7[]" />
                                                        <input class="filled-in " <?php echo $checked = ($mmodelo-> a7 == 1) ? 'checked' : ''; ?> type="checkbox" name="pcf[<?php echo $mmodelo->aId; ?>]" />
                                                        <span class="blue-grey-text text-darken-2"></span>
                                                    </label>
                                                </a>

                                            </div>
                                        </td>



                                        <td class="center blue-grey lighten-3" style="width:3%;">
                                            <a class=" tooltipped" href="../c/project.php?m=revision2&p=p&c=<?php echo $c;?>&amId=<?php echo $amId;?>&serviceId=<?php echo $serviceId;?>&md=<?php echo $md;?>&rubroId=<?php echo $rubroId;?>&frecuencia=<?php echo $frecuencia;?>" data-tooltip="Asignar tarea por Frecuencia">
                                                <i class="material-icons blue-grey-text">edit</i>

                                            </a>
                                        </td>

                                    <?php } ?>

                                    </tbody>
                                    </table>

                                    </div>
                                </div>

                                </li>
                                </ul>
                            </div>
                            <!-- final tabla que contiene actividades-->
                            </table>
                      




                        </div>
                        <div class="row">
                            <div class="col s12 m-t-30">
                                <label>
                                    <input type="checkbox" class="validate filled-in" required="" />
                                    <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m-t-20">
                                <a href="javascript: history.go(-1)" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                    <i class="material-icons">cancel</i>
                                </a>
                                <?php echo $action = $_SESSION["userAdmin"] != 4 ? "<button type='submit' class='btn blue waves-effect tooltipped' data-position='top' data-tooltip='Guardar Cambios'><i class='material-icons'>save</i></button>" : "<button class='btn disabled'><i class='material-icons'>save</i></button>"; ?>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m-t-15">
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
<?php include '../v/support/modalAdd.php'; ?>