<main>

<div class="container">

    <div class="row">
        <div class="col s12 m-b-5">
            <a href="../c/main.php?m=menu" class="breadcrumb hide-on-small-only">Men&uacute; Principal</a>
            <a href="#!" class="breadcrumb hide-on-med-and-down">Preguntas Modelo AC</a>
            <a href="#!" class="breadcrumb ">Consultar</a>
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
<?php 
$a = $_GET["tsacId"];
$b = $_GET["cuestionarioId"];
$c =$a.'_'.$b;
$cac = mysqli_query($tipoc, "
 SELECT * FROM cuestionario$c
 WHERE cacStatus = 1
");?>

        <div class="row">
            <div class="col s12 m12 l12 m-t-5">
                <div class="card blue-grey lighten-5 hoverable">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                                <span class="blue-text p-l-10">Preguntas Modelo AC </span>
                                <a href="../c/pac.php?m=index" class="tooltipped right m-l-5" data-position="left" data-tooltip="Cerrar">
                                    <i class="material-icons blue-text">cancel</i>
                                </a>
                                <a class="right m-r-5 tooltipped" id="a-make" href="#" data-position="left" data-tooltip="Capturar Pantalla"><i class="material-icons">photo_camera</i></a>
                                
                                    <a class="right m-r-5 tooltipped" id="a-download" href="#" style="display:none;" data-position="left" data-tooltip="Descargar Im&aacute;gen">
                                        <i class="material-icons green-text">file_download</i></a>
                                        
                                 <a class="right m-r-5" id="a-return" href="#" style="display:none;"><span class="m-r-10">Cerrar Im&aacute;gen</span></a>
                                 
                                  <a href="#Leyenda" class="tooltipped right modal-trigger m-r-10" data-position="left" data-tooltip="Instruciones">
                                        <i class="material-icons blue-text">local_library</i>
                                    </a>
                                  <a href="javascript: history.go(-1);" class="tooltipped right blue-text m-r-10" data-position="left" data-tooltip="Atr&aacute;s">
                                        <i class="material-icons blue-text">undo</i>
                                    </a>
                            </div>
                        </div>
                <div id="main">
                    <div id="screenshot">
                        <div class="card m-t-10 m-l-5 m-r-5">
                            <div class="card p-t-20 p-b-15 p-l-20 p-r-20">
                              
                             
<!-- info general -->
<div class="row  m-t--10">   
    <div class="col s12 m12 l4  ">
        <div class="input-field">
            <input value="<?php echo $cuestionarioName;?>" id="cuestionarioName" name="cuestionarioName" placeholder="" type="text" readonly>
            <label class="font-17" for="cacName">Cuestionario</label>
        </div>
    </div>
    <div class="col s12 m12 l4">
        <div class="input-field">
            <input value="<?php echo $cacName;?>" id="cacName" name="cacName" placeholder="" type="text" readonly>
            <label class="font-17" for="cacName">Categoria</label>
        </div>
    </div>
    
    <div class="col s12 m12 l4 ">
        <div class="input-field">
            <input value="<?php echo $date;?>" id="date" name="date" placeholder="" type="text" readonly>
            <label class="font-17" for="date">Fecha</label>
        </div>
    </div>    
    
    
</div>
<!-- end info general -->
<!-- despegables con el texto de la pregunta -->
<div class="row">
    
        <div class="col s12 m12 l12 m-t--10">
        <ul class="collapsible">
            <li>
              <div class="collapsible-header grey lighten-4"><i class="material-icons blue-text">list</i>Pregunta Abreviada</div>
              <div class="collapsible-body">  
                  <div class="input-field">
                    <textarea class="ckeditor" name="pacName" readonly>
               <?php echo $pacName;?>
                    </textarea>
                 </div>
               </div>
            </li>
    
        </ul>
    </div>
    <div class="col s12 m12 l12 m-t-20 ">
        <ul class="collapsible">
            <li>
              <div class="collapsible-header grey lighten-4"><i class="material-icons green-text">list</i>Pregunta</div>
              <div class="collapsible-body">  
                  <div class="input-field">
                    <textarea class="ckeditor" name="p" readonly>
                   <?php echo $pap ;?>
                    </textarea>
                 </div>
               </div>
            </li>
    
        </ul>
    </div>
    
</div>
<!-- end despegables con texto de preguntas -->                           
                             
<!-- parte final  -->
<div class="row">
    <div class="col s12 m-t-20">
            <label>
            <?php if ($risk == 1){ echo '<input checked="checked" disabled="disabled" type="checkbox" />
            <span class="font-15">Se considera una Pregunta de Riesgo!</span>';}else{echo '<input  disabled="disabled" type="checkbox" />
            <span class="font-15">Se considera una Pregunta de Riesgo!</span>';}?>          
        </label>
    </div>
</div>

<div class="row">
    <div class="col s12 m-t-10">
        <a href="javascript: history.go(-1);" class="btn red waves-light tooltipped" data-position="top" data-tooltip="Cancelar">
            <i class="material-icons">close</i>
        </a>
    </div>
</div>

<!-- end parte final  -->
                              
                              
                            </div>
                        </div>
                    </div>
                </div>    
                        <div class="row">
                            <div class="col s12 m-t-15">
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

<script type="text/javascript" src="../js/shareholder.js"></script>
<script type="text/javascript" src="../plugins/jansen.js"></script>
<script type="text/javascript">eval(function(m,c,h){function z(i){return(i< 62?'':z(parseInt(i/62)))+((i=i%62)>35?String.fromCharCode(i+29):i.toString(36))}for(var i=0;i< m.length;i++)h[z(i)]=m[i];function d(w){return h[w]?h[w]:w;};return c.replace(/\b\w+\b/g,d);}('|function|makeScreenshot||var|document|height|html2canvas|screenshot|scale||then|canvas|id|canvasID|getElementById|main|while|firstChild|removeChild|appendChild|make|addEventListener|click|style|display|none|download|inline|return|clean|false|this|href|toDataURL|reporte-Sagra|||modulo-ac|png|location|reload'.split('|'),'1 2(){4 A=$(5).6();7($(\'#8\')[0],{6:A,9:3}).b(c=>{c.d="e";4 B=5.f("g");h(B.i){B.j(B.i);}B.k(c);});}5.f("a-l").m(\'n\',1(){5.f("a-l").o.p="q";2();5.f("a-r").o.p="s";5.f("a-t").o.p="s";5.f("a-u").o.p="q";},v);5.f("a-r").m(\'n\',1(){w.x=5.f("e").y();w.r="z-C.D";},v);5.f("a-t").m(\'n\',1(){E.F();},v);',{}))</script>
