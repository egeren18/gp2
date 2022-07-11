    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="#!" class="breadcrumb"><?php echo $_SESSION["subscriberName"]; ?></a>
                    <a href="#!" class="breadcrumb">Men&uacute; Principal</a>
                    <a href="#help" class="tooltipped right modal-trigger m-r-25" data-position="left" data-tooltip="Manual de Usuario">
                        <i class="material-icons">help</i>
                    </a>
                    <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                        <i class="material-icons">forum</i>
                    </a>
                    <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                        <?php echo $_SESSION["userFullName"];?>
                    </span>
                </div>
            </div>
            
            <?php
            switch ($_SESSION["userTypeId"]) {

                case 1:

                    switch ($_SESSION["userAdmin"]) {

                        case 1:
                        case 2:
                        case 3:
                        case 5:
                            include 'jMenuModules.php';
                            break;

                        case 4:
                            include 'jMenuExternalAudit.php';
                            break;
                        
                        default:
                            break;
                    }
                    break;

                case 2:
                    
                    include 'jMenuSubscriber.php';
                    
                break;

                default:
                break;
            }
            ?>

        </div>

    </main>

         <div id="help" class="modal ">
            
            <div class="modal-content">
                <div class="row">
                    <div class="col s12 m-b-5">
                        <a href="#!" class="breadcrumb"><b>Guia </b></a>
                        <a href="#!" class="breadcrumb "><b>Decripci&oacute;n de M&oacutedulo Clientes</b></a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        
                        </a>
                    </div>
                </div>
                <div class="divider"></div>
                
 <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test1">Añadir</a></li>
        <li class="tab col s3"><a  href="#test2">Consultar</a></li>
        <li class="tab col s3"><a href="#test3">Editar</a></li>
        <li class="tab col s3"><a href="#test4">Eliminar </a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
         <div class="m-t-20"></div>
    Lorem Ipsum is simply dummy text of the
    printing and typesetting industry. Lorem Ipsum has been the industry's
    standard dummy text ever since the 1500s, when an unknown printer took a
    galley of type and scrambled it to make a type specimen book. It has survived 
    not only five centuries, but also the leap into electronic typesetting, remaining
    essentially unchanged. It was popularised in the 1960s with the release of Letraset
    sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
    software like Aldus PageMaker including versions of Lorem Ipsum.
            <div class="m-t-20"></div>
                <a  href="<?php echo '../c/client.php?m=index'; ?>" id='vmodal' type='submit' class='btn blue waves-effect tooltipped' data-position='right'
                data-tooltip='Ingresar a Clientes'>Continuar </a><div class="m-t-20"></div>
    </div>
    
    <div id="test2" class="col s12">
        <div class="m-t-20"></div>
        Lorem Ipsum is simply dummy text of the
    printing and typesetting industry. Lorem Ipsum has been the industry's
    standard dummy text ever since the 1500s, when an unknown printer took a
    galley of type and scrambled it to make a type specimen book. It has survived 
    not only five centuries, but also the leap into electronic typesetting, remaining
    essentially unchanged. It was popularised in the 1960s with the release of Letraset
    sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
    software like Aldus PageMaker including versions of Lorem Ipsum.
      <div class="m-t-20"></div>
                 <a  href="<?php echo '../c/client.php?m=index'; ?>" id='vmodal' type='submit' class='btn blue waves-effect tooltipped' data-position='right'
                data-tooltip='Ingresar a Clientes'>Continuar </a><div class="m-t-20"></div>

                </div>
    
    <div id="test3" class="col s12">
        <div class="m-t-20"></div>
        Lorem Ipsum is simply dummy text of the
    printing and typesetting industry. Lorem Ipsum has been the industry's
    standard dummy text ever since the 1500s, when an unknown printer took a
    galley of type and scrambled it to make a type specimen book. It has survived 
    not only five centuries, but also the leap into electronic typesetting, remaining
    essentially unchanged. It was popularised in the 1960s with the release of Letraset
    sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
    software like Aldus PageMaker including versions of Lorem Ipsum.
      <div class="m-t-20"></div>
              <a  href="<?php echo '../c/client.php?m=index'; ?>" id='vmodal' type='submit' class='btn blue waves-effect tooltipped' data-position='right'
                data-tooltip='Ingresar a Clientes'>Continuar </a><div class="m-t-20"></div>
    </div>
    
    <div id="test4" class="col s12">
        <div class="m-t-20"></div>
        Lorem Ipsum is simply dummy text of the
    printing and typesetting industry. Lorem Ipsum has been the industry's
    standard dummy text ever since the 1500s, when an unknown printer took a
    galley of type and scrambled it to make a type specimen book. It has survived 
    not only five centuries, but also the leap into electronic typesetting, remaining
    essentially unchanged. It was popularised in the 1960s with the release of Letraset
    sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
    software like Aldus PageMaker including versions of Lorem Ipsum.
      <div class="m-t-20"></div>
        <a  href="<?php echo '../c/client.php?m=index'; ?>" id='vmodal' type='submit' class='btn blue waves-effect tooltipped' data-position='right'
                data-tooltip='Ingresar a Clientes'>Continuar </a><div class="m-t-20"></div>

    </div>
  </div>
           
            </div>
    <div class="modal-footer">
      
     <div class="row">
                                <div class="col s12 m-t--10 ">
                                    <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                                </div>
  </div>
    </div>
    <div class="m-t--20"></div>
        </div>
        <style>.modal { width: 75% !important ; }</style>
   <div id="help2" class="modal ">
            
            <div class="modal-content">
                <div class="row">
                    <div class="col s12 m-b-5">
                        <a href="#!" class="breadcrumb"><b>Guia </b></a>
                        <a href="#!" class="breadcrumb "><b>Decripci&oacute;n de M&oacutedulo Selecc&oacute;n de Personal</b></a>
                        <a href="#!" class="tooltipped modal-close right modal-trigger" data-position="left" data-tooltip="Cerrar" display:none;>
                        
                        </a>
                    </div>
                </div>
                <div class="divider"></div>
                
 <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#test11">Explicaci&oacute;n</a></li>
        <li class="tab col s2"><a  href="#test22">A&ntilde;adir</a></li>
        <li class="tab col s2"><a  href="#test22">Consultar</a></li>
        <li class="tab col s2"><a href="#test33">Editar</a></li>
        <li class="tab col s2"><a href="#test44">Eliminar </a></li>
      </ul>
    </div>
    <div id="test11" class="col s12">
         <div class="m-t-20"></div>
    Lorem Ipsum is simply dummy text of the
    printing and typesetting industry. Lorem Ipsum has been the industry's
    standard dummy text ever since the 1500s, when an unknown printer took a
    galley of type and scrambled it to make a type specimen book. It has survived 
    not only five centuries, but also the leap into electronic typesetting, remaining
    essentially unchanged. It was popularised in the 1960s with the release of Letraset
    sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
    software like Aldus PageMaker including versions of Lorem Ipsum.
            <div class="m-t-20"></div>
                <a  href="<?php echo '../c/sp.php?m=index'; ?>" id='vmodal' type='submit' class='btn blue waves-effect tooltipped' data-position='right'
                data-tooltip='Ingresar a Selecc&oacute;n de Personal'>Continuar </a><div class="m-t-20"></div>
    </div>
    
    <div id="test22" class="col s12">
        <div class="m-t-20"></div>
        Lorem Ipsum is simply dummy text of the
    printing and typesetting industry. Lorem Ipsum has been the industry's
    standard dummy text ever since the 1500s, when an unknown printer took a
    galley of type and scrambled it to make a type specimen book. It has survived 
    not only five centuries, but also the leap into electronic typesetting, remaining
    essentially unchanged. It was popularised in the 1960s with the release of Letraset
    sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
    software like Aldus PageMaker including versions of Lorem Ipsum.
      <div class="m-t-20"></div>
                 <a  href="<?php echo '../c/sp.php?m=index'; ?>" id='vmodal' type='submit' class='btn blue waves-effect tooltipped' data-position='right'
                data-tooltip='Ingresar a Selecc&oacute;n de Personal'>Continuar </a><div class="m-t-20"></div>

                </div>
    
    <div id="test33" class="col s12">
        <div class="m-t-20"></div>
        Lorem Ipsum is simply dummy text of the
    printing and typesetting industry. Lorem Ipsum has been the industry's
    standard dummy text ever since the 1500s, when an unknown printer took a
    galley of type and scrambled it to make a type specimen book. It has survived 
    not only five centuries, but also the leap into electronic typesetting, remaining
    essentially unchanged. It was popularised in the 1960s with the release of Letraset
    sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
    software like Aldus PageMaker including versions of Lorem Ipsum.
      <div class="m-t-20"></div>
              <a  href="<?php echo '../c/sp.php?m=index'; ?>" id='vmodal' type='submit' class='btn blue waves-effect tooltipped' data-position='right'
                data-tooltip='Ingresar a Selecc&oacute;n de Personal'>Continuar </a><div class="m-t-20"></div>
    </div>
    
    <div id="test44" class="col s12">
        <div class="m-t-20"></div>
        Lorem Ipsum is simply dummy text of the
    printing and typesetting industry. Lorem Ipsum has been the industry's
    standard dummy text ever since the 1500s, when an unknown printer took a
    galley of type and scrambled it to make a type specimen book. It has survived 
    not only five centuries, but also the leap into electronic typesetting, remaining
    essentially unchanged. It was popularised in the 1960s with the release of Letraset
    sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
    software like Aldus PageMaker including versions of Lorem Ipsum.
      <div class="m-t-20"></div>
        <a  href="<?php echo '../c/sp.php?m=index'; ?>" id='vmodal' type='submit' class='btn blue waves-effect tooltipped' data-position='right'
                data-tooltip='Ingresar a Selecc&oacute;n de Personal'>Continuar </a><div class="m-t-20"></div>

    </div>
  </div>
           
            </div>
    <div class="modal-footer">
      
     <div class="row">
                                <div class="col s12 m-t--10 ">
                                    <span class="blue-grey-text font-14 left p-l-10">&copy; 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                                </div>
  </div>
    </div>
    <div class="m-t--20"></div>
        </div>
   
   <?php include '../v/main/modulosM.php'; ?>

    <?php include '../v/support/modalAdd.php'; ?>

    <script src="../plugins/jansen.js" type="text/javascript"></script>
