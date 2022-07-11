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
                                <span class="breadcrumb p-l-10">Cliente: <?php echo $r_project -> clientName; ?></span>
                                <a href="javascript: history.go(-1)" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                    <i class="material-icons blue-grey-text">cancel</i>
                                </a>
                            </div>
                        </div>
                        <form id="form_validation" action="#!ac.php?m=qADb" method="post">
                            <div class="m-l-10 m-r-10">
                                <div class="row">
                                    <div class="col s12 m6 l8 m-t--5 m-b-10">
                                        <div class="p-t-10 p-b-20 font-14 blue-grey-text text-darken-2">
                                            <table class="blue-grey lighten-4">
                                                <tr>
                                                    <td>Supervisado por:</td>
                                                    <td>
                                                        <?php
                                                        while ($r_reviewer = $reviewer -> fetch_object()) {
                                                            $separated = explode(',', $r_reviewerTeam -> projectReviewerTeam);
                                                            if (in_array($r_reviewer -> userId, $separated)) {
                                                                echo $r_reviewer -> userName . ' ' . $r_reviewer -> userSurname . ', ';
                                                            }
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Realizado por:</td>
                                                    <td>
                                                        <?php
                                                        while ($r_doer = $doer -> fetch_object()) {
                                                            $separated = explode(',', $r_doerTeam -> projectDoerTeam);
                                                            if (in_array($r_doer -> userId, $separated)) {
                                                                echo $r_doer -> userName . ' ' . $r_doer -> userSurname . ', ';
                                                            }
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Naturaleza del Servicio:</td>
                                                    <td><?php echo $r_nature -> natureName; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Servicio:</td>
                                                    <td><?php echo $r_service -> serviceName; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Período del Proyecto:</td>
                                                    <td>
                                                        Desde <span class="p-l-5 p-r-5"><?php echo $r_project -> acDateStart; ?></span>
                                                        Hasta <span class="p-l-5"><?php echo $r_project -> acDateExpire; ?></span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class='col s12 m6 l4 m-t--5 m-b-10'>
                                        <div class='p-t-10 p-b-20 font-14 blue-grey-text text-darken-2'>
                                            <table class='blue-grey lighten-4'>
                                                <tr>
                                                    <td>Completado por:</td>
                                                    <?php echo $r_completed ? "<td> {$r_completed -> userName} " . " " . " {$r_completed -> userSurname} </td>" : "<td></td>"; ?>
                                                </tr>
                                                <tr>
                                                    <td>Fecha:</td>
                                                    <?php echo $r_completed ? "<td> {$r_completed -> acDoerDate} </td>" : "<td></td>"; ?>
                                                </tr>
                                                <tr>
                                                    <td>Revisado por:</td>
                                                    <?php echo $r_reviewed ? "<td> {$r_reviewed -> userName} " . " " . " {$r_reviewed -> userSurname} </td>" : "<td></td>"; ?>
                                                </tr>
                                                <tr>
                                                    <td>Fecha:</td>
                                                    <?php echo $r_reviewed ? "<td> {$r_reviewed -> acReviewerDate} </td>" : "<td></td>"; ?>
                                                </tr>
                                                <tr>
                                                    <td>Estatus:</td>
                                                    <td>
                                                    <?php echo $r_answer -> statusId == NULL ? "Sin Editar" : (($r_answer -> statusId == 1) ? "En Proceso" : (($r_answer -> statusId == 2) ? "Completado" : (($r_answer -> statusId == 3) ? "Por Corregir" : (($r_answer -> statusId == 4) ? "Revisado" : (($r_answer -> statusId == 5) ? "Cerrado" : ""))))); ?>
                                                    </td>
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
                                                                <!-- -->
                                                                <!-- -->
                                                                <!-- -->
                                                                <!-- -->
                                                                <li>
                                                                    <div class="collapsible-header">
                                                                    </div>
                                                                    <div class="collapsible-body">
                                                                    </div>
                                                                </li>
                                                                <!-- -->
                                                                <!-- -->
                                                                <!-- -->
                                                                <!-- -->
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
