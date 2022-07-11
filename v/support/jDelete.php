    <section class="content">
        <div class="container-fluid">

            <div class="block-header">
                <ol class="breadcrumb bg-white">
                    <li><a class="font-10" href="../c/main.php?m=menu">Inicio</a></li>
                    <li><a class="font-10" href="javascript: void(0);">Clientes</a></li>
                    <li><a class="active font-10" href="javascript: void(0);">Eliminar</a></li>
                    <a href="../c/main.php?m=menu" class="pull-right m-t--2" data-toggle="tooltip" data-placement="left" title="Cerrar">
                        <i class="material-icons col-blue-grey">cancel</i>
                    </a>
                    <span data-toggle="modal" data-target="#help">
                        <a href="#" class="pull-right m-t--2" data-toggle="tooltip" data-placement="left" title="Ayuda">
                            <i class="material-icons col-blue-grey">help</i>
                        </a>
                    </span>
                </ol>
            </div>

            <div class="card m-t--5">
            	<div class="header bg-white">
            		<span class="col-blue font-12">Clientes</span>
            	</div>
            	<div class="body">
            		<form id="sign_up" action="client.php?m=deleteDb&c=<?php echo $clientId; ?>" method="post">

                        <div class="card">
                            <div class="p-l-20 p-t-20 p-r-20">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <span class="font-10">Eliminar registro</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group form-float">
                                            <span class="font-10 col-blue p-r-10">Nombre o Raz&oacute;n Social:</span>
                                            <span class="font-10"><?php echo $clientName; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 m-t--10">
                                        <a id="cancel" href="../c/client.php?m=list" class="btn btn-danger waves-effect"></a>
                                        <button id="delete" class="btn btn-primary waves-effect" type="submit"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
            		</form>

                    <hr />

                    <!-- Footer -->
                    <div class="row m-b--30">
                    	<div class="col-xs-9">
                    		<span class="grey-text font-10 p-b-10 pull-left">&copy; 2019 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                    	</div>
                    	<div class="col-xs-3">
                    		<span class="grey-text font-10 p-b-10 pull-right align-right">Versión: 1.0.0</span>
                    	</div>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="help" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header blue-text">
                        <span class="font-10">Clientes</span>
                    </div>
                    <div class="modal-body font-10 align-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                        vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                        Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                        nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                        Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-blue white-text waves-effect" data-dismiss="modal">SALIR</button>
                    </div>
                </div>
            </div>
        </div>

	</section>
