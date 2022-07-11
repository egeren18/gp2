    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Cuestionario AC</a>
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

            <form id="form_validation" action="../c/csac.php?m=createDb" method="post" enctype="multipart/form-data"  onsubmit="return checkForm(this);" >
                <div class="row">
                    <div class="col s12 m12 l12 m-t-5">
                        <div class="card blue-grey lighten-5 hoverable">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12">
                                        <span class="blue-text p-l-10">Cuestionario AC</span>
                                        <a href="../c/sac.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                            <i class="material-icons blue-grey-text">cancel</i>
                                        </a>
                                    </div>
                                </div>

                                <div class="card m-t-10 m-l-5 m-r-5">
                                    <div class="card p-t-20 p-b-15 p-l-20 p-r-20">
                                    
                                                    
                                                    <div class="row">
                                                       <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                                <select id="serviceId" name="serviceId" placeholder="" type="text" class="validate" required>
                                                                    <option value="">&nbsp;</option>
                                                                    <?php
                                                                    while ($r_service = mysqli_fetch_array($service)) {
                                                                        $serviceId = $r_service["modeloId"];
                                                                        $serviceName = $r_service["modeloName"];
                                                                        ?>
                                                                        <option value="<?php echo $serviceId; ?>"><?php echo $serviceName; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <label class="font-13" for="serviceId">Cuestionario</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                                <select id="sacc" name="sacc" placeholder="" type="text" class="validate" required>
                                                                    <option value="">&nbsp;</option><option value="1">1</option>
                                                                    <option value="2">2</option><option value="3">3</option>
                                                                    <option value="4">4</option><option value="5">5</option>
                                                                    <option value="6">6</option><option value="7">7</option>
                                                                    <option value="8">8</option><option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                                <label class="font-13" for="sacc">Cantidad de categorias</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>
                                                        <div class="col s12 m6 l2">
                                                            <div class="input-field">
                                                                <input id="sacp" name="sacp" placeholder="" type="number" class="validate" required>
                                                                <label for="sacp">Cantidad de preguntas</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    
                                                     <!-- ul con las categorrias y preguntas  -->
                                
                                                <div class="row">
                                                    <div class="col s12 m-t-10 ">
                                                        <label>
                                                            <input type="checkbox" class="validate filled-in" required="" />
                                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                        </label>
                                                    </div>
                                                </div>
                                      
                                      
                                        <div class="row">
                                            <div class="col s12 m-t-20">
                                                <a href="../c/sac.php?m=index" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
                                                </a>
                                                <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                                    <i class="material-icons">save</i>
                                                </button>
                                            </div>
                                        </div>
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
            </form>

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

    <script type="text/javascript" src="../js/shareholder.js"></script>
    