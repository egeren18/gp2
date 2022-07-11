    <main>

        <div class="container">

            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Suscriptor en Perspectiva / Usuarios </a>
                    <a href="#!" class="breadcrumb ">Lista</a>
                    <a id="ihelp" href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                        <i class="material-icons blue-text">help</i>
                    </a>
                    <a id="iforum" href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
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
                                    <span class="breadcrumb  p-l-10">Suscriptor en Perspectiva / Usuarios </span>
                                    <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar"><i class="material-icons blue-grey-text">cancel</i></a>
                                    <a href="#" 
                                    class="tooltipped right" data-position="left" data-tooltip="Nuevo Registro">
                                        <i class="material-icons grey-text">add_circle</i>
                                    </a>
                                </div>
                            </div>
                            <div class="card m-t-10 m-l-5 m-r-5">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                            <table id="example" class="display nowrap" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <td>Nombre</td>
                                                        <td>Suscripci&oacute;n</td>
                                                        <td>Inicio</td>
                                                        <td>Vencimiento</td>
                                                        <td class="td-block">Saldo</td>
                                                        <?php if ($_SESSION["userAdmin"] == 4) { ?>
                                                        <td class="center">Consultar</td>
                                                        <?php } else { ?>
                                                        <td>Acci&oacute;n</td>
                                                        <?php } ?>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php while ($subscriber = $_subscriber -> fetch_object()) { ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $subscriber -> subscriberName; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $subscriber -> subscriptionName; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $subscriber -> subscriberStart; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $subscriber -> subscriberExpires; ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            $start = $subscriber -> subscriberStart;
                                                            $subscriberStart = date('Y-m-d', strtotime($start));
                                                            $expires = $subscriber -> subscriberExpires;
                                                            $subscriberExpires = date('Y-m-d', strtotime($expires));
                                                            $datetime1 = new DateTime(date('Y-m-d H:i:s'), new DateTimeZone('America/Caracas'));
                                                            $datetime2 = new DateTime(($expires), new DateTimeZone('America/Caracas'));
                                                            $interval = $datetime1 -> diff($datetime2);
                                                            echo $days = $interval -> format('%R%a d&iacute;as');
                                                            ?>
                                                        </td>
                                                        <?php if ($_SESSION["userAdmin"] == 4) { ?>
                                                        <td class="center">
                                                            <a target="_blank" href='../plugins/pdf/doc/subscriber.php?id=<?php echo $subscriber -> subscriberId; ?>' class='tooltipped' data-position='left' data-tooltip='Ver'><i class='material-icons blue-text'>description</i></a>
                                                        </td>
                                                        <?php } else { ?>
                                                        <td>
                                                            <a href="
                                                                <?php
                                                                if ($_SESSION["userAdmin"] == 4) {
                                                                    $allow = 1;
                                                                    echo $link = $allow == 1 ? "../c/{$module}.php?m=read&id={$subscriber -> subscriberId}" : "javascript: void(0)";
                                                                }
                                                                else {
                                                                    echo $link = $allow -> jRead == 1 ? "../c/{$module}.php?m=read&id={$subscriber -> subscriberId}" : "javascript: void(0)";
                                                                }
                                                                ?>" class="tooltipped" data-position="left" data-tooltip="Crear Usuarios "><i class="material-icons
                                                                <?php
                                                                if ($_SESSION["userAdmin"] == 4) {
                                                                    $allow = 1;
                                                                    echo $color = $allow == 1 ? "blue-text" : "grey-text";
                                                                }
                                                                else {
                                                                    echo $color = $allow -> jRead == 1 ? "blue-text" : "grey-text";
                                                                }
                                                                ?>">people</i></a> 
                                                        </td>
                                                        <?php } ?>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
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
