<body class="ubuntu blue-grey lighten-4 font-13">

    <header>

        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper blue-grey darken-1">
                    <div class="row">
                        <div class="col s12">
                            <a href="#" data-target="sidenav-1" class="left sidenav-trigger hide-on-medium-and-up"><i class="material-icons">menu</i></a>
                            <a href="#" data-target="sidenav-2" class="right sidenav-trigger show-on-medium-and-up"><i class="material-icons">menu</i></a>
                            <div class="brand-logo">
                                <img class="responsive-img" src="../images/logoG.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div id="sidenav-1" class="sidenav sidenav-fixed blue-grey darken-1">
            <div class="center">
                <div class="p-t-30">  
                    <a href="../c/main.php?m=menu">
                        <i class="material-icons">home</i>
                        <p>Inicio</p>
                    </a>
                </div>
                <div class="p-t-15">
                    <a href="javascript: void(0)">
                        <i class="material-icons">build</i>
                        <p>Soporte IT</p>
                    </a>
                </div>
                <?php //if ($_SESSION["subscriberId"] == 1) { ?>
                <!--
                <div class="p-t-15">
                    <a href="javascript: void(0)">
                        <i class="material-icons">desktop_mac</i>
                        <p>Demo</p>
                    </a>
                </div>
                -->
                <?php //} ?>    
            </div>
        </div>

        <ul id="sidenav-2" class="sidenav sidenav-2 blue-grey darken-1">
            <div class="p-l-20 p-t-10 p-r-20 p-b-20">
                <a href="../logOut.php" class="waves-effect waves-light btn btn-block blue-grey btn-small">
                    <i class="material-icons left">close</i>
                    Cerrar Sesi&oacute;n
                </a>
                <a href="javascript: void(0)" class="waves-effect waves-light btn btn-block blue-grey btn-small m-b-5">
                    <i class="material-icons left">people</i>
                    Mi perfil
                </a>
                <div class="divider"></div>
                <?php if ($_SESSION["userTypeId"] == 2) { ?>
                <div class="white-text font-15 m-t-10 p-b-10">
                    <div class="m-t-10 ">
                        <span class="blue-grey-text text-lighten-2">Suscriptor:</span><br />
                        <span>
                            <?php echo $user -> subscriberName; ?>
                        </span>
                    </div>
                    <div class="m-t-10">
                        <span class="blue-grey-text text-lighten-2">Tipo de Suscripci&oacute;n:</span><br />
                        <span><?php echo $user -> subscriptionName; ?></span>
                    </div>
                    <div class="m-t-10">
                        <span class="blue-grey-text text-lighten-2">Fecha de Inicio:</span><br />
                        <span><?php echo $subscriberStart; ?></span>
                    </div>
                    <div class="m-t-10">
                        <span class="blue-grey-text text-lighten-2">Fecha de Vencimiento:</span><br />
                        <span><?php echo $subscriberExpires; ?></span>
                    </div>
                    <div class="m-t-10">
                        <span class="blue-grey-text text-lighten-2">D&iacute;as Disponibles:</span><br />
                        <span><?php echo $availableDays; ?></span>
                        <?php echo $alert; ?>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="white-text font-15 m-t-10 p-b-10">
                    <div class="m-t-10">
                        <span>SagraGP</span><br />
                        <span>Edificio Arquitect&oacute;nico Torre H, Piso 1, Oficina 1-4</span><br />
                        <span>Valencia, Estado Carabobo</span><br />
                        <span>Venezuela</span><br />
                        <span>Tel&eacute;fonos:</span><br />
                        <span>+ 58 241 824-4631</span>
                    </div>
                </div>
                <?php } else { ?>
                <div class="white-text font-15 m-t-10 p-b-10">
                    <div class="m-t-10">
                        <span>SagraGP</span><br />
                        <span>Edificio Arquitect&oacute;nico Torre H, Piso 1, Oficina 1-4</span><br />
                        <span>Valencia, Estado Carabobo</span><br />
                        <span>Venezuela</span><br />
                        <span>Tel&eacute;fonos:</span><br />
                        <span>+ 58 241 824-4631</span>
                    </div>
                </div>
                <?php } ?>
            </div>
        </ul>

        <div id="appContainer">
            <div class="progress">
                <div class="blue darken-2 indeterminate"></div>
            </div>
        </div>

    </header>

