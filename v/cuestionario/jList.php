<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Cuestionario</a>
            <a href="#!" class="breadcrumb ">Lista</a>
            <a id="ihelp" href="#help" class="tooltipped right cuestionario-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                <i class="material-icons blue-text">help</i>
            </a>
            <a id="iforum" href="#ticket" class="tooltipped right cuestionario-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
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
                            <span class="breadcrumb  p-l-10">Cuestionario <?php echo $id; ?> AC</span>
                            <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar"><i class="material-icons blue-grey-text">cancel</i></a>
                            <a href="<?php if ($_SESSION["userAdmin"] == 4) { echo "javascript: void(0)"; } else { echo $link = $allow -> jCreate == 1 ? "../c/{$module}.php?m=create" : "javascript: void(0)"; } ?>" class="tooltipped right" data-position="left" data-tooltip="Nuevo Registro">
                                <i class="material-icons <?php if ($_SESSION["userAdmin"] == 4) { echo "grey-text"; } else { echo $color = $allow -> jCreate == 1 ? "blue-text" : "grey-text"; } ?>">add_circle</i>
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
                                                <td >M&oacute;dulo Id </td>
                                                <td class="td-block">Nombres </td>
                                           

                                                <?php if ($_SESSION["userAdmin"] == 4) { ?>
                                                <td >Consultar</td>
                                                <?php } else { ?>
                                                <td>Acci&oacute;n</td>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($cuestionario = $_cuestionario -> fetch_object()) { ?>
                                            <tr>
                                            <td>
                                                    <?php echo $cuestionario -> itemId; ?>
                                                </td>
                                                <td>
                                                   Pregunta <?php echo $cuestionario -> itemId; ?>
                                                </td>
                                          
                                              
                                               
                                                <?php if ($_SESSION["userAdmin"] == 4) { ?>
                                                <td class="center">
                                                    <a target="_blank" href='../plugins/pdf/doc/cuestionario.php?id=<?php echo $cuestionario -> cuestionarioId; ?>' class='tooltipped' data-position='left' data-tooltip='Consultar'><i class='material-icons blue-text'>description</i></a>
                                                </td>
                                                <?php } else { ?>
                                                <td>
                                                    <a href="
                                                        <?php
                                                        if ($_SESSION["userAdmin"] == 4) {
                                                            $allow = 1;
                                                            echo $link = $allow == 1 ? "../c/{$module}.php?m=read&id={$cuestionario -> cuestionarioId}" : "javascript: void(0)";
                                                        }
                                                        else {
                                                            echo $link = $allow -> jRead == 1 ? "../c/{$module}.php?m=read&id={$cuestionario -> cuestionarioId}" : "javascript: void(0)";
                                                        }
                                                        ?>" class="tooltipped" data-position="left" data-tooltip="Consultar"><i class="material-icons 
                                                        <?php
                                                        if ($_SESSION["userAdmin"] == 4) {
                                                            $allow = 1;
                                                            echo $color = $allow == 1 ? "blue-text" : "grey-text";
                                                        }
                                                        else {
                                                            echo $color = $allow -> jRead == 1 ? "blue-text" : "grey-text";
                                                        }
                                                        ?>">description</i></a>
                                                    <a href="
                                                        <?php
                                                        if ($_SESSION["userAdmin"] == 4) {
                                                            $allow = 1;
                                                            echo $link = $allow == 1 ? "../c/{$module}.php?m=update&id={$cuestionario -> cuestionarioId}" : "javascript: void(0)";
                                                        }
                                                        else {
                                                            echo $link = $allow -> jUpdate == 1 ? "../c/{$module}.php?m=update&id={$cuestionario -> itemId}" : "javascript: void(0)";
                                                        }
                                                        ?>" class="tooltipped m-l-10" data-position="left" data-tooltip="Modificar"><i class="material-icons 
                                                        <?php
                                                        if ($_SESSION["userAdmin"] == 4) {
                                                            $allow = 1;
                                                            echo $color = $allow == 1 ? "blue-text" : "grey-text";
                                                        }
                                                        else {
                                                            echo $color = $allow -> jUpdate == 1 ? "blue-text" : "grey-text";
                                                        }
                                                        ?>">edit</i></a>
                                                    <a href="
                                                        <?php
                                                        if ($_SESSION["userAdmin"] == 4) {
                                                            $allow = 1;
                                                            echo $link = $allow == 1 ? "../c/{$module}.php?m=delete&id={$cuestionario -> cuestionarioId}" : "javascript: void(0)";
                                                        }
                                                        else {
                                                            echo $link = $allow -> jDelete == 1 ? "../c/{$module}.php?m=delete&id={$cuestionario -> cuestionarioId}" : "javascript: void(0)";
                                                        }
                                                        ?>" class="tooltipped m-l-10" data-position="top" data-tooltip="Eliminar"><i class="material-icons 
                                                        <?php
                                                        if ($_SESSION["userAdmin"] == 4) {
                                                            $allow = 1;
                                                            echo $color = $allow == 1 ? "red-text" : "grey-text";
                                                        }
                                                        else {
                                                            echo $color = $allow -> jDelete == 1 ? "red-text" : "grey-text";
                                                        }
                                                        ?>">delete</i></a>
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
