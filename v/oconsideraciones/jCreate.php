    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Otras Consideraciones</a>
                    <a href="#!" class="breadcrumb ">A&ntilde;adir</a>
                    <a href="#help" class="tooltipped right modal-trigger" data-position="left" data-tooltip="oconsideraciones de Usuario">
                        <i class="material-icons blue-text">help</i>
                    </a>
                    <a href="#ticket" class="tooltipped right modal-trigger" data-position="left" data-tooltip="Solicitar Ayuda">
                        <i class="material-icons blue-text">forum</i>
                    </a>
                    <!-- boton leyenda -->
                    <a href="#help22" class="tooltipped right modal-trigger " data-position="left" data-tooltip="leyenda">
                        <i class="material-icons blue-text">local_offer</i>
                    </a>
                    <!-- fin boton leyenda -->
                    
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
                                        <span class="blue-text p-l-10">Otras Consideraciones</span>
                                        <a href="../c/oconsideraciones.php?m=index" class="tooltipped right " data-position="left" data-tooltip="Cerrar">
                                            <i class="material-icons blue-text">cancel</i>
                                        </a>
                                    <!-- botones para funcion para tomar captura este es el boton -->    
                                    <a class="right  tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons blue-text">photo_camera</i></a>
                                    <a class="right  tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen"><i class="material-icons green-text">file_download</i></a>
                                    <a class="right " id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                                    <!-- botones para funcion para tomar captura -->
                                    
                                    <!-- boton instrucciones -->
                                    <a href="#help22" class="tooltipped right modal-trigger " data-position="left" data-tooltip="Instruciones">
                                        <i class="material-icons blue-text">local_library</i>
                                    </a>
                                    <!-- final boton instrucciones -->  
                                    
                                    <!-- boton atras -->        
                                    <a href="javascript: history.go(-1);" class="tooltipped right blue-text " data-position="left" data-tooltip="Atr&aacute;s">
                                        <i class="material-icons blue-text">undo</i>
                                    </a>
                                    <!-- fin de boton atras -->                                    
                                        
                                    </div>
                                </div>
                                    
                                    <!-- funcion para tomar captura se utiliza antes del card  -->       
                                    <div id="main">
                                         <div id="screenshot">
                                    <!--  end funcion para tomar captura -->    

                                <div class="card m-t-10 m-l-5 m-r-5">
                                    <div class="card p-t-20 p-b-15 p-l-20 p-r-20">
                                    
<form id="form_validation" action="../c/oconsideraciones.php?m=createDb" method="post" enctype="multipart/form-data"  onsubmit="return checkForm(this);" >                                                   
                                                
                                                  
                                                        
                                                <div class="row">
                                                    <div class="col s12 m4 ">    
                                                        <div class="input-field">
                                                                <select id="rubroId" name="rubroId" placeholder="" type="text" class="validate">
                                                                    <option value="">&nbsp;</option>
                                                                    <?php while ($rubro = $_rubro -> fetch_object()) { ?>
                                                                    <option value="<?php echo $rubro -> rubroId; ?>"><?php echo $rubro -> rubroName; ?></option>
                                                                    <?php } ?>
                                                                </select>
                                                                <label class="font-13" for="userId">Rubro:</label>
                                                                <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                        </div>
                                                    </div>
                                                     
                                                <div class="col s12 m8 ">
                                                    <div class="input-field">
                                                        <input id="titulo" name="titulo"  type="text">
                                                        <label class="active" for="d">Titulo</label>
                                                    </div>
                                                </div>
                                                     
                                                     
                                                     
                                        <div class="col s12 m12 l12 ">
                                            <ul class="collapsible">
                                                <li>
                                            <div class="collapsible-header grey lighten-4"><i class="material-icons blue-text">list</i>Descripci&oacute;n</div>
                                                <div class="collapsible-body">
                                                  		<div class= "row">
                                                            <div class="col s12 m12 l12 ">
                                                                <div class="input-field">
                                                                <textarea id="ckeditor" name="oconsideracionesText" class="ckeditor m-t-20" required>
                                                                </textarea>
                                                                 
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </li>
                                            </ul>
                                        </div>                                                     


                                        <div class="col s12 m12 l12 m-t-20 ">
                                            <ul class="collapsible">
                                                <li>
                                            <div class="collapsible-header grey lighten-4"><i class="material-icons blue-text">list</i>Recomendaciones del asunto</div>
                                                <div class="collapsible-body">
                                                  		<div class= "row">
                                                            <div class="col s12 m12 l12 ">
                                                                <div class="input-field">
                                                                <textarea id="ckeditor" name="oconsideracionesText2" class="ckeditor m-t-20" required>
                                                                </textarea>
                                                                 
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </li>
                                            </ul>
                                        </div>
                                                
                                                
                                                
                                                
                                                
                                                
                                                        
                                               
                                                        
                                                        
                                                </div>
                                                <div class="row">
                                                    <div class="col s12 m-t-20 ">
                                                        <label>
                                                            <input type="checkbox" class="validate filled-in" required="" />
                                                            <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
                                                        </label>
                                                    </div>
                                                </div>
                                      
                                      
                                        <div class="row">
                                            <div class="col s12 m-t-20">
                                                <a href="../c/oconsideraciones.php?m=index" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                    <i class="material-icons">cancel</i>
                                                </a>
                                                <button type="submit" class="btn blue waves-effect tooltipped" data-position="top" data-tooltip="Guardar">
                                                    <i class="material-icons">save</i>
                                                </button>
                                            </div>
                                        </div>
                                   
                                </div>
                                    <!-- funcion para tomar captura se usa despues de cerrar el card -->        
                                           </div>
                                        </div>
                                    <!--  end funcion para tomar captura -->                                
                                
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
            <p class="">oconsideraciones de Usuario</p>
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
    