    <main>

        <!-- Page -->
        <div class="container">

            <!-- Breadcrumb -->
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="../c/puntosControl.php?m=list" class="breadcrumb hide-on-med-and-down">Puntos de Control</a>
                    <a href="#!" class="breadcrumb blue-text">Editar</a>
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
                                    <span class="breadcrumb blue-text p-l-10">Punto de Control</span>
                                    <a href="../c/puntosControl.php?m=list" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                   
                                </div>
                            </div>
                            <div class="card m-l-5 m-r-5">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="m-t-20 m-b-20 m-l-20 m-r-20">
      <div class="row">  
           <div class="col s12 m-t-10">             
           
           <label class="blue-text ">Rubro</label>
                                   
                                  </div>
                                      </div>
 <div class="row"> 
                     
           <div class="col s12 m-t-10">
                <?php while ($r_g = mysqli_fetch_array($puntosControl)) {if ($r_g["rubroId"] == $c ){ ?> 
                <ul class="collapsible">
    <li>
      <div class="collapsible-header  transparent">
      <table> <tr>
      <td class="blue-grey lighten-2 white-text td-block"><?php echo $r_g["puntosControlName"] ; ?> </td>
      <td class="  blue-grey lighten-3 "><i class="material-icons blue-grey-text text-lighten-5">edit</i></td>
      </tr></table>
      </div>
  
      <div class="collapsible-body  grey lighten-5"> 
      <div class="row "> 
      <div class="col s12 m6 l6"> 
      <label class="blue-text ">Despcrici&oacuten</label><br><br>
     <textarea class="ckeditor " name="puntosControlDescripcion" readonly>
     <?php echo $r_g["puntosControlDescripcion"] ; ?> </textarea>
      </div>
      
      <div class="col s12 m6 l6"> 
     <label class="blue-text "> Recomendaci&oacuten</label><br><br>
     <textarea class="ckeditor " name="puntosControlDescripcion" readonly>
     <?php echo $r_g["puntosControlRecomendacion"] ; ?> </textarea>
      </div>
      </div>
      </div>
    </li> 
    
    </ul>  
                         
    <?php } } ?></tbody></table>
             
                                                
                                                </div>
                                      </div> 
                                                <div class="row">
                                                     <div class="col s12 m-t-15">
                                                       <a href="../c/main.php?m=menu" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
                                                            <i class="material-icons">cancel</i>
                                                                    </a>
                                                       
                                                    </div>
                                                </div>
                                             
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
