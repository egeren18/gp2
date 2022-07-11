<?php

date_default_timezone_set("America/Caracas");

$_riskPartner = mysqli_query(
    $connection, "
    SELECT * FROM user
    WHERE userStatus = 2
");

$riksPartner = $_riskPartner -> fetch_object();

if ($riksPartner -> userId == $_SESSION["userId"]) {

    if ($r_answer -> statusId == NULL){
        $disabled = 'disabled';
        $check =
        '<div class="row">
            <div class="col s12 m-t-10">
                <div class="collection">
                    <a href="#!" class="grey white-text collection-item">
                        <i class="material-icons left">lock_open</i>
                        Sin Editar
                    </a>
                </div>
            </div>
        </div>';
    }
    elseif ($r_answer -> statusId == 1) {
        $disabled = 'disabled';
        $check =
        '<div class="row">
            <div class="col s12 m-t-10">
                <div class="collection">
                    <a href="#!" class="orange white-text collection-item">
                        <i class="material-icons left">done</i>
                        En Proceso
                    </a>
                </div>
            </div>
        </div>';
    }
    elseif ($r_answer -> statusId == 2) {
        $disabled = 'disabled';
        $check =
        '<div class="row">
            <div class="col s12 m-t-10">
                <div class="collection">
                    <a href="#!" class="green white-text collection-item">
                        <i class="material-icons left">done</i>
                        Completado
                    </a>
                </div>
            </div>
        </div>';
    }
    elseif ($r_answer -> statusId == 3) {
        $disabled = 'disabled';
        $check =
        '<div class="row">
            <div class="col s12 m-t-10">
                <div class="collection">
                    <a href="#!" class="red white-text collection-item">
                        <i class="material-icons left">warning</i>
                        Por Corregir
                    </a>
                </div>
            </div>
        </div>';
    }
    elseif ($r_answer -> statusId == 4) {
        $disabled = 'disabled';
        $check =
        '<input name="mode" type="hidden" value="risk"/>
        <div class="row">
            <div class="col s12 m-t-10">
                <label>
                    <input type="checkbox" class="validate" required=""/>
                    <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <label>
                    <input type="checkbox" name="back" class="validate"/>
                    <span class="blue-grey-text text-darken-2"><span class="red-text">Devolver</span>, para revisión y/o corrección!</span>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <label>
                    <input type="checkbox" name="closed" class="validate"/>
                    <span class="blue-grey-text text-darken-2"><b>Revisado</b> Final</span>
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
        <div class="row">
            <div class="col s12 m-t-20">
                <div class="collection">
                    <a href="#!" class="blue white-text collection-item">
                        <i class="material-icons left">done_all</i>
                        Revisado
                    </a>
                </div>
            </div>
        </div>';
    }
    elseif ($r_answer -> statusId == 5) {
        $disabled = 'disabled';
        $check =
        '<div class="row">
            <div class="col s12 m-t-10">
                <div class="collection">
                    <a href="#!" class="black white-text collection-item">
                        <i class="material-icons left">lock</i>
                        Cerrado
                    </a>
                </div>
            </div>
        </div>';
    }
    echo '<script>
        document.addEventListener("DOMContentLoaded", function () {
        var elems = document.querySelector(".collapsible");
        var instances = M.Collapsible.init(elems);
        instances.open();
    });
    </script>';
    
}
else {
    
    $_userType = mysqli_query(
        $connection, "
        SELECT * FROM user
        INNER JOIN acteam
        ON user.userId = acteam.userId
        WHERE acteam.acId = '" . $a . "'
        AND user.userId = '" . $_SESSION["userId"] . "'
    ");

    while ($userType = $_userType -> fetch_object()) {
        
        switch ($userType -> designatedId) {

            case 1:
            $projectDoerId = $_SESSION['userId'] ?? '';
            $projectDoerDate = date('Y-m-d / g:i a') ?? '';
            if ($answer -> statusId == NULL) {
                $disabled = '';
                $check =
                '<input name="mode" type="hidden" value="doer"/>
                <input name="projectDoerId" type="hidden" value="'.$projectDoerId.'"/>
                <input name="projectDoerDate" type="hidden" value="'.$projectDoerDate.'"/>
                <div class="row">
                    <div class="col s12 m-t-10">
                        <label>
                            <input type="checkbox" class="validate" required=""/>
                            <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label>
                            <input type="checkbox" name="completed" value="2" class="validate"/>
                            <span class="blue-grey-text text-darken-2"><u>Completado</u>, listo para ser revisado!</span>
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
                <div class="row">
                    <div class="col s12 m-t-10">
                        <div class="collection">
                            <a href="#!" class="grey white-text collection-item">
                                <i class="material-icons left">lock_open</i>
                                Sin Editar
                            </a>
                        </div>
                    </div>
                </div>';
            }
            elseif ($r_answer -> statusId == 1) {
                $disabled = '';
                $check =
                '<input name="mode" type="hidden" value="doer"/>
                <input name="projectDoerId" type="hidden" value="'.$projectDoerId.'"/>
                <input name="projectDoerDate" type="hidden" value="'.$projectDoerDate.'"/>
                <div class="row">
                    <div class="col s12 m-t-10">
                        <label>
                            <input type="checkbox" class="validate" required=""/>
                            <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label>
                            <input type="checkbox" name="completed" value="2" class="validate"/>
                            <span class="blue-grey-text text-darken-2"><u>Completado</u>, listo para ser revisado!</span>
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
                <div class="row">
                    <div class="col s12 m-t-10">
                        <div class="collection">
                            <a href="#!" class="orange white-text collection-item">
                                <i class="material-icons left">done</i>
                                En Proceso
                            </a>
                        </div>
                    </div>
                </div>';
            }
            elseif ($r_answer -> statusId == 2) {
                $disabled = 'disabled';
                $check =
                '<div class="row">
                    <div class="col s12 m-t-10">
                        <div class="collection">
                            <a href="#!" class="green white-text collection-item">
                                <i class="material-icons left">done</i>
                                Completado
                            </a>
                        </div>
                    </div>
                </div>';
            }
            elseif ($r_answer -> statusId == 3) {
                $disabled = '';
                $check =
                '<input name="mode" type="hidden" value="doer"/>        
                <div class="row">
                    <div class="col s12 m-t-10">
                        <label>
                            <input type="checkbox" class="validate" required=""/>
                            <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label>
                            <input type="checkbox" name="completed" value="2" class="validate"/>
                            <span class="blue-grey-text text-darken-2"><u>Completado</u>, listo para ser revisado!</span>
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
                <div class="row">
                    <div class="col s12 m-t-10">
                        <div class="collection">
                            <a href="#!" class="red white-text collection-item">
                                <i class="material-icons left">warning</i>
                                Por Corregir
                            </a>
                        </div>
                    </div>
                </div>';
            }
            elseif ($r_answer -> statusId == 4) {
                $disabled = 'disabled';
                $check =
                '<div class="row">
                    <div class="col s12 m-t-10">
                        <div class="collection">
                            <a href="#!" class="blue white-text collection-item">
                                <i class="material-icons left">done_all</i>
                                Revisado
                            </a>
                        </div>
                    </div>
                </div>';
            }
            elseif ($r_answer -> statusId == 5) {
                $disabled = 'disabled';
                $check =
                '<div class="row">
                    <div class="col s12 m-t-10">
                        <div class="collection">
                            <a href="#!" class="black white-text collection-item">
                                <i class="material-icons left">lock</i>
                                Cerrado
                            </a>
                        </div>
                    </div>
                </div>';
            }
                break;

            case 2:
            if ($r_answer -> statusId == NULL) {
                $disabled = 'disabled';
                $check =
                '<div class="row">
                    <div class="col s12 m-t-10">
                        <div class="collection">
                            <a href="#!" class="grey white-text collection-item">
                                <i class="material-icons left">lock_open</i>
                                Sin Editar
                            </a>
                        </div>
                    </div>
                </div>';
            }
            elseif ($r_answer -> statusId == 1) {
                $disabled = 'disabled';
                $check =
                '<div class="row">
                    <div class="col s12 m-t-10">
                        <div class="collection">
                            <a href="#!" class="orange white-text collection-item">
                                <i class="material-icons left">done</i>
                                En Proceso
                            </a>
                        </div>
                    </div>
                </div>';
            }
            elseif ($r_answer -> statusId == 2) {
                $projectReviewerId = $_SESSION['userId'] ?? '';
                $projectReviewerDate = date('Y-m-d / g:i a') ?? '';
                $disabled = 'disabled';
                $check =
                '<input name="mode" type="hidden" value="reviewer"/>
                <input name="projectReviewerId" type="hidden" value="'.$projectReviewerId.'"/>
                <input name="projectReviewerDate" type="hidden" value="'.$projectReviewerDate.'"/>
                <div class="row">
                    <div class="col s12 m-t-10">
                        <label>
                            <input type="checkbox" class="validate" required=""/>
                            <span class="blue-grey-text text-darken-2">Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label>
                            <input value="3" type="checkbox" name="back" class="validate"/>
                            <span class="blue-grey-text text-darken-2"><span class="red-text">Devolver</span>, para revisión y/o corrección!</span>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <label>
                            <input value="4" type="checkbox" name="approved" class="validate"/>
                            <span class="blue-grey-text text-darken-2"><span class="blue-text">Aprobar</span>, Revisado y Corregido!</span>
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
                <div class="row">
                    <div class="col s12 m-t-10">
                        <div class="collection">
                            <a href="#!" class="green white-text collection-item">
                                <i class="material-icons left">done</i>
                                Completado
                            </a>
                        </div>
                    </div>
                </div>';
            }
            elseif ($r_answer -> statusId == 3) {
                $disabled = 'disabled';
                $check =
                '<div class="row">
                    <div class="col s12 m-t-10">
                        <div class="collection">
                            <a href="#!" class="red white-text collection-item">
                                <i class="material-icons left">warning</i>
                                Por Corregir
                            </a>
                        </div>
                    </div>
                </div>';
            }
            elseif ($r_answer -> statusId == 4) {
                $disabled = 'disabled';
                $check =
                '<div class="row">
                    <div class="col s12 m-t-10">
                        <div class="collection">
                            <a href="#!" class="blue white-text collection-item">
                                <i class="material-icons left">done_all</i>
                                Revisado
                            </a>
                        </div>
                    </div>
                </div>';
            }
            elseif ($r_answer -> statusId == 5) {
                $disabled = 'disabled';
                $check =
                '<div class="row">
                    <div class="col s12 m-t-10">
                        <div class="collection">
                            <a href="#!" class="black white-text collection-item">
                                <i class="material-icons left">lock</i>
                                Cerrado
                            </a>
                        </div>
                    </div>
                </div>';
            }
            echo '<script>
                document.addEventListener("DOMContentLoaded", function () {
                var elems = document.querySelector(".collapsible");
                var instances = M.Collapsible.init(elems);
                instances.open();
            });
            </script>';
                break;
                
            case 3:
            if ($r_answer -> statusId == NULL) {
                $disabled = 'disabled';
                $check =
                '<div class="row">
                    <div class="col s12 m-t-10">
                        <div class="collection">
                            <a href="#!" class="grey white-text collection-item">
                                <i class="material-icons left">lock_open</i>
                                Sin Editar
                            </a>
                        </div>
                    </div>
                </div>';
            }
            elseif ($r_answer -> statusId == 1) {
                $disabled = 'disabled';
                $check =
                '<div class="row">
                    <div class="col s12 m-t-10">
                        <div class="collection">
                            <a href="#!" class="orange white-text collection-item">
                                <i class="material-icons left">done</i>
                                En Proceso
                            </a>
                        </div>
                    </div>
                </div>';
            }
            elseif ($r_answer -> statusId == 2) {
                $disabled = 'disabled';
                $check =
                '<div class="row">
                    <div class="col s12 m-t-10">
                        <div class="collection">
                            <a href="#!" class="green white-text collection-item">
                                <i class="material-icons left">done</i>
                                Completado
                            </a>
                        </div>
                    </div>
                </div>';
            }
            elseif ($r_answer -> statusId == 3) {
                $disabled = 'disabled';
                $check =
                '<div class="row">
                    <div class="col s12 m-t-10">
                        <div class="collection">
                            <a href="#!" class="red white-text collection-item">
                                <i class="material-icons left">warning</i>
                                Por Corregir
                            </a>
                        </div>
                    </div>
                </div>';
            }
            elseif ($r_answer -> statusId == 4) {
                $disabled = 'disabled';
                $check =
                '<div class="row">
                    <div class="col s12 m-t-10">
                        <div class="collection">
                            <a href="#!" class="blue white-text collection-item">
                                <i class="material-icons left">done_all</i>
                                Revisado
                            </a>
                        </div>
                    </div>
                </div>';
            }
            elseif ($r_answer -> statusId == 5) {
                $disabled = 'disabled';
                $check =
                '<div class="row">
                    <div class="col s12 m-t-10">
                        <div class="collection">
                            <a href="#!" class="black white-text collection-item">
                                <i class="material-icons left">lock</i>
                                Cerrado
                            </a>
                        </div>
                    </div>
                </div>';
            }
            echo '<script>
                document.addEventListener("DOMContentLoaded", function () {
                var elems = document.querySelector(".collapsible");
                var instances = M.Collapsible.init(elems);
                instances.open();
            });
            </script>';
                break;
                
            default :
                echo "<body><script>window.history.go(-2);</script>";
                break;
                
        }
    }
}
