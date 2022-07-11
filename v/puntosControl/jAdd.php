    <main>

        <!-- Page -->
        <div class="container">

            <!-- Breadcrumb -->
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="../c/puntosControl.php?m=list" class="breadcrumb hide-on-med-and-down">Puntos de Control</a>
                    <a href="#!" class="breadcrumb blue-text">A&ntilde;adir</a>
                    <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                        <i class="material-icons blue-grey-text">help</i>
                    </a>
                    <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                        <i class="material-icons blue-grey-text">forum</i>
                    </a>
                    <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                        <?php echo $_SESSION["userFullName"];?>
                    </span>
                </div>
            </div>
            <!-- #END# Breadcrumb -->

            <!-- Content -->
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <span class="breadcrumb blue-text p-l-10">Puntos de Control</span>
                                    <a href="../c/puntosControl.php?m=list" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                </div>
                            </div>
                            <div class="card m-l-5 m-r-5">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="m-t-20 m-b-20 m-l-20 m-r-20">
                                            <form id="form_validation" action="puntosControl.php?m=addDb" method="post">
                                                <div class="row">
                                                
                                                    <div class="col s12 m12 l12">
                                                        <div class="input-field">
								                        <select data-size="4" name="rubroId" class="form-control show-tick" data-live-search="true" required>
								                            <option value="0">Seleccione</option>
								                            <?php while ($r_r = mysqli_fetch_array($rubros)) { ?>
								                                <option value="<?php echo $r_r["rubroId"]; ?>"><?php echo $r_r["rubroName"]; ?></option>
								                            <?php } ?>
								                        </select>
								                        <label class="font-13"  for="rubroId">Rubro</label>
								                        <span class="helper-text" data-error="El campo es requerido" data-success="Listo!"></span>
								                    </div>
								                   </div>
                                                </div>
                                                <div class="row">
                                                
                                                   <div class="col s12 m12 l12 m-t--30 ">
                                                        <div class="input-field">
                                                            <input id="puntosControlName" name="puntosControlName" placeholder="" type="text" class="validate" required>
                                                            <label for="puntosControlName">Puntos de Control</label>
                                                            <span class="helper-text" data-error="El campo es requerido" data-success="Listo!"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                 <div class="row">           
                <div class="col s12 m-t--20">    
                <ul class="collapsible">
                <li>
                <div class="collapsible-header" >
                                            
               <table style="width:100%">
               <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                   Descripci&oacuten del Asunto
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
               
               </table>
    </div>
    <div class="collapsible-body">
     <textarea class="ckeditor" name="puntosControlDescripcion" ></textarea>
     </div>
    </li>
    
    							</div></div>	
    							<div class="row">           
                <div class="col s12 m-t-10">    
                <ul class="collapsible">
                <li>
                <div class="collapsible-header" >
                                            
               <table style="width:100%">
               <td class="blue-grey lighten-2 white-text" style="line-height : 20px;">
                   Recomentaci&oacuten del Asunto
                </td>
                <td style="width: 50px;" class="blue-grey lighten-3 center-align">
                    <i style="margin: 0;" class="material-icons white-text">edit</i>
                </td>
               
               </table>
    </div>
    <div class="collapsible-body">
     <textarea class="ckeditor" name="puntosControlRecomendacion" ></textarea>
     </div>
    </li>
    
    							</div></div>
                                                
                                                <div class="row">
		                                            <div class="col s12 m-t-20 ">
		                                                <label>
		                                              	      <input type="checkbox" class="validate" required="">
		                                                    <span>Estoy de acuerdo con la informaci&oacute;n suministrada!</span>
		                                                </label>
		                                            </div>
                                        		</div>
                                                
                                                
                                                <div class="row m-t-20">
                                                     <div class="col s12">
                                                       <a href="javascript: history.go(-1)" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                            <i class="material-icons">cancel</i>
                                                                    </a>
                                                        <button type="submit" class="btn blue waves-effect waves-light">
                                                          <i class="material-icons">save</i>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m-t-10">
                                    <span class="blue-grey-text font-14 left p-l-10">© 2019 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versión: 1.0.0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Content -->

        </div>
        <!-- #END# Page -->

    </main>

    <!-- Help -->
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
    <!-- #END# Help -->

    <!-- Ticket -->
    <?php include '../v/support/modalAdd.php'; ?>
    <!-- #END# Ticket -->
