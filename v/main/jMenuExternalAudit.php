            <div class="row m-r-25">
                <div class="col s12 m-t--10">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20">M&oacute;dulos</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <?php while ($management = $_management -> fetch_object()) {
                        $_allow = mysqli_query($master, "
                            SELECT * FROM access
                            WHERE userId = '" . $_SESSION["userId"] . "'
                            AND moduleId = '" . $management -> moduleId . "'
                        ");
                        $allow = $_allow -> fetch_object();
                    ?>
                    <div class="col s12 m4 l3">
                        <div class="row">
                            <div class="col s3 m4 blue-grey lighten-2 hoverable">
                                <div class="center-align p-t-10 p-b-10">
                                    <a href="<?php echo $link = "../c/{$management -> moduleController}.php?m=index"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $management -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = "blue darken-2"; ?> white-text"><?php echo $management -> moduleIcon; ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col s8 m7 blue-grey lighten-3 p-t-10 p-b-30">
                                <div class="m-t-20 m-b-20 blue-grey-text text-darken-2 truncate">
                                    <?php echo $management -> moduleName; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <div class="row m-r-25">
                <div class="col s12 m-t--5">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20">Tablas Maestras</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <?php while ($sagragp = $_sagragp -> fetch_object()) {
                        $_allow = mysqli_query($master, "
                            SELECT * FROM access
                            WHERE userId = '" . $_SESSION["userId"] . "'
                            AND moduleId = '" . $sagragp -> moduleId . "'
                        ");
                        $allow = $_allow -> fetch_object();
                    ?>
                    <div class="col s12 m4 l3">
                        <div class="row">
                            <div class="col s3 m4 blue-grey lighten-2 hoverable">
                                <div class="center-align p-t-10 p-b-10">
                                    <a target="_blank" href="<?php echo $link = "../plugins/pdf/doc/{$sagragp -> moduleController}.php"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $sagragp -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = "blue darken-2"; ?> white-text"><?php echo $sagragp -> moduleIcon; ?></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col s8 m7 blue-grey lighten-3 p-t-10 p-b-30">
                                <div class="m-t-20 m-b-20 blue-grey-text text-darken-2 truncate"><?php echo $sagragp -> moduleName; ?></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
