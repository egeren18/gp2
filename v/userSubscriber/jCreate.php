    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Usuarios Suscriptores</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down"><?php echo $subscriber -> subscriberName; ?></a>
                    <a href="#!" class="breadcrumb ">A&ntilde;adir</a>
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
                                    <a href="#!" class="breadcrumb  m-l-10">A&ntilde;adir</a>
                                    <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Men&uacute de Inicio">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                    <a href="javascript: history.go(-1);" class="tooltipped right m-l-5" data-position="left" data-tooltip="Atr&aacute;s">
                                        <i class="material-icons blue-grey-text">undo</i>
                                    </a>
                                </div>
                            </div>
                            <div class="card m-t-10 m-l-5 m-r-5">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="m-t-20 m-b-20 m-l-20 m-r-20">
                                            <form id="form_validation" action="../c/userSubscriber.php?m=createDb&sid=<?php echo $_GET["sid"]; ?>" method="post">
                                                <div class="row">
                                                    <div class="col s12">
                                                        <div class="row">
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <input id="userName" name="userName" placeholder="" type="text" class="validate">
                                                                    <label for="userName">Nombres</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <input id="userSurname" name="userSurname" placeholder="" type="text" class="validate">
                                                                    <label for="userSurname">Apellidos</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m4">
                                                                <div class="input-field">
                                                                    <input id="userEmail" name="userEmail" placeholder="" type="email" class="validate">
                                                                    <label for="userEmail">Correo Electr&oacute;nico</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if ($_SESSION["subscriberId"] != 1) { ?>
                                                <div class="row">
                                                    <div class="col s12 m-b-30">
                                                        <p class="font-14 grey-text">Tipo de Acceso</p>
                                                        <div class="m-t-20">
                                                            <p>
                                                                <label>
                                                                    <input name="userAdmin" type="radio" value="1" required=""/>
                                                                    <span>Est&aacute;ndar</span>
                                                                </label>
                                                            </p>
                                                            <p>
                                                                <label>
                                                                    <input name="userAdmin" type="radio" value="2" required=""/>
                                                                    <span>Admin</span>
                                                                </label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                                <div class="row">
                                                    <div class="col s12 m-t--10">
                                                        <label>
                                                            <input type="checkbox" class="validate filled-in" required="" />
                                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12 m-t-30">
                                                        <a href="javascript: history.go(-1)" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                            <i class="material-icons">close</i>
                                                        </a>
                                                        <?php echo $action = $_SESSION["userAdmin"] != 4 ? "<button id='vUser' type='submit' class='btn blue waves-effect tooltipped' data-position='right' data-tooltip='Guardar'><i class='material-icons'>save</i></button>" : "<button class='btn disabled'><i class='material-icons'>save</i></button>"; ?>
                                                    </div>
                                                </div>
                                            </form>
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

    <?php include '../v/support/modalAdd.php'; ?>

    <script src="../plugins/jansen.js" type="text/javascript"></script>
