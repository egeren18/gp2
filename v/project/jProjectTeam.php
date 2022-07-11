    <main>

        <!-- Page -->
        <div class="container">

            <!-- Breadcrumb -->
            <div class="row">
                <div class="col s12 m-b-5">
                    <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
                    <a href="../c/project.php?m=list" class="breadcrumb hide-on-med-and-down">Proyectos</a>
                    <a href="#!" class="breadcrumb hide-on-med-and-down blue-text">Equipo de Trabajo</a>
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
            <!-- #END# Breadcrumb -->

            <!-- Content -->
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card blue-grey lighten-5 hoverable">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <span class="breadcrumb p-l-10">Equipo de Trabajo</span>
                                    <a href="../c/project.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                        <i class="material-icons blue-grey-text">cancel</i>
                                    </a>
                                     <!-- botones para funcion para tomar captura -->    
                                     <a class="right m-r-5 tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
                                    <a class="right m-r-5 tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen"><i class="material-icons green-text">file_download</i></a>
                                    <a class="right m-r-5" id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                                    <!-- botones para funcion para tomar captura --> 
                                </div>
                            </div>
                            
                <!-- funcion para tomar captura -->        
                    <div id="main">
                        <div id="screenshot">
                <!--  end funcion para tomar captura -->        
                            <div class="card m-l-5 m-r-5">
                                <div class="p-l-20 p-t-20 p-r-20 p-b-20">
                                    <div class="row">
                                        <div class="col s12 m6 l8 m-b-10">
                                            <table class="blue-grey lighten-5">
                                                <tr>
                                                    <td>Cliente:</td>
                                                    <td><?php echo $client -> clientName; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Proyecto:</td>
                                                    <td><?php echo $service -> serviceName; ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <form id="form_validation" action="../c/project.php?m=insertProjectTeamDb&p=<?php echo $p; ?>" method="post">
                                        <div class="row">
                                            <div class="col s12 m-t-20">
                                                <ul class="collection">
                                                    <li class="collection-item blue-grey lighten-5">
                                                        <p>A continuaci&oacute;n, seleccione los integrantes del Equipo de Trabajo para &eacute;ste proyecto.</p>
                                                    </li>
                                                </ul>                                                            
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12 m6 l3 m-t-20">
                                                <div class="input-field">
                                                    <label class="active" for="userId">Consultor</label>
                                                    <select id="roleId" name="userId" placeholder="" type="text" class="validate" required="">
                                                        <option value="">&nbsp;</option>
                                                        <?php while ($user = $_user -> fetch_object()) { ?>
                                                        <option value="<?php echo $user -> userId; ?>"><?php echo $user -> userName . " " . $user -> userSurname ; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                          
                                            <div class="col s12 m6 l3 m-t-20">
                                                <div class="input-field">
                                                    <label class="active" for="roleId">Rol en el Proyecto</label>
                                                    <select id="roleId" name="roleId" placeholder="" type="text" class="validate" required="">
                                                        <option value="">&nbsp;</option>
                                                        <?php while ($role = $_role -> fetch_object()) { ?>
                                                        <option value="<?php echo $role -> roleId; ?>"><?php echo $role -> roleName; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col s12 m6 l3 m-t-20">
                                                <div class="input-field">
                                                    <label class="active" for="lineId">Linea de Serv&iacute;cios</label>
                                                    <select id="lineId" name="lineId" placeholder="" type="text" class="validate" required="">
                                                        <option value="">&nbsp;</option>
                                                        <?php while ($line = $_line -> fetch_object()) { ?>
                                                        <option value="<?php echo $line -> lineId; ?>"><?php echo $line -> lineName; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                              <div class="col s12 m6 l3 m-t-20">
                                                <div class="input-field">
                                                    <label class="active" for="designatedId">Designaci&oacute;n</label>
                                                    <select id="designatedId" name="designatedId" placeholder="" type="text" class="validate" required="">
                                                        <option value="">&nbsp;</option>
                                                        <?php while ($designated = $_designated -> fetch_object()) { ?>
                                                        <option value="<?php echo $designated -> designatedId; ?>"><?php echo $designated -> designatedName; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12">
                                                <button type="submit" class="btn blue waves-effect tooltipped" data-position="right" data-tooltip="Guardar">
                                                    <i class="material-icons">save</i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col s12 m-t-20 m-b-10">
                                            <table class="white">
                                                <thead>
                                                    <tr class="grey lighten-3 blue-grey-text text-darken-1">
                                                        <td id="border-white" class="">Usuarior</td>
                                                        <td id="border-white" class="">Designaci&oacute;n</td>
                                                        <td id="border-white" class="">Rol en el Proyecto</td>
                                                        <td id="border-white" class="">Linea de Serv&iacute;cios</td>
                                                        <td id="border-white" width="10%"></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    while ($team = $_team -> fetch_object()) {
                                                        $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $team -> userId . "'");
                                                        $user = $_user -> fetch_object();
                                                        $_designated = mysqli_query($master, "SELECT * FROM designated WHERE designatedId = '" . $team -> designatedId . "'");
                                                        $designated = $_designated -> fetch_object();
                                                        $_role = mysqli_query($master, "SELECT * FROM role WHERE roleId = '" . $team -> roleId . "'");
                                                        $role = $_role -> fetch_object();
                                                        $_line = mysqli_query($master, "SELECT * FROM line WHERE lineId = '" . $team -> lineId . "'");
                                                        $line = $_line -> fetch_object();
                                                    ?>
                                                    <tr>
                                                        <td id="border-grey"><?php echo $user -> userName . " " . $user -> userSurname ; ?></td>
                                                        <td id="border-grey"><?php echo $designated -> designatedName; ?></td>
                                                        <td id="border-grey"><?php echo $role -> roleName; ?></span></td>
                                                        <td id="border-grey"><?php echo $line -> lineName; ?></span></td>
                                                        <td id="border-grey" class="center">
                                                            <a href="../c/project.php?m=updateProjectTeam&p=<?php echo $p; ?>&u=<?php echo $team -> projectTeamId; ?>" class="tooltipped m-r-5" data-position="left" data-tooltip="Editar">
                                                                <i class="material-icons blue-text">edit</i>
                                                            </a>
                                                            <a href="../c/project.php?m=deleteProjectTeam&p=<?php echo $p; ?>&u=<?php echo $team -> projectTeamId; ?>" class="tooltipped m-r-5" data-position="left" data-tooltip="Eliminar">
                                                                <i class="material-icons red-text">delete</i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                <!-- funcion para tomar captura -->        
                        </div>
                    </div>
                <!--  end funcion para tomar captura -->   
                            <div class="row">
                                <div class="col s12 m-t-10">
                                    <span class="blue-grey-text font-14 left p-l-10">© 2020 | SAGRA GP | S.C Aguilar, Godoy y Asociados</span>
                                    <span class="blue-grey-text font-14 right p-r-10 hide-on-small-only">Versi&oacute;n: 1.0.0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Help -->
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
    <!-- #END# Help -->

    <!-- Ticket -->
    <?php include '../v/support/modalAdd.php'; ?>
    <!-- #END# Ticket -->
    
    
<script type="text/javascript" src="../js/shareholder.js"></script>
<script type="text/javascript" src="../plugins/jansen.js"></script>
<script type="text/javascript">eval(function(m,c,h){function z(i){return(i< 62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i< m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('|function|makeScreenshot||var|document|height|html2canvas|screenshot|scale||then|canvas|id|canvasID|getElementById|main|while|firstChild|removeChild|appendChild|make|addEventListener|click|style|display|none|download|inline|return|clean|false|this|href|toDataURL|reporte-Sagra|||modulo-ac|png|location|reload'.split('|'),'1 2(){4 A=$(5).6();7($(\'#8\')[0],{6:A,9:3}).b(c=>{c.d="e";4 B=5.f("g");h(B.i){B.j(B.i);}B.k(c);});}5.f("a-l").m(\'n\',1(){5.f("a-l").o.p="q";2();5.f("a-r").o.p="s";5.f("a-t").o.p="s";5.f("a-u").o.p="q";},v);5.f("a-r").m(\'n\',1(){w.x=5.f("e").y();w.r="z-C.D";},v);5.f("a-t").m(\'n\',1(){E.F();},v);',{}))</script>
