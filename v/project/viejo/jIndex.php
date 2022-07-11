    <main>
        <div class="container">
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down">Proyectos</a>
                    <a href="#!" class="breadcrumb ">Lista</a>
                    <a href="#help" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Manual de Usuario">
                        <i class="material-icons blue-text">help</i>
                    </a>
                    <a href="#ticket" class="tooltipped right modal-trigger m-r-5" data-position="left" data-tooltip="Solicitar Ayuda">
                        <i class="material-icons blue-text">forum</i>
                    </a>
                    <span class="blue-grey-text text-darken-2 right p-r-30 hide-on-small-only">
                        <?php echo $_SESSION["userFullName"];?>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <span class="blue-text p-l-10">Proyectos</span>
                                    <a href="../c/main.php?m=menu" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                    <a href="../c/project.php?m=add" class="tooltipped right" data-position="left" data-tooltip="Nuevo Registro">
                                        <i class="material-icons blue-text">add_circle</i>
                                    </a>
                                </div>
                            </div>
                            <div class="card m-l-5 m-r-5">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="p-t-20 p-b-20 p-l-20 p-r-20">
                                            <table id="example" class="display nowrap" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <td>Cliente</td>
                                                        <td>Proyecto</td>
                                                        <td class="td-block right-align">Equipo de Trabajo</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($project = $_project -> fetch_object()) {
                                                        $_items = mysqli_query($connection, "SELECT count(*) AS no FROM acanswer WHERE acId = '" . $project -> acId . "'");
                                                        $items = $_items -> fetch_object();
                                                        $_answer = mysqli_query($connection, "SELECT count(*) AS answer FROM acanswer WHERE acId = '" . $project -> acId . "'");
                                                        $answer = $_answer -> fetch_object();
                                                        $_service = mysqli_query($master, "SELECT * FROM service WHERE serviceId = '" . $project -> serviceId . "'");
                                                        $service = $_service -> fetch_object();
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $project -> clientName; ?></td>
                                                        <td><a href="../c/project.php?m=planning&c=<?php echo $project -> projectId; ?>"><?php echo $service -> serviceName; ?></a></td>
                                                        <td><a href="../c/project.php?m=projectTeam&p=<?php echo $project -> projectId; ?>">Integrantes</a></td>
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
                                    <span class="blue-grey-text font-14 left p-l-10">© 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versión: 1.0.0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>