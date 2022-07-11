            <div class="row m-r-25">
                <div class="col s12 m-t--10">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20">Usuarios</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
               
                    <div class="col s12 m4 l3">
                        <div class="row">
                            <div class="col s3 m4 blue-grey lighten-2 hoverable">
                                <div class="center-align p-t-10 p-b-10">
                                    <a 
                                    href="#help87" class="modal-trigger tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="Clientes Perspectiva">
                                        <i class="material-icons <?php echo $icon = $_SESSION["userAdmin"] == 3 ? 'blue-grey lighten-2' : 'blue darken-2'; ?> white-text">people</i>
                                    </a>
                                </div>
                            </div>
                            <div class="col s8 m7 blue-grey lighten-3 p-t-10 p-b-30">
                                <div class="m-t-20 m-b-20 blue-grey-text text-darken-2 truncate">Clientes Perspectiva</div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l3">
                        <div class="row">
                            <div class="col s3 m4 blue-grey lighten-2 hoverable">
                                <div class="center-align p-t-10 p-b-10">
                                    <a href="#help25" class="modal-trigger tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="Clientes">
                                        <i class="material-icons <?php echo $icon = $_SESSION["userAdmin"] == 3 ? 'blue-grey lighten-2' : 'blue darken-2'; ?> white-text">folder_shared</i>
                                    </a>
                                </div>
                            </div>
                            <div class="col s8 m7 blue-grey lighten-3 p-t-10 p-b-30">
                                <div class="m-t-20 m-b-20 blue-grey-text text-darken-2 truncate">Clientes</div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l3">
                        <div class="row">
                            <div class="col s3 m4 blue-grey lighten-2 hoverable">
                                <div class="center-align p-t-10 p-b-10">
                                    <a href="#help24" class="modal-trigger tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="Usuarios">
                                        <i class="material-icons <?php echo $icon = $_SESSION["userAdmin"] == 3 ? 'blue-grey lighten-2' : 'blue darken-2'; ?> white-text">people</i>
                                    </a>
                                </div>
                            </div>
                            <div class="col s8 m7 blue-grey lighten-3 p-t-10 p-b-30">
                                <div class="m-t-20 m-b-20 blue-grey-text text-darken-2 truncate">Usuarios</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row m-r-25">
                <div class="col s12 m-t--5">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20">Auditor&iacute;a</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <?php while ($audit = $_audit -> fetch_object()) {
                        $_allow = mysqli_query($master, "
                            SELECT * FROM accesssubscriber
                            WHERE moduleId = '" . $audit -> moduleId . "'
                            AND subscriberId = '" . $_SESSION["subscriberId"] . "'
                        ");
                        $allow = $_allow -> fetch_object();
                    ?>
                    <div class="col s12 m4 l3">
                        <div class="row">
                            <div class="col s3 m4 blue-grey lighten-2 hoverable">
                                <div class="center-align p-t-10 p-b-10">
                                    <a href="#help<?php echo $audit -> moduleId; ?>" class="modal-trigger tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $audit -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = isset($allow) && $allow -> jAccess == 1 ? "blue darken-2" : "blue-grey lighten-2"; ?> white-text"><?php echo $audit -> moduleIcon; ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col s8 m7 blue-grey lighten-3 p-t-10 p-b-30">
                                <div class="m-t-20 m-b-20 blue-grey-text text-darken-2 truncate"><?php echo $audit -> moduleName; ?></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            
          <div class="row m-r-25">
                <div class="col s12 m-t--5">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20">Herramientas</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <?php while ($herramientas = $_herramientas -> fetch_object()) {
                       $_allow = mysqli_query($master, "
                            SELECT * FROM accesssubscriber
                            WHERE moduleId = '" . $herramientas  -> moduleId . "'
                            AND subscriberId = '" . $_SESSION["subscriberId"] . "'
                        ");
                        $allow = $_allow -> fetch_object();
                    ?>
                    
                    <div class="col s12 m4 l3">
                        <div class="row">
                            <div class="col s3 m4 blue-grey lighten-2 hoverable">
                                <div class="center-align p-t-10 p-b-10">
                                    <a href="<?php echo $link = isset($allow) && $allow -> jAccess == 1 && $herramientas -> moduleController ? "../c/{$herramientas-> moduleController}.php?m=index" : "javascript: void()"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $herramientas-> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = isset($allow) && $allow -> jAccess == 1 ? "blue darken-2" : "blue-grey lighten-2"; ?> white-text"><?php echo $herramientas-> moduleIcon; ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col s8 m7 blue-grey lighten-3 p-t-10 p-b-30">
                                <div class="m-t-20 m-b-20 blue-grey-text text-darken-2 truncate"><?php echo $herramientas -> moduleName; ?></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            
            <div class="row m-r-25">
                <div class="col s12 m-t--5">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20">Administraci&oacute;n</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <?php while ($administration = $_administration -> fetch_object()) { ?>
                    <div class="col s12 m4 l3">
                        <div class="row">
                            <div class="col s3 m4 blue-grey lighten-2 hoverable">
                                <div class="center-align p-t-10 p-b-10">
                                    <a href="<?php echo $link = isset($allow) && $allow -> jAccess == 1 && $administration -> moduleController ? "../c/{$administration -> moduleController}.php?m=index" : "javascript: void()"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $administration -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = isset($allow) && $allow -> jAccess == 1 ? "blue darken-2" : "blue-grey lighten-2"; ?> white-text"><?php echo $administration -> moduleIcon; ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col s8 m7 blue-grey lighten-3 p-t-10 p-b-30">
                                <div class="m-t-20 m-b-20 blue-grey-text text-darken-2 truncate"><?php echo $administration -> moduleName; ?></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            
            <div class="row m-r-25">
                <div class="col s12 m-t--5">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20">Recursos Humanos</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                       <div class="col s12 m4 l3">
                           
                        <div class="row">
                            <div class="col s3 m4 blue-grey lighten-2 hoverable">
                                <div class="center-align p-t-10 p-b-10">
                                    <a href="#help2" class="modal-trigger tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="Usuarios">
                                        <i class="material-icons <?php echo $icon = $_SESSION["userAdmin"] == 3 ? 'blue-grey lighten-2' : 'orange'; ?> white-text">people</i>
                                    </a>
                                </div>
                            </div>
                            <div class="col s8 m7 blue-grey lighten-3 p-t-10 p-b-30">
                                <div class="m-t-20 m-b-20 blue-grey-text text-darken-2 truncate">Selecci&oacute;n de Personal</div>
                            </div>
                        </div>
                    </div>
                    <?php while ($rrhh = $_rrhh -> fetch_object()) { ?>
                    <div class="col s12 m4 l3">
                        <div class="row">
                            <div class="col s3 m4 blue-grey lighten-2 hoverable">
                                <div class="center-align p-t-10 p-b-10">
                                    <a href="<?php echo $link = isset($allow) && $allow -> jAccess == 1 && $rrhh -> moduleController ? "../c/{$rrhh -> moduleController}.php?m=index" : "javascript: void()"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $rrhh -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = isset($allow) && $allow -> jAccess == 1 ? "blue darken-2" : "blue-grey lighten-2"; ?> white-text"><?php echo $rrhh -> moduleIcon; ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col s8 m7 blue-grey lighten-3 p-t-10 p-b-30">
                                <div class="m-t-20 m-b-20 blue-grey-text text-darken-2 truncate"><?php echo $rrhh -> moduleName; ?></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="row m-r-25">
                <div class="col s12 m-t--10">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20">Soporte T&eacute;cnico</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col s12">
                    <?php while ($support = $_support -> fetch_object()) { ?>
                    <div class="col s12 m4 l3">
                        <div class="row">
                            <div class="col s3 m4 blue-grey lighten-2 hoverable">
                                <div class="center-align p-t-10 p-b-10">
                                    <a href="<?php echo $link = isset($allow) && $allow -> jAccess == 1 && $support -> moduleController ? "../c/{$support -> moduleController}.php?m=index" : "javascript: void()"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $support -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = isset($allow) && $allow -> jAccess == 1 ? "blue darken-2" : "blue-grey lighten-2"; ?> white-text"><?php echo $support -> moduleIcon; ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col s8 m7 blue-grey lighten-3 p-t-10 p-b-30">
                                <div class="m-t-20 m-b-20 blue-grey-text text-darken-2 truncate"><?php echo $support -> moduleName; ?></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="row m-r-25">
                <div class="col s12 m-t--10">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20">Red</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <?php while ($net = $_net -> fetch_object()) { ?>
                    <div class="col s12 m4 l3">
                        <div class="row">
                            <div class="col s3 m4 blue-grey lighten-2 hoverable">
                                <div class="center-align p-t-10 p-b-10">
                                    <a href="<?php echo $link = isset($allow) && $allow -> jAccess == 1 && $net -> moduleController ? "../c/{$net -> moduleController}.php?m=index" : "javascript: void()"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $net -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = isset($allow) && $allow -> jAccess == 1 ? "blue darken-2" : "blue-grey lighten-2"; ?> white-text"><?php echo $net -> moduleIcon; ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col s8 m7 blue-grey lighten-3 p-t-10 p-b-30">
                                <div class="m-t-20 m-b-20 blue-grey-text text-darken-2 truncate"><?php echo $net -> moduleName; ?></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
