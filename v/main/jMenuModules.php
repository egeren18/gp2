
<!-- categoria 3-->
<div class="row m-r-25">
                <div class="col s12 m-t--10">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20"><?php echo $name3; ?></p>
                    </div>
                </div>
</div>
<div class="row">
    <div class="col s12">
       <?php while ($management = $_management3 -> fetch_object()) {
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
                                    <a href="<?php echo $link = $allow -> jAccess == 1 && $management -> moduleController ? "../c/{$management -> moduleController}.php?m=index" : "javascript: void()"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $management -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = $allow -> jAccess == 1 ? "blue darken-2" : "grey"; ?> white-text"><?php echo $management -> moduleIcon; ?></i>
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
<!-- categoria 3 fin-->

<!-- categoria 4-->
<div class="row m-r-25">
                <div class="col s12 m-t--10">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20"><?php echo $name4; ?></p>
                    </div>
                </div>
</div>
<div class="row">
    <div class="col s12">
       <?php while ($management = $_management4 -> fetch_object()) {
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
                                    <a href="<?php echo $link = $allow -> jAccess == 1 && $management -> moduleController ? "../c/{$management -> moduleController}.php?m=index" : "javascript: void()"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $management -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = $allow -> jAccess == 1 ? "blue darken-2" : "grey"; ?> white-text"><?php echo $management -> moduleIcon; ?></i>
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
<!-- categoria 4 fin-->

<!-- categoria 5-->
<div class="row m-r-25">
                <div class="col s12 m-t--10">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20"><?php echo $name5; ?></p>
                    </div>
                </div>
</div>
<div class="row">
    <div class="col s12">
       <?php while ($management = $_management5 -> fetch_object()) {
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
                                    <a href="<?php echo $link = $allow -> jAccess == 1 && $management -> moduleController ? "../c/{$management -> moduleController}.php?m=index" : "javascript: void()"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $management -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = $allow -> jAccess == 1 ? "blue darken-2" : "grey"; ?> white-text"><?php echo $management -> moduleIcon; ?></i>
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
<!-- categoria 5 fin-->
<!-- categoria 2-->
<div class="row m-r-25">
                <div class="col s12 m-t--10">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20"><?php echo $name2; ?></p>
                    </div>
                </div>
</div>
<div class="row">
    <div class="col s12">
       <?php while ($management = $_management2 -> fetch_object()) {
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
                                    <a href="<?php echo $link = $allow -> jAccess == 1 && $management -> moduleController ? "../c/{$management -> moduleController}.php?m=index" : "javascript: void()"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $management -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = $allow -> jAccess == 1 ? "blue darken-2" : "grey"; ?> white-text"><?php echo $management -> moduleIcon; ?></i>
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
<!-- categoria 2 fin-->
<!-- categoria 6-->
<div class="row m-r-25">
                <div class="col s12 m-t--10">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20"><?php echo $name6; ?></p>
                    </div>
                </div>
</div>
<div class="row">
    <div class="col s12">
       <?php while ($management = $_management6 -> fetch_object()) {
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
                                    <a href="<?php echo $link = $allow -> jAccess == 1 && $management -> moduleController ? "../c/{$management -> moduleController}.php?m=index" : "javascript: void()"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $management -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = $allow -> jAccess == 1 ? "blue darken-2" : "grey"; ?> white-text"><?php echo $management -> moduleIcon; ?></i>
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
<!-- categoria 6 fin-->

<!-- categoria 7-->
<div class="row m-r-25">
                <div class="col s12 m-t--10">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20"><?php echo $name7; ?></p>
                    </div>
                </div>
</div>
<div class="row">
    <div class="col s12">
       <?php while ($management = $_management7 -> fetch_object()) {
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
                                    <a href="<?php echo $link = $allow -> jAccess == 1 && $management -> moduleController ? "../c/{$management -> moduleController}.php?m=index" : "javascript: void()"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $management -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = $allow -> jAccess == 1 ? "blue darken-2" : "grey"; ?> white-text"><?php echo $management -> moduleIcon; ?></i>
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
<!-- categoria 7 fin-->

<!-- categoria 8-->
<div class="row m-r-25">
                <div class="col s12 m-t--10">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20"><?php echo $name8; ?></p>
                    </div>
                </div>
</div>
<div class="row">
    <div class="col s12">
       <?php while ($management = $_management8 -> fetch_object()) {
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
                                    <a href="<?php echo $link = $allow -> jAccess == 1 && $management -> moduleController ? "../c/{$management -> moduleController}.php?m=index" : "javascript: void()"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $management -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = $allow -> jAccess == 1 ? "blue darken-2" : "grey"; ?> white-text"><?php echo $management -> moduleIcon; ?></i>
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
<!-- categoria 8 fin-->

<!-- categoria 9 -->
<div class="row m-r-25">
                <div class="col s12 m-t--10">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20"><?php echo $name9; ?></p>
                    </div>
                </div>
</div>
<div class="row">
    <div class="col s12">
       <?php while ($management = $_management9 -> fetch_object()) {
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
                                    <a href="<?php echo $link = $allow -> jAccess == 1 && $management -> moduleController ? "../c/{$management -> moduleController}.php?m=index" : "javascript: void()"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $management -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = $allow -> jAccess == 1 ? "blue darken-2" : "grey"; ?> white-text"><?php echo $management -> moduleIcon; ?></i>
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
<!-- categoria 9 fin -->
 
<!-- categoria 10 -->
<div class="row m-r-25">
                <div class="col s12 m-t--10">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20"><?php echo $name10; ?></p>
                    </div>
                </div>
</div>
<div class="row">
    <div class="col s12">
       <?php while ($management = $_management10 -> fetch_object()) {
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
                                    <a href="<?php echo $link = $allow -> jAccess == 1 && $management -> moduleController ? "../c/{$management -> moduleController}.php?m=list" : "javascript: void()"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $management -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = $allow -> jAccess == 1 ? "blue darken-2" : "grey"; ?> white-text"><?php echo $management -> moduleIcon; ?></i>
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
<!-- categoria 11 -->
<div class="row m-r-25">
                <div class="col s12 m-t--10">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20"><?php echo $name11; ?></p>
                    </div>
                </div>
</div>
<div class="row">
    <div class="col s12">
       <?php while ($management = $_management11 -> fetch_object()) {
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
                                    <a href="<?php echo $link = $allow -> jAccess == 1 && $management -> moduleController ? "../c/{$management -> moduleController}.php?m=index&d=1" : "javascript: void()"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $management -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = $allow -> jAccess == 1 ? "blue darken-2" : "grey"; ?> white-text"><?php echo $management -> moduleIcon; ?></i>
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
<!-- categoria 10 fin -->
 
 
   
        <!--    <div class="row m-r-25">
                <div class="col s12 m-t--10">
                    <div class="blue-grey lighten-1">
                        <p class="white-text p-t-5 p-b-5 p-l-20">M&oacute;dulos</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="col s12 m4 l3">
                        <div class="row">
                            <div class="col s3 m4 blue-grey lighten-2 hoverable">
                                <div class="center-align p-t-10 p-b-10">
                                    <a href="../c/notification.php?m=index" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="Notificaciones">
                                        <i class="material-icons <?php echo $icon = $qty["total"] > 0 ? "red" : "blue darken-2"; ?> white-text">notifications_active</i>
                                    </a>
                                </div>
                            </div>
                            <div class="col s8 m7 blue-grey lighten-3 p-t-10 p-b-30">
                                <div class="m-t-20 m-b-20 blue-grey-text text-darken-2 truncate">
                                    <span>Notificaciones</span>
                                    <span><?php echo $qty = $qty["total"] > 0 ? "(" . $qty["total"] . ")" : "(0)"; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <a href="<?php echo $link = $allow -> jAccess == 1 && $management -> moduleController ? "../c/{$management -> moduleController}.php?m=index" : "javascript: void()"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $management -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = $allow -> jAccess == 1 ? "blue darken-2" : "grey"; ?> white-text"><?php echo $management -> moduleIcon; ?></i>
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
-->
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
                                    <a href="<?php echo $link = $allow -> jAccess == 1 && $sagragp -> moduleController ? "../c/{$sagragp -> moduleController}.php?m=index" : "javascript: void()"; ?>" class="tooltipped btn-floating waves-effect waves-light blue" data-position="right" data-tooltip="<?php echo $sagragp -> moduleName; ?>">
                                        <i class="material-icons <?php echo $icon = $allow -> jAccess == 1 ? "blue darken-2" : "grey"; ?> white-text"><?php echo $sagragp -> moduleIcon; ?></i>
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
