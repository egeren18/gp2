    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="../c/ac.php?m=list" class="breadcrumb hide-on-med-and-down">Aceptaci&oacute;n y Continuidad</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Cuestionario 1</a>
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
                                    <span class="blue-text p-l-10">Cliente: <?php echo $client -> clientName; ?></span>
                                    <a href="ac.php?m=questionnaire<?php echo $qid; ?>&aid=<?php echo $ac -> acId; ?>" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="m-l-10 m-r-10">
                                    <div class="col s12 m6 l7 m-t--5 m-b-10">
                                        <div class="p-t-10 p-b-20 font-14 blue-grey-text text-darken-2">
                                            <table class="blue-grey lighten-4">
                                                <tr>
                                                    <td>Supervisado por:</td>
                                                    <td>
                                                        <?php
                                                        while ($leader = $_leader -> fetch_object()) {
                                                            
                                                            /*
                                                             * Realiza una consulta a la base de datos.
                                                             */

                                                            $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $leader -> userId . "'");
                                                            $user = $_user -> fetch_object();
                                                            echo "<span style='line-height : 20px;'>" . $user -> userName . " " . $user -> userSurname . "<br/></span>";
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Realizado por:</td>
                                                    <td>
                                                        <?php
                                                        while ($consultant = $_consultant -> fetch_object()) {
                                                            
                                                            /*
                                                             * Realiza una consulta a la base de datos.
                                                             */

                                                            $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $consultant -> userId . "'");
                                                            $user = $_user -> fetch_object();
                                                            echo "<span style='line-height : 20px;'>" . $user -> userName . " " . $user -> userSurname . "<br/></span>";
                                                        }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Naturaleza del Servicio:</td>
                                                    <td><?php echo "<span style='line-height : 20px;'>" . $service -> natureName . "</span>"; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Servicio:</td>
                                                    <td><?php echo "<span style='line-height : 20px;'>" . $service -> serviceName . "</span>"; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Per??odo de la AC:</td>
                                                    <td>
                                                        <span style='line-height : 20px;'>
                                                            Desde <span class="p-l-5 p-r-5"><?php echo $ac -> acDateStart; ?></span>
                                                            Hasta <span class="p-l-5"><?php echo $ac -> acDateExpire; ?></span>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col s12 m5 m-t--5 m-b-10">
                                        <div class="p-t-10 p-b-20 font-14 blue-grey-text text-darken-2">
                                            <table class="blue-grey lighten-4">
                                                <tr>
                                                    <td>Completado por:</td>
                                                    <td><?php echo "<span style='line-height : 20px;'>&nbsp;</span>"; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Fecha:</td>
                                                    <td><?php echo "<span style='line-height : 20px;'>&nbsp;</span>"; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Revisado por:</td>
                                                    <td><?php echo "<span style='line-height : 20px;'>&nbsp;</span>"; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Fecha:</td>
                                                    <td><?php echo "<span style='line-height : 20px;'>&nbsp;</span>"; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Estatus:</td>
                                                    <td><?php echo "<span style='line-height : 20px;'>&nbsp;</span>"; ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            
                            /*
                             * Variables.
                             */

                            $v = $_GET["v"];
                            
                            /*
                             * Es similar a una serie de sentencias IF en la misma expresi??n. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresi??n) con muchos valores diferentes, y ejecutar una parte de c??digo distinta dependiendo de a que valor es igual. Para esto es exactamente la expresi??n switch.
                             */
                            
                            switch ($v) {
                                
                            // En proceso
                                case "edit":
                                    include "jEdit.php";
                                    break;

                                default:
                                    include "jView.php";
                                    break;
                            }

                            
                            ?>
                            <div class='row'>
                                <div class='col s12 m-t-10'>
                                    <span class='blue-grey-text font-14 left p-l-10'>?? 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class='blue-grey-text font-14 right p-r-10 hide-on-small-only'>Versi??n: 1.0.0</span>
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

    <script type="text/javascript" src="../js/stepper.js"></script>
    <script>
    $(document).ready(function(){ 
        $('#answer').on('click',function() {
            $('#area').toggle();
        });
        $('#noAnswer').on('click',function(){
            $('#area').hide();
            $('input[name="a2"]').prop('checked', false);
            $('input[name="a2"]').removeAttr("required");
        });
    });
    $('input[type="radio"]').keydown(function(e){
        var arrowKeys = [37, 38, 39, 40];
        if (arrowKeys.indexOf(e.which) !== -1){
            $(this).blur();
            return false;
        }
    });
    </script>
