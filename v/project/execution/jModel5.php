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
                                <span class="breadcrumb p-l-10">Cliente: <?php echo $project -> clientName; ?></span>
                                <a href="javascript: history.go(-1)" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                    <i class="material-icons blue-grey-text">cancel</i>
                                </a>
                            </div>
                        </div>
                        <form id="form_validation" action="project.php?m=updatePlanningDb&c=<?php echo $c; ?>&i=<?php echo $i; ?>" method="post">
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
                                            if ($p == 'p') {
                                                echo $r_questionP -> itemName;
                                            }
                                            elseif ($p == 's') {
                                                echo $r_questionS -> itemName;
                                            }
                                            elseif ($p == 'e') {
                                                echo $r_questionE -> itemName;
                                            }
                                            elseif ($p == 'c') {
                                                echo $r_questionC -> itemName;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m-t--10 m-b-10">
                                        <a href="#rule" class="modal-trigger btn btn-small blue-grey">
                                            Norma(s):
                                            <?php
                                            if ($p == 'p') {
                                                echo $r_questionP -> rule;
                                            }
                                            elseif ($p == 's') {
                                                echo $r_questionS -> rule;
                                            }
                                            elseif ($p == 'e') {
                                                echo $r_questionE -> rule;
                                            }
                                            elseif ($p == 'c') {
                                                echo $r_questionC -> rule;
                                            }
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
                                                                    <div class="collapsible-header">
                                                                        <table style="width:100%;">
                                                                            <tr>
                                                                                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                                                                                    Información de la Cuenta y Objetivo de la Prueba
                                                                                </td>
                                                                                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                                                                                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div class="collapsible-body">
                                                                        <div class="row">
                                                                            <div class="col m6 l3">
                                                                                Partida del estado financiero
                                                                            </div>
                                                                            <div class="col m6 l9">
                                                                                <input type="text" class="form-control" name="userFirstName" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col m6 l3">
                                                                                Fecha y período de la prueba
                                                                            </div>
                                                                            <div class="col m6 l9">
                                                                                <input type="text" class="form-control" name="userFirstName" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col m6 l3">
                                                                                Importancia relativa General
                                                                            </div>
                                                                            <div class="col m6 l9">
                                                                                <input class="form-control" style="text-align: right" type="text"/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col m6 l3">
                                                                                Importancia relativa Planificacion
                                                                            </div>
                                                                            <div class="col m6 l9">
                                                                                <input class="form-control" style="text-align: right" type="text"/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col m6 l3">
                                                                                Nivel de registro SUD
                                                                            </div>
                                                                            <div class="col m6 l9">
                                                                                <input class="form-control" style="text-align: right" type="text"/>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header">
                                                                        <table style="width:100%;">
                                                                            <tr>
                                                                                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                                                                                    Aserciones a los Estados Financieros
                                                                                </td>
                                                                                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                                                                                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div class="collapsible-body">
                                                                        <div class="row">
                                                                            <div class="col m6">
                                                                                <label>
                                                                                    <input type="checkbox" />
                                                                                    <span>C</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="col m6">
                                                                                <label>
                                                                                    <input type="checkbox" />
                                                                                    <span>A</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col m6">
                                                                                <label>
                                                                                    <input type="checkbox" />
                                                                                    <span>E/O</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="col m6">
                                                                                <label>
                                                                                    <input type="checkbox" />
                                                                                    <span>CO</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col m6">
                                                                                <label>
                                                                                    <input type="checkbox" />
                                                                                    <span>RO</span>
                                                                                </label>
                                                                            </div>
                                                                            <div class="col m6">
                                                                                <label>
                                                                                    <input type="checkbox" />
                                                                                    <span>VA</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col m6">
                                                                                <label>
                                                                                    <input type="checkbox" />
                                                                                    <span>PD</span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header">
                                                                        <table style="width:100%;">
                                                                            <tr>
                                                                                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                                                                                    Definir Población
                                                                                </td>
                                                                                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                                                                                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div class="collapsible-body">
                                                                        <div class="row">
                                                                            <div class="col s12">
                                                                                <div class="input-field">
                                                                                    <textarea id="" class="materialize-textarea"></textarea>
                                                                                    <label for="textarea1">Definir la Población (informe utilizado)</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col s12 m-t--10">
                                                                                <div class="input-field">
                                                                                    <input type="text" class="validate">
                                                                                    <label class="active" for="">Fecha del informe</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col s12">
                                                                                <div class="input-field">
                                                                                    <input style="text-align: right" class="number"/>
                                                                                    <label class="active" for="">Valor total de la cuenta (población)</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col s12">
                                                                                <div class="input-field">
                                                                                    <input style="text-align: right" type="number"/>
                                                                                    <label class="active" for="">Nº de partidas</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col s12">
                                                                                <div class="input-field">
                                                                                    <textarea id="textarea4" class="materialize-textarea"></textarea>
                                                                                    <label for="textarea4">Procedimiento realizado:</label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col s12">
                                                                                <div class="input-field">
                                                                                    <textarea id="textarea5" class="materialize-textarea"></textarea>
                                                                                    <label for="textarea5">Documentar excepciones:</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header">
                                                                        <table style="width:100%;">
                                                                            <tr>
                                                                                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                                                                                    Definición de Error, espectativa
                                                                                </td>
                                                                                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                                                                                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div class="collapsible-body">
                                                                        <textarea name="r2" class="ckeditor"></textarea>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header">
                                                                        <table style="width:100%;">
                                                                            <tr>
                                                                                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                                                                                    Método de Selección
                                                                                </td>
                                                                                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                                                                                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div class="collapsible-body">
                                                                        <table class="table table-bordered">
                                                                            <tr>
                                                                                <td class="blue-grey-lighten-4 align-center">Base de Selección</td>
                                                                                <td class="blue-grey-lighten-4 align-center">Nº Partidas</td>
                                                                                <td class="blue-grey-lighten-4 align-center">Monto</td>
                                                                                <td class="blue-grey-lighten-4 align-center">Cobertura</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="blue-grey-lighten-5 align-center">Por cobertura:</td>
                                                                                <td class="align-center"><input style="text-align: right" type="text" id=""/></td>
                                                                                <td class="align-center"><input style="text-align: right" type="text" id=""/></td>
                                                                                <td class="align-center"><input style="text-align: right" type="text" id=""/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="blue-grey-lighten-5 align-center">Por riesgo:</td>
                                                                                <td class="align-center"><input style="text-align: right" type="text" id=""/></td>
                                                                                <td class="align-center"><input style="text-align: right" type="text" id=""/></td>
                                                                                <td class="align-center"><input style="text-align: right" type="text" id=""/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="blue-grey-lighten-5 align-center">Por procedimientos impredecibles:</td>
                                                                                <td class="align-center"><input style="text-align: right" type="text" id=""/></td>
                                                                                <td class="align-center"><input style="text-align: right" type="text" id=""/></td>
                                                                                <td class="align-center"><input style="text-align: right" type="text" id=""/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="blue-grey-lighten-5 align-center">Monto probado (total muestra):</td>
                                                                                <td class="align-center"><input style="text-align: right" type="text"/></td>
                                                                                <td class="align-center"><input style="text-align: right" type="text"/></td>
                                                                                <td class="align-center"><input style="text-align: right" type="text"/></td>
                                                                            </tr>   
                                                                            <tr>
                                                                                <td class="blue-grey-lighten-5 align-center">Monto no probado:</td>
                                                                                <td class="align-center"><input style="text-align: right" type="text"/></td>
                                                                                <td class="align-center"><input style="text-align: right" type="text"/></td>
                                                                                <td class="align-center"><input style="text-align: right" type="text"/></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="blue-grey-lighten-5 align-center">Agregar base de selección:</td>
                                                                                <td colspan="3">
                                                                                    <div class="form-group">
                                                                                        <div class="form-line">
                                                                                            <textarea name="r2" class="ckeditor"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header">
                                                                        <table style="width:100%;">
                                                                            <tr>
                                                                                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                                                                                    Documentar el Resultado de la Prueba realizada
                                                                                </td>
                                                                                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                                                                                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div class="collapsible-body">
                                                                        <textarea name="r2" class="ckeditor"></textarea>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header">
                                                                        <table style="width:100%;">
                                                                            <tr>
                                                                                <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                                                                                    Evaluación de los Resultados
                                                                                </td>
                                                                                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                                                                                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                    <div class="collapsible-body">
                                                                        <textarea name="r2" class="ckeditor"></textarea>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="collapsible-header">
                                                                        <i class="material-icons blue-grey-text text-lighten-2">keyboard_arrow_right</i>
                                                                        Otras consideraciones:
                                                                    </div>
                                                                    <div class="collapsible-body">
                                                                        <ul class="collapsible blue-grey-text text-darken-2">
                                                                            <li>
                                                                                <div class="collapsible-header blue lighten-5">
                                                                                    <i class="material-icons blue-text">edit</i>
                                                                                    Debilidades de Control Interno
                                                                                </div>
                                                                                <div class="collapsible-body">
                                                                                    <textarea name="r2" class="ckeditor"></textarea>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="collapsible-header blue lighten-5">
                                                                                    <i class="material-icons blue-text">edit</i>
                                                                                    Carta de Gerencia
                                                                                </div>
                                                                                <div class="collapsible-body">
                                                                                    <textarea name="r2" class="ckeditor"></textarea>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="collapsible-header blue lighten-5">
                                                                                    <i class="material-icons blue-text">edit</i>
                                                                                    Situaciones Críticas
                                                                                </div>
                                                                                <div class="collapsible-body">
                                                                                    <textarea name="r2" class="ckeditor"></textarea>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="collapsible-header blue lighten-5">
                                                                                    <i class="material-icons blue-text">edit</i>
                                                                                    Asientos de Ajustes
                                                                                </div>
                                                                                <div class="collapsible-body">
                                                                                    <textarea name="r2" class="ckeditor"></textarea>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
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
                                                                <input type="checkbox" class="validate filled-in" required="" />
                                                                <span>Completado, listo para ser revisado!</span>
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
                                                        <div class="col s12 m-t-20 m-b-10">
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
        <!-- #END# Content -->

    </div>
    <!-- #END# Page -->

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
