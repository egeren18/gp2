    <main>

    <div class="container">

        <div class="row">
            <div class="col s12 m-b-5">
                <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                <a href="#!" class="breadcrumb hide-on-med-and-down">M&oacute;dulo  Modal</a>
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
                                <span class="breadcrumb  p-l-10">Editar</span>
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
                                        
                                        
                                        
                            <div class="row">
                                <div class="col s6 m3">
                                
                                        <form id="form_validation" action="../c/modal.php?m=updateDb&id=<?php echo $_GET["id"]; ?>" method="post">
                                          
                                                  <table class="blue-grey lighten-4" >
                                                     
                                                        <tr>
                                                            <td>Cuestionario:</td>
                                                          </tr>  
                                                         <tr>
                                                            <td>1</td>
                                                         </tr>    
                                                            
                                                   </table>
                                                  
                                                
                                                
                                                
                                    </div>
                                        <div class="col s6 m3">
                                
                                        <form id="form_validation" action="../c/modal.php?m=updateDb&id=<?php echo $_GET["id"]; ?>" method="post">
                                          
                                                <table class="blue-grey lighten-4" >
                                                         <tr>
                                                            <td>Pregunta:</td>
                                                         </tr>  
                                                         <tr>
                                                            <td>N°1</td>
                                                         </tr>    
                                                </table>      
                                                    
                                                 
                                                
                                    </div>
                                     <div class="col s6 m3">
                                
                                        <form id="form_validation" action="../c/modal.php?m=updateDb&id=<?php echo $_GET["id"]; ?>" method="post">
                                          
                                                    
                                                <table class="blue-grey lighten-4" >
                                                         <tr>
                                                            <td >Fecha de ultima Modificaci&oacute;n:</td>
                                                         </tr>  
                                                         <tr>
                                                            <td>10/10/2021</td>
                                                         </tr>    
                                                </table>      
                                                
                                                
                                    </div>
                                        <div class="col s6 m3">
                                
                                        <form id="form_validation" action="../c/modal.php?m=updateDb&id=<?php echo $_GET["id"]; ?>" method="post">
                                          
                                               
                                                 <table class="blue-grey lighten-4">
                                                      <tr>
                                                        <td >Modificado Por:</td>
                                                        </tr>
                                                        <tr>
                                                          
                                                            <td> <?php echo $_SESSION["userFullName"];?></td>
                                                        </tr>
                                                     
                                                    </table>
                                                
                                    </div>
                                    
                                            </div> 
                                                
                                                <div class="row"> 
                                                <div class="col s12 m-t--10">
                                                        <div class='card-panel white-text blue-grey darken-2' style='line-height : 5px;'>Texto Vigente</div>
                                                       </div>
                                                        <div class="col s12 m-t--10">
                                                        <div class='card-panel black-text blue-grey lighten-4' style='line-height : 20px;'><?php echo $modal -> itemName; ?></div>
                                                       </div>
                                                  </div> 
                                        
                                        </form>
                               <div class="row">   
                                <div class="col s12">
                                        
                                        <form id="form_validation" action="../c/modal.php?m=updateDb&id=<?php echo $_GET["id"]; ?>" method="post">
                                            <div class="row m-t--10">
                                                
                                           <div class="col s12 m6 l12">
                                               <div class='card-panel white-text blue-grey darken-2' style='line-height : 5px;'>Texto a Actualizar</div></div>
                                                
                                                <div class="col s12 m6 l12">
                                                    <div class="input-field">
                                                        <textarea class="ckeditor"  id="modalText" name="modalText" placeholder="" type="text" class="validate"><?php echo $modal -> itemName; ?></textarea>
                                                        
                                                        <span class="helper-text" data-error="El campo es requerido" data-success=""></span>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                         
                                           
                                        </form>
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
                                                    <?php echo $action = $_SESSION["userAdmin"] != 4 ? "<button id='vmodal' type='submit' class='btn blue waves-effect tooltipped' data-position='right' data-tooltip='Guardar Cambios'><i class='material-icons'>save</i></button>" : "<button class='btn disabled'><i class='material-icons'>save</i></button>"; ?>
                                                </div>
                                            </div>  
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
