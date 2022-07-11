<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Suscriptor Usuarios</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Modificar</a>
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
                            <span class="breadcrumb  p-l-10">Suscriptor Usuarios</span>
                            <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Men&uacute de Inicio">
                                <i class="material-icons blue-grey-text">cancel</i>
                            </a>
                            <a href="javascript: history.go(-1);" class="tooltipped right m-l-5" data-position="left" data-tooltip="Atr&aacute;s">
                                <i class="material-icons blue-grey-text">undo</i>
                            </a>
                                   
                        </div>
                    </div>
                    <form id="form_validation" action="../c/subscriber.php?m=updateDb&id=<?php echo $_GET["id"]; ?>" method="post">
                        <div class="card m-t-10 m-l-5 m-r-5">
                            <div class="row">
                                <div class="col s12">
                                    <div class="m-b-20 m-l-20 m-r-20">
                                        <div class="row">
                                            <div class="col s12 m-t-20">
                                                <ul class="tabs">
                                                    <li class="tab col l2 blue-grey lighten-5"><a class="active tooltipped" data-position="bottom" data-tooltip="Usuario Principal" href="#P1">Usuario Principal</a></li>
                                                    <li class="tab col l2 blue-grey lighten-5"><a class="tooltipped" data-position="bottom" data-tooltip="Socio de Riesgo" href="#P2">Socio de Riesgo</a></li>
                                                    <li class="tab col l2 blue-grey lighten-5"><a class="tooltipped" data-position="bottom" data-tooltip="Usuario Estandar" href="#P3">Usuarios estandar</a></li>
                                             
                                                    
                                                </ul>
                                            </div>


                                            <div id="P1" class="col s12">
                                                <div class="m-t-30"></div>
                                                <input id="subscriberId" name="subscriberId" type="hidden" value="<?php echo $s; ?>">
                                                <div class="row">
                                                    <div class="col s12 m6 l2">
                                                        <div class="input-field">
                                                            <input value="" id="upName" name="upName" placeholder="" type="text" class="validate" required>
                                                            <label for="upName">Nombres</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l2">
                                                        <div class="input-field">
                                                            <input value="" id="upLastName" name="upLastName" placeholder="" type="text" class="validate" required>
                                                            <label for="upLastName">Apellidos</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l2">
                                                        <div class="input-field">
                                                            <input value="" id="upMail" name="upMail" placeholder="" type="email" class="validate" required>
                                                            <label for="upMail">Correo Electr&oacute;nico</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l2">
                                                        <div class="input-field">
                                                            <input value="" id="upclave" name="upclave" placeholder=""  type="password" class="validate" required> 
                                                            <label for="upclave">Clave</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l2">
                                                        <div class="input-field">
                                                            <input value="" id="upclave2" name="upclave2" placeholder=""  type="password" class="validate" required>
                                                            <label for="upclave2">Confirmar clave</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6 l2">
                                                        <div class="input-field">
                                                            <input value="" id="color" name="color" placeholder="" type="text" class="validate" required>
                                                            <label for="color"> Color Favorito</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12">
                                                        <a class="btn blue tooltipped" id="toP2" href='#P2'data-position="right" data-tooltip="Continuar" >
                                                            <i class="material-icons">chevron_right</i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                            <div id="P2" class="col s12">
                                                <div class="m-t-30"></div>
                                                <input id="subscriberId" name="subscriberId" type="hidden" value="<?php echo $s; ?>">
                                                    <div class="row">
                                                    
                                                        <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srName" name="srupName" placeholder="" type="text" class="validate" required>
                                                                    <label for="srName">Nombres</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srLastName" name="srLastName" placeholder="" type="text" class="validate" required>
                                                                    <label for="srLastName">Apellidos</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srMail" name="srMail" placeholder="" type="email" class="validate" required>
                                                                    <label for="srMail">Correo Electr&oacute;nico</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srclave" name="srclave" placeholder=""  type="password" class="validate" required> 
                                                                    <label for="srclave">clave</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srclave2" name="srclave2" placeholder=""  type="password" class="validate" required>
                                                                    <label for="srclave2">Confirmar clave</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srcolor" name="srcolor" placeholder="" type="text" class="validate" required>
                                                                    <label for="srcolor"> Color Favorito</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                    </div>


                                                        <div class="row">
                                                            <div class="col s12">
                                                                <a class="btn blue tooltipped" id="toP3" href='#P3'data-position="right" data-tooltip="Continuar">
                                                                    <i class="material-icons">chevron_right</i>
                                                                </a>
                                                            </div>
                                                        </div>
                                             </div>
                                             <div id="P3" class="col s12">
                                                <div class="m-t-30"></div>
                                                <input id="subscriberId" name="subscriberId" type="hidden" value="<?php echo $s; ?>">
                                                    <div class="row">
                                                    
                                                        <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srName" name="srupName" placeholder="" type="text" class="validate" required>
                                                                    <label for="srName">Nombres</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srLastName" name="srLastName" placeholder="" type="text" class="validate" required>
                                                                    <label for="srLastName">Apellidos</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srMail" name="srMail" placeholder="" type="email" class="validate" required>
                                                                    <label for="srMail">Correo Electr&oacute;nico</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srclave" name="srclave" placeholder=""  type="password" class="validate" required> 
                                                                    <label for="srclave">clave</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srclave2" name="srclave2" placeholder=""  type="password" class="validate" required>
                                                                    <label for="srclave2">Confirmar clave</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                            <div class="col s12 m6 l2">
                                                                <div class="input-field">
                                                                    <input value="" id="srcolor" name="srcolor" placeholder="" type="text" class="validate" required>
                                                                    <label for="srcolor"> Color Favorito</label>
                                                                    <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                                </div>
                                                            </div>
                                                    </div>


                                                        <div class="row">
                                                            <div class="col s12">
                                                                <a class="btn blue tooltipped" id="toP2" href='#P2'data-position="right" data-tooltip="Continuar">
                                                                    <i class="material-icons">chevron_right</i>
                                                                </a>
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
                        <div class="col s12">
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
 
