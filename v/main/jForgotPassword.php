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
                                    <span class="breadcrumb  p-l-10">Olvid&eacute; mi contrase&ntilde;a</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col l4 offset-l4">
                                    <div class="card">
                                        <form id="form_validation" method="POST" action="../c/main.php?m=securityQuestion">
                                            <div class="row">
                                                <div class="col m-t-10 m-l-10 m-r-10">
                                                    <p class="font-14">Ingrese la dirección de correo electrónico que utilizó para registrarse y siga las instrucciones para restablecer su contraseña.</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m-t-10">
                                                    <div class="input-field m-l-10 m-r-10">
                                                        <i class="material-icons prefix">email</i>
                                                        <input placeholder="" id="icon_prefix" type="email" class="validate" required>
                                                        <label for="icon_prefix">Correo Electr&oacute;nico:</label>
                                                        <span class="helper-text" data-error="Escriba una direcci&oacute;n v&aacute;lida" data-success=""></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12 m-t--20 m-b-15">
                                                    <div class="m-l-10 m-r-10">
                                                        <a href="javascript: history.go(-1)" class="btn red btn-small waves-light">Cancelar</a>
                                                        <button type="submit" class="btn blue btn-small waves-effect">Continuar</button>
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
