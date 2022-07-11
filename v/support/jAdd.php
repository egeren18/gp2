    <section class="content">
        <div class="container-fluid">

            <div class="block-header">
                <ol class="breadcrumb bg-white">
                    <li><a class="font-10" href="../c/main.php?m=menu">Inicio</a></li>
                    <li><a class="font-10" href="javascript: void(0);">Clientes</a></li>
                    <li><a class="active font-10" href="javascript: void(0);">A&ntilde;adir</a></li>
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
            		<span class="col-blue font-13">Clientes</span>
            	</div>
            	<div class="body">
            		<form id="wizard_with_validation" action="client.php?m=createDb" method="post">

            			<p>Datos Generales</p>
            			<fieldset>
            				<div class="p-t-20">
            					<div class="row">
            						<div class="col-lg-6">
            							<div class="form-group form-float">
            								<small class="font-10 col-blue">Nombre o Raz&oacute;n Social</small>
            								<div class="input-group">
            									<div class="form-line">
            										<input type="text" class="form-control font-10" name="clientName" required>
            									</div>
            								</div>
            							</div>
            						</div>
            						<div class="col-lg-6">
            							<div class="form-group form-float">
            								<small class="font-10 col-blue">NIT</small>
            								<div class="input-group">
            									<div class="form-line">
            										<input type="text" class="form-control font-10" name="clientNit" required>
            									</div>
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            			</fieldset>

            			<p>Datos del Ubicaci&oacute;n</p>
            			<fieldset>
            				<div class="p-t-20">
            					<div class="row">
            						<div class="col-xs-12">
										<div class="form-group">
            								<small class="font-10 col-blue">Direcci&oacute;n</small>
            								<div class="input-group">
				                                <div class="form-line">
				                                    <textarea rows="1" name="clientAddress" class="form-control no-resize auto-growth" required></textarea>
				                                </div>
			                                </div>
			                            </div>
            						</div>
            					</div>
            					<div class="row">
            						<div class="col-lg-6 m-t--20">
            							<div class="form-group form-float">
            								<small class="font-10 col-blue">Ciudad</small>
            								<div class="input-group">
            									<div class="form-line">
            										<input type="text" class="form-control font-10" name="clientCity" required>
            									</div>
            								</div>
            							</div>
            						</div>
            						<div class="col-lg-6 m-t--20">
            							<div class="form-group form-float">
            								<small class="font-10 col-blue">Estado</small>
            								<div class="input-group">
            									<div class="form-line">
            										<input type="text" class="form-control font-10" name="clientState" required>
            									</div>
            								</div>
            							</div>
            						</div>
            					</div>
            					<div class="row">
            						<div class="col-lg-6 m-t--20">
                                        <div class="form-group form-float">
               								<small class="font-10 col-blue">Pa&iacute;s</small>
                                            <div class="input-group">
       	    									<select class="bootstrap-select" required="">
                                                    <?php while ($r_country = mysqli_fetch_array($country)) { ?>
                                                    <option value=""><?php echo $r_country["countryName"]; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
            						</div>
            						<div class="col-lg-6 m-t--20">
            							<div class="form-group form-float">
            								<small class="font-10 col-blue">C&oacute;digo Postal</small>
            								<div class="input-group">
            									<div class="form-line">
            										<input type="text" class="form-control font-10" name="clientZipCode" required>
            									</div>
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            			</fieldset>

            			<p>Datos de Contacto</p>
            			<fieldset>
            				<div class="p-t-20">
            					<div class="row">
            						<div class="col-lg-6">
            							<div class="form-group form-float">
            								<small class="font-10 col-blue">Persona Contacto</small>
            								<div class="input-group">
            									<div class="form-line">
            										<input type="text" class="form-control font-10" name="clientContact" required>
            									</div>
            								</div>
            							</div>
            						</div>
            						<div class="col-lg-6">
            							<div class="form-group form-float">
            								<small class="font-10 col-blue">Tel&eacute;fono Movil</small>
            								<div class="input-group">
            									<div class="form-line">
            										<input type="text" class="form-control font-10" name="clientPhone1" required>
            									</div>
            								</div>
            							</div>
            						</div>
            					</div>
            					<div class="row">
            						<div class="col-lg-6 m-t--20">
            							<div class="form-group form-float">
            								<small class="font-10 col-blue">Tel&eacute;fono Auxiliar</small>
            								<div class="input-group">
            									<div class="form-line">
            										<input type="text" class="form-control font-10" name="clientPhone2" required>
            									</div>
            								</div>
            							</div>
            						</div>
            						<div class="col-lg-6 m-t--20">
            							<div class="form-group form-float">
            								<small class="font-10 col-blue">Correo Electr&oacute;nico</small>
            								<div class="input-group">
            									<div class="form-line">
            										<input type="email" class="form-control font-10" name="clientEmail" required>
            									</div>
            								</div>
            							</div>
            						</div>
            					</div>
            					<div class="row">
            						<div class="col-lg-6 m-t--20">
            							<div class="form-group form-float">
            								<small class="font-10 col-blue">P&aacute;gina Web</small>
            								<div class="input-group">
            									<div class="form-line">
            										<input type="text" class="form-control font-10" name="clientWebPage" required>
            									</div>
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            			</fieldset>

            			<p>A&ntilde;adir registro</p>
            			<fieldset>
            				<div class="p-t-20">
            					<div class="row">
            						<div class="col-xs-12">
										<div class="form-group">
            								<small class="font-10 col-blue">Observaciones</small>
            								<div class="input-group">
				                                <div class="form-line">
				                                    <textarea rows="1" name="clientObservations" class="form-control no-resize auto-growth" required></textarea>
				                                </div>
			                                </div>
			                            </div>
            						</div>
            					</div>
            					<div class="row">
            						<div class="col-xs-12 m-t--20">
			            				<input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
    			        				<label for="acceptTerms-2"><span class="font-10">He revisado todos los datos.</span></label>
            						</div>
            					</div>
           					</div>
            			</fieldset>
            		</form>

                    <hr />

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
