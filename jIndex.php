    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Aceptaci&oacute;n y Continuidad</a>
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
                                    <span class="blue-text p-l-10">Aceptación y Continuidad</span>
                                    <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar"><i class="material-icons blue-grey-text">cancel</i></a>
                                    <?php echo $permission = $_SESSION["userAdmin"] == 2 ? '<a href="../c/ac.php?m=add" class="tooltipped right" data-position="left" data-tooltip="Nuevo Registro"><i class="material-icons blue-text">add_circle</i></a>' : '<a href="javascript: void(0)" class="tooltipped right" data-position="left" data-tooltip="Nuevo Registro"><i class="material-icons grey-text">add_circle</i></a>'; ?>
                                </div>
                            </div>
                            <div class="card m-t-10 m-l-5 m-r-5">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                            <table id='example' class='display nowrap' style='width:100%'>
                                                <thead>
                                                    <tr>
                                                        <td>Cliente</td>
                                                        <td>Servicio</td>
                                                        <td>Equipo de Trabajo</td>
                                                        <td class='td-block right-align'>Estatus</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php while ($ac = $_ac -> fetch_object()) {
                                                        
                                                        /*
                                                         * Realiza una consulta a la base de datos.
                                                         */

                                                        $_data = mysqli_query($connection, "SELECT * FROM ac WHERE acId = '" . $ac -> acId . "'");
                                                        $data = $_data -> fetch_object();

                                                        /*
                                                         * Realiza una consulta a la base de datos.
                                                         */

                                                        $_service = mysqli_query($master, "SELECT * FROM service WHERE service.serviceId = '" . $data -> serviceId . "'");
                                                        $service = $_service -> fetch_object();
                                                        
                                                        /*
                                                         * Realiza una consulta a la base de datos.
                                                         */

                                                        $_items = mysqli_query($connection, "SELECT count(*) AS no FROM acanswer WHERE acId = '" . $ac -> acId . "'");
                                                        $items = $_items -> fetch_object();

                                                        /*
                                                         * Realiza una consulta a la base de datos.
                                                         */

                                                        $_answer = mysqli_query($connection, "SELECT count(*) AS answer FROM acanswer WHERE acId = '" . $ac -> acId . "' AND statusId = 5");
                                                        $answer = $_answer -> fetch_object();
                                                    
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $ac -> clientName; ?></td>
                                                        <td>
                                                            <?php
                                                            
                                                            /*
                                                             * Realiza una consulta a la base de datos.
                                                             */

                                                            $_team = mysqli_query($connection, "SELECT * FROM acteam WHERE acId = '" . $ac -> acId . "' AND userId = '" . $_SESSION["userId"] . "'");
                                                            $team = $_team -> fetch_object();

                                                            /*
                                                             * Es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch.
                                                             */
                                                            
                                                            switch ($_SESSION["userAdmin"]) {
                                                                
                                                                // estandar
                                                                
                                                                case 1:

                                                                // admin

                                                                case 2: echo "<a href='../c/ac.php?m=questionnaire1&aid={$ac -> acId}'>{$service -> serviceName}</a>"; break;

                                                                // socio de riesgo
                                                            
                                                                case 3: echo "<a href='../c/ac.php?m=questionnaire1&aid={$ac -> acId}'>{$service -> serviceName}</a>"; break;

                                                                default: break;
                                                            
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            
                                                            /*
                                                             * Es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch.
                                                             */
                                                            
                                                            switch ($_SESSION["userAdmin"]) {
                                                                
                                                                // estandar
                                                                
                                                                case 1:
                                                                
                                                                // admin
                                                            
                                                                case 2: echo "<a href='../c/ac.php?m=team&aid={$ac -> acId}'>Integrantes</a>"; break;

                                                                // socio de riesgo
                                                            
                                                                case 3: echo "<a target='_blank' href='../plugins/pdf/doc/acTeam.php?aid={$ac -> acId}'>Integrantes</a>"; break;

                                                                default: break;
                                                            
                                                            }
                                                            ?>
                                                        </td>
                                                        <td class='right-align'><?php echo $lock = $items -> no == $answer -> answer ? "<i class='material-icons m-l-20 black-text'>lock</i>" : "<i class='material-icons m-l-20 grey-text'>lock_open</i>"; ?></td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <div id="help" class="modal center">
        <div class="modal-content">
            <p class="left">Aceptación y Continuidad</p>
        </div>
        <div class="modal-footer m-t--20 m-b-10">
            <button class="modal-close waves-effect waves-light btn blue">Cerrar</button>
        </div>
    </div>
    <?php include '../v/support/modalAdd.php'; ?>
