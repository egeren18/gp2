<body class="blue-grey lighten-4">
    <header>

        <!-- Navbar -->
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper blue-grey darken-1">
                    <div class="row">
                        <div class="col s12">
                            <a href="" target="_blank" class="brand-logo">
                                <img class="responsive-img" src="../images/logoG.svg">
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- #END# Navbar -->


    </header>

    <main>

        <!-- Page -->
        <div class="container-fluid font-13">

            <!-- Breadcrumb -->
            <div class="row">
                <div class="col s12 m-b-5">
                    <a class="breadcrumb" href="#!">Ayuda al Usuario</a>
                    <a href="javascript: history.go(-1);" class="right">
                        <i class="material-icons blue-grey-text">cancel</i>
                    </a>
                </div>
            </div>
            <!-- #END# Breadcrumb -->

            <!-- Content -->
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12 m-b-5">
                                    <span class="breadcrumb  p-l-10">Reenvío de Creación de Usuario</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s10 offset-s1 m6 offset-m3 l4 offset-l4">
                                    <div class="card">
                                        <form id="form_validation" action="../c/main.php?m=dataForwardingDb" method="post">
                                            <div class="row">
                                                <div class="col m-t-10 m-l-10 m-r-10">
                                                    <p class="blue-grey-text text-darken-2">Por favor env&iacute;enos sus datos para reenviarle su usuario y contrase&ntilde;a nuevamente.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m-t-10">
                                                    <div class="input-field m-l-10 m-r-10">
                                                        <i class="material-icons prefix">person</i>
                                                        <input name="userName" placeholder="" id="icon_prefix" type="text" class="validate" required>
                                                        <label for="icon_prefix">Nombre</label>
                                                        <span class="helper-text" data-error="" data-success=""></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m-t--20">
                                                    <div class="input-field m-l-10 m-r-10">
                                                        <i class="material-icons prefix">business</i>
                                                        <input name="subscriberName" placeholder="" id="icon_prefix" type="text" class="validate" required>
                                                        <label for="icon_prefix">Suscriptor</label>
                                                        <span class="helper-text" data-error="" data-success=""></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m-t--20">
                                                    <div class="input-field m-l-10 m-r-10">
                                                        <i class="material-icons prefix">email</i>
                                                        <input name="emailFrom" placeholder="" id="icon_prefix" type="text" class="validate" required>
                                                        <label for="icon_prefix">Correo Electr&oacute;nico</label>
                                                        <span class="helper-text" data-error="Escriba una direcci&oacute;n v&aacute;lida" data-success=""></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m-t--20">
                                                    <div class="input-field m-l-20 m-r-20">
                                                        <input name="emailSubject" value="Solicitud de reenvío de correo de creación de usuario." placeholder="" id="icon_prefix" type="text" class="validate" disabled="">
                                                        <label class="active" for="icon_prefix">Asunto</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m-t--20">
                                                    <div class="input-field m-l-20 m-r-20">
                                                        <input name="emailTo" value="Soporte T&eacute;cnico." placeholder="" id="icon_prefix" type="text" class="validate" disabled="">
                                                        <label class="active" for="icon_prefix">Departamento</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m-t--20">
                                                    <div class="input-field m-l-20 m-r-20">
                                                        <input name="emailService" value="Servicio al Cliente." placeholder="" id="icon_prefix" type="text" class="validate" disabled="">
                                                        <label class="active" for="icon_prefix">Servicio Relacionado</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m-t--20">
                                                    <div class="input-field m-l-20 m-r-20">
                                                        <input name="emailPriority" value="Alta." placeholder="" id="icon_prefix" type="text" class="validate" disabled="">
                                                        <label class="active" for="icon_prefix">Prioridad</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m-b-15">
                                                    <div class="m-l-10 m-r-10">
                                                        <a href="javascript: history.go(-1)" class="btn red btn-small waves-light">Cancelar</a>
                                                        <button type="submit" class="btn blue btn-small waves-effect">Enviar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <span class="blue-grey-text font-14 left p-l-10">© 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
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
