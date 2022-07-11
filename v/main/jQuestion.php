<body class="theme-blue-grey" onload="jTime()">

	<!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="javascript: void(0);">
                    <img class="p-l-15 m-t--15" src="../images/logoG.svg" width="180">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="m-t-25 p-l-30 p-r-10">
                        <small class="col-white font-13">
                            <span id="container_1"></span>
                            <?php echo $today = date("d"); ?>
                            <span id="container_2"></span>
                        </small>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->

    <div class="container-fluid">

        <!-- Breadcrumb -->
        <div class="block-header p-t-85">
            <ol class="breadcrumb bg-white">
                <li><a class="font-10" href="javascript: void(0);">Ayuda al Usuario</a></li>
                <li><a class="font-10" href="javascript: void(0);">Pregunta de Seguridad</a></li>
                <a href="../c/main.php?m=logInEmail" class="pull-right m-t--2" data-toggle="tooltip" data-placement="left" title="Cerrar">
                    <i class="material-icons col-blue-grey">cancel</i>
                </a>
            </ol>
        </div>
        <!-- #END# Breadcrumb -->

        <!-- Card -->
        <div class="card m-t--5">
        	<div class="header bg-white">
        		<span class="col-blue font-12">Pregunta de Seguridad</span>
        	</div>
        	<div class="body">
        		<div class="p-t-20">
        			<div class="row">
        				<div class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
        					<div class="card animated zoomIn">
        						<div class="p-t-20 p-r-20 p-l-20">
        							<form id="form_validation" method="POST" action="../c/main.php?m=validateAnswer&c=<?php echo $userId; ?>">
        								<p class="font-10 p-b-10">Por favor responda su pregunta de seguridad.</p>
        								<div class="row">
        									<div class="col-xs-12">
        										<small id="question" class="font-10 col-blue"></small>
        										<div class="form-group form-float">
        											<div class="input-group">
        												<div class="form-line">
        													<input class="form-control font-10" disabled="" type="text" value="<?php echo $r_user["userQuestion"]; ?>">
        												</div>
        											</div>
        										</div>
        									</div>
        								</div>
        								<div class="row">
        									<div class="col-xs-12 m-t--30">
        										<small id="answer" class="font-10 col-blue"></small>
        										<div class="form-group form-float">
        											<div class="input-group">
        												<div class="form-line">
        													<input id="userAnswer" type="password" class="form-control font-10" name="userAnswer" required>
        												</div>
        												<span class="input-group-addon">
        													<a href="javascript:void(0)">
        														<i class="material-icons grey-blue-text" id="show_4">visibility</i>
        													</a>
        												</span>
        											</div>
        										</div>
        									</div>
        								</div>
        								<div class="row">
        									<div class="col-sm-12 p-b-10 m-t--20">
        										<a id="cancel" href="javascript: history.go(-1)" class="btn btn-danger waves-effect"></a>
        										<button id="continue" type="submit" class="btn btn-primary waves-effect"></button>
        									</div>
        								</div>
        							</form>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>

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
        		<!-- #END# Footer -->

        	</div>
        </div>
        <!-- #END# Card -->

    </div>


