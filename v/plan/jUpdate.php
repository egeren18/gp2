<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Plan de Suscripcion</a>
            <a href="#!" class="breadcrumb ">Modificar</a>
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
                            <span class="breadcrumb  p-l-10">Modificar</span>
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
                                    <form id="form_validation" action="../c/plan.php?m=updateDb&id=<?php echo $_GET["cid"]; ?>" method="post">
                                        <div class="row">
                                            <div class="col s12 m6 l2">
                                                <div class="input-field">
                                                    <input value="<?php echo $plan -> planName; ?>" id="planName" name="planName" placeholder="" type="text" class="validate">
                                                    <label for="planName">Nombre del Plan</label>
                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <div class="input-field">
                                                    <input value="<?php echo $plan -> monto; ?>" id="monto" name="monto" placeholder="" type="number" class="validate">
                                                    <label for="monto">Costo</label>
                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <div class="input-field">
                                                    <input value="<?php echo $plan -> text1; ?>" id="text1" name="text1" placeholder="" type="text" class="validate">
                                                    <label for="text1">Texto 1</label>
                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <div class="input-field">
                                                    <input value="<?php echo $plan -> text2; ?>" id="text2" name="text2" placeholder="" type="text" class="validate">
                                                    <label for="text2">Texto 2</label>
                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <div class="input-field">
                                                    <input value="<?php echo $plan -> text3; ?>" id="text3" name="text3" placeholder="" type="text" class="validate">
                                                    <label for="departmentName">Texto 3</label>
                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l2">
                                                <div class="input-field">
                                                    <input value="<?php echo $plan -> text4; ?>" id="text4" name="text4" placeholder="" type="text" class="validate">
                                                    <label for="text4">Texto 4</label>
                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                </div>
                                            </div>



                                        </div>
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
                                                <?php echo $action = $_SESSION["userAdmin"] != 4 ? "<button id='vDepartment' type='submit' class='btn blue waves-effect tooltipped' data-position='right' data-tooltip='Guardar Cambios'><i class='material-icons'>save</i></button>" : "<button class='btn disabled'><i class='material-icons'>save</i></button>"; ?>
                                            </div>
                                        </div>
                                    </form>
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
