	<script>
			var textarea = document.getElementById('example');
			sceditor.create(textarea, {
				format: 'bbcode',
				icons: 'monocons',
				style: '../minified/themes/content/default.min.css'
			});


			var themeInput = document.getElementById('theme');
			themeInput.onchange = function() {
				var theme = '../minified/themes/' + themeInput.value + '.min.css';

				document.getElementById('theme-style').href = theme;
			};
		</script>
    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">ticket</a>
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
                                        <i class="material-icons blue-text">undo</i>
                                    </a>
                                </div>
                            </div>
<div class="card m-t-10 m-l-5 m-r-5">


     <div class="row">
         <div class="col s12 m-t-20">
           <div class=" m-b-20 m-l-10 m-r-10">
                <form id="form_validation" action="../c/ticket.php?m=updateDb&id=<?php echo $_GET["id"]; ?>" method="post"
                    enctype="multipart/form-data" onsubmit="return checkForm(this);">
     
                                 <div class="col s12 ">
                                                    <div class="blue-grey lighten-2">
                                                        <p class="valign-wrapper white-text p-t-5 p-b-5 p-l-10">
                                                            <i class="material-icons m-r-20">folder_shared</i>
                                                            Ticket
                                                        </p>
                                                    </div>
                                                </div>
     
  
   
                                                <div class="col s12 m4 m-t-15">
                                                    <span class="blue-grey-text text-darken-2">Titulo:</span>
                                                </div>
                                                <div class="col s12 m8 m-t-15">
                                                    <span><?php echo $titulo; ?></span>
                                                </div>

                                                <div class="col s12 m4 m-t-10">
                                                    <span class="blue-grey-text text-darken-2">Subscriptor:</span>
                                                </div>
                                                <div class="col s12 m8 m-t-10">
                                                    <span><?php echo $subs ?></span>
                                                </div>

                                                 <div class="col s12 m4 m-t-10">
                                                    <span class="blue-grey-text text-darken-2">Nombre:</span>
                                                </div>
                                                <div class="col s12 m8 m-t-10">
                                                    <span><?php echo $n ?></span>
                                                </div>
                                                
                                                 <div class="col s12 m4 m-t-10">
                                                    <span class="blue-grey-text text-darken-2">Categoria</span>
                                                </div>
                                                
                                                <div class="col s12 m8 m-t-10">
                                                    <span><?php echo $dpN ; ?></span>
                                                </div>
                                                
                                                
                                                 <div class="col s12 m4 m-t-10">
                                                    <span class="blue-grey-text text-darken-2">Fecha:</span>
                                                </div>
                                                <div class="col s12 m8 m-t-10">
                                                    <span><?php echo $date; ?></span>
                                                </div>
                                                <div class="col s12 m4 m-t-10">
                                                    <span class="blue-grey-text text-darken-2">Estatus:</span>
                                                </div>
                                                <div class="col s12 m8 m-t-10">
                                                    <?php if($s == 3){?><i class="material-icons m-l-10 blue-text">done_all</i><?php }?>
                                                    <?php if($s == 2){?><i class="material-icons m-l-10 green-text">done</i><?php }?>
                                                    <?php if($s == 1){?><i class="material-icons m-l-10 orange-text">done</i><?php }?>
                                                </div>

                                                <div class="col s12 m4 m-t-10">
                                                    <span class="blue-grey-text text-darken-2">Imagen:</span>
                                                </div>
                                                <div class="col s12 m8 m-t-10">
                                                    <span>
                                                    <?php
                                    $id = $ticketId;
                                     $path2 = "../ticket/" . $id;
                                    if (file_exists($path2)) {
                                        $directorio2 = opendir($path2);
                                        while ($archivo2 = readdir($directorio2)) {
                                            if (!is_dir($archivo2)) {?>      
                                                    
                                                    <a target="_blank" href="<?php echo $path2;?>/<?php echo $archivo2;?>" ><i class="material-icons m-l-10 blue-text">
                                                    search</i></a>
                                                    <?php }}}?>
                                                    </span>
                                                </div>


                                                <div class="col s12 m4 m-t-10">
                                                    <span class="blue-grey-text text-darken-2">Texto :</span>
                                                </div>
                                                <div class="col s12 m8 m-t-10">
                                                    <span><?php echo $ticketText; ?></span>
                                                </div>
                                                
                                                
                                               
                                                
                                           
                                         
                      <div class="col s12 m-t-20">
                                                    <div class="blue-grey lighten-2">
                                                        <p class="valign-wrapper white-text p-t-5 p-b-5 p-l-10">
                                                            <i class="material-icons m-r-20">book</i>
                                                            Respuesta Sitema
                                                        </p>
                                                    </div>
                                                </div>
     
  
   
                                                <div class="col s12 m4 m-t-15">
                                                    <span class="blue-grey-text text-darken-2">Completado:</span>
                                                </div>
                                                <div class="col s12 m8 m-t-15">
                                                    <?php if($s == 1){?><span><?php echo 'No Completado'; ?></span><?php }?>
                                                    <?php if($s == 2){?><?php echo $nA; ?><?php }?>
                                                    <?php if($s == 3){?><span><?php echo $nA; ?><?php }?>

                                                </div>

                                                <div class="col s12 m4 m-t-10">
                                                    <span class="blue-grey-text text-darken-2">Imagen:</span>
                                                </div>
                                                <div class="col s12 m8 m-t-10">

                                                    <?php if($s == 1){?>
                                                        <a  ><i class="material-icons m-l-10 grey-text">
                                                                        search</i></a>
                                                    <?php }?>
                                                    
                                                    <?php if($s == 2){?>
                                                        <span>
                                                    <?php
                                                        $id = $ticketId;
                                                        $path2 = "../ticketA/" . $id;
                                                        if (file_exists($path2)) {
                                                            $directorio2 = opendir($path2);
                                                            while ($archivo2 = readdir($directorio2)) {
                                                                if (!is_dir($archivo2)) {?>      
                                                                        
                                                                        <a target="_blank" href="<?php echo $path2;?>/<?php echo $archivo2;?>" ><i class="material-icons m-l-10 blue-text">
                                                                        search</i></a>
                                                                        <?php }}}?>
                                                    </span>
                                                    <?php }?>

                                                    <?php if($s == 3){?>
                                                        <span>
                                                    <?php
                                                        $id = $ticketId;
                                                        $path2 = "../ticketA/" . $id;
                                                        if (file_exists($path2)) {
                                                            $directorio2 = opendir($path2);
                                                            while ($archivo2 = readdir($directorio2)) {
                                                                if (!is_dir($archivo2)) {?>      
                                                                        
                                                                        <a target="_blank" href="<?php echo $path2;?>/<?php echo $archivo2;?>" ><i class="material-icons m-l-10 blue-text">
                                                                        search</i></a>
                                                                        <?php }}}?>
                                                    </span>
                                                    <?php }?>


                                                
                                               
                                                </div>


                                                 <div class="col s12 m4 m-t-10">
                                                    <span class="blue-grey-text text-darken-2">Texto:</span>
                                                </div>
                                                <div class="col s12 m8 m-t-10">
                                                <?php if($s == 1){?><span><?php echo 'No se ha llenado'; ?></span><?php }?>
                                                <?php if($s == 2){?><span><?php echo $ticketText2; ?></span></span><?php }?>
                                                <?php if($s == 3){?><span><?php echo $ticketText2; ?></span></span><?php }?>                          



                                                
                                                </div>
                                                



                                                 <div class="col s12 m4 m-t-10">
                                                    <span class="blue-grey-text text-darken-2">Revisado</span>
                                                </div>
                                                
                                                <div class="col s12 m8 m-t-10 m-b-20">

                                                    <?php if($s == 1){?><span><?php echo 'No Revisado'; ?></span><?php }?>
                                                    <?php if($s == 2){?><span><?php echo 'No Revisado'; ?></span><?php }?>
                                                    <?php if($s == 3){?><span><?php echo $r; ?></span><?php }?>
                                                  
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
    