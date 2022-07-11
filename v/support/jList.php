    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Soporte IT</a>
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
                <div class="col s12 m12 l12">
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <span class="breadcrumb  p-l-10">Soporte IT</span>
                                    <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                    <a class="tooltipped right" href="#!" data-position="left" data-tooltip="Nuevo Registro">
                                        <i class="material-icons blue-text">add_circle</i>
                                    </a>
                                </div>
                            </div>
                            <div class="card m-l-5 m-r-5">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                            <table id="example" class="display nowrap" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>ticketIso</td>
                                                        <td>ticketName</td>
                                                        <td>status</td>
                                                        <td>divisionId</td>
                                                        <td>ticketMail</td>
                                                        <td>indicador</td>
                                                        <td>celular</td>
                                                        <td>asunto</td>
                                                        <td>solucion</td>
                                                        <td>asuntoId</td>
                                                        <td>resuelto</td>
                                                        <td>pagina</td>
                                                        <td>userSubscriberId</td>
                                                        <td>asignarId</td>
                                                        <td>solucion2</td>
                                                        <td>mensajeName</td>
                                                        <td>date</td>
                                                        <td>mensajeCompletado</td>
                                                        <td>dateId</td>
                                                        <td>complejidadId</td>
                                                        <td>date1</td>
                                                        <td>date2</td>
                                                        <td>prioridadId</td>
                                                        <td class="td-block">tiempoInvertido</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php while ($r_support = mysqli_fetch_array($support)) { ?>
                                                    <tr>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                        <td><?php //echo $r_client["clientId"]; ?></td>
                                                    </tr>
                                                    <?php } ?>
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

    <div id="ticket" class="modal">
        <div class="modal-content">
            <p class="">Solicitar Ayuda</p>
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
