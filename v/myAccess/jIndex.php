    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Permisos de Usuarios</a>
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
                                    <a href="#!" class="breadcrumb  m-l-10">Permisos de Usuarios</a>
                                    <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                </div>
                            </div>
                            <div class="card m-t-10 m-l-5 m-r-5">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                            <table id="example" class="display nowrap" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <td class="td-block">Usuario</td>
                                                        <td>Acci&oacute;n</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php while ($user = $_user -> fetch_object()) { ?>
                                                    <tr>
                                                        <td>
                                                            <?php
                                                            echo "{$user -> userName} {$user -> userSurname}";
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            $_access = mysqli_query($connection, "SELECT * FROM access WHERE userId = '" . $user -> userId . "'");
                                                            $access = $_access -> fetch_object();
                                                            $userId = $access -> userId ?? '';
                                                            if ($access -> userId ?? '' == $user -> userId) {
                                                                    echo $link = $allowS -> jUpdate == 1 ? "<a href='../c/myAccess.php?m=update&uid={$user -> userId}&sid={$user -> subscriberId}' class='tooltipped right' data-position='left' data-tooltip='Modificar'><i class='material-icons blue-text'>edit</i></a>" : "<a href='javascript: void(0)'><i class='material-icons grey-text'>edit</i></a>";
                                                            }
                                                            else {
                                                                echo $link = $allowS -> jCreate == 1 ? "<a href='../c/myAccess.php?m=create&uid={$user -> userId}&sid={$user -> subscriberId}' class='tooltipped right' data-position='left' data-tooltip='Asignar'><i class='material-icons blue-text'>add</i></a>" : "<a href='javascript: void(0)'><i class='material-icons grey-text'>add</i></a>";
                                                            }
                                                            ?>                                                        </td>
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
                                    <span class="blue-grey-text font-14 left p-l-10">?? 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi??n: 1.0.0</span>
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
