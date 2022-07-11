<?php

/* 
 * Juan Jansen
 * juanjansen01@gmail.com
 * 2020
 */

$sizeError = "
<script>
function init() {
    M.toast({
        html: '<i class= \"material-icons m-r-10 orange-text\">warning</i> El archivo es demasiado grande, por favor intente con otro!'
    })
}
window.onload = init;
</script>";
$erroAc = "
<script>
function init() {
    M.toast({
        html: '<i class= \"material-icons m-r-10 red-text\">warning</i> Es necesario asignar un Socio Lider de AC y un Gerente de AC !'
    })
}
window.onload = init;
</script>";
$doNotMatch = "
<script>
function init() {
    M.toast({
    	'html': 'La contrase&ntilde;as no coinciden, intente de nuevo!'
    })
}
window.onload = init;
</script>";

$duplicated = "
<script>
function init() {
    M.toast({
        html: '<i class= \"material-icons m-r-10 red-text\">error</i> Ya existe un registro igual al que desea registrar!',
        completeCallback:
        function(){
            M.toast({
                html: '<i class= \"material-icons m-r-10 blue-text\">info</i> Por favor intente de nuevo!'
            }
        )}
    })
}
window.onload = init;
</script>";

$porcentaje = "
<script>
function init() {
    M.toast({
        html: '<i class= \"material-icons m-r-10 red-text\">error</i> En la Estructura Patrimonial el la suma de las Acciones debe dar 100%!',
        completeCallback:
        function(){
            M.toast({
                html: '<i class= \"material-icons m-r-10 blue-text\">info</i> Por favor intente de nuevo!'
            }
        )}
    })
}
window.onload = init;
</script>";

$error = "
<script>
function init() {
    M.toast({
        html: '<i class= \"material-icons m-r-10 red-text\">error</i> Su correo no se encuentra en nuestros registros!',
    	completeCallback:
	  	function(){
	  		M.toast({
		        html: '<i class= \"material-icons m-r-10 blue-text\">info</i> Por favor intente de nuevo!'
	  		}
	  	)}
    })
}
window.onload = init;
</script>";

$passwordChanged = "
<script>
function init() {
    M.toast({
        html: 'La contrase&ntilde;a ha sido cambiada, por favor ingrese de nuevo!'
    })
}
window.onload = init;
</script>";

$startProblems = "
<script>
function init() {
    M.toast({
        html: '<i class= \"material-icons m-r-10 red-text\">error</i> Ha ocurrido un problema, por favor intente de nuevo!'
    })
}
window.onload = init;
</script>";

$unauthorizedAccess = "
<script>
function init() {
    M.toast({
        html: '<i class= \"material-icons m-r-10 red-text\">warning</i> La sesi&oacute;n se cerr&oacute;!',
    	completeCallback:
	  	function(){
	  		M.toast({
		        html: '<i class= \"material-icons m-r-10 blue-text\">info</i> Usted intent&oacute un acceso no autorizado!'
	  		}
	  	)}
    })
}
window.onload = init;
</script>";

$welcome = "
<script>
function init() {
    M.toast({
    	'html': 'Bienvenido al Sistema Sagra GP!'
    })
}
window.onload = init;
</script>";

$added = "
<script>
function init() {
    M.toast({
        html: '<i class= \"material-icons m-r-15 green-text\">done</i> Los datos se registraron exitosamente!'
    })
}
window.onload = init;
</script>";

$deleted = "
<script>
function init() {
    M.toast({
        html: '<i class= \"material-icons m-r-15 red-text\">done</i> Los datos se eliminaron exitosamente!'
    })
}
window.onload = init;
</script>";
$ee = "
<script>
function init() {
    M.toast({
     html: '<i class= \"material-icons m-r-10 red-text\">warning</i> Es necesario asignar un Socio Lider de AC y un Gerente de AC !'
    })
}
window.onload = init;
</script>";
$no = "
<script>
function init() {
    M.toast({
         html: '<i class= \"material-icons m-r-10 red-text\">warning</i> Es necesario asignar un Socio Lider de AC y un Gerente de AC !'
    })
}
window.onload = init;
</script>";
$updated = "
<script>
function init() {
    M.toast({
        html: '<i class= \"material-icons m-r-15 green-text\">done</i> Los datos se actualizaron exitosamente!'
    })
}
window.onload = init;
</script>";

/*
 * AC
 */

$changeStatus = "
<script>
function init() {
    M.toast({
        html: '<i class= \"material-icons m-r-10 orange-text\">warning</i> Se requiere que el L&iacute;der del Grupo cambie el Estatus del Cliente!'
    })
}
window.onload = init;
</script>";

$validAc = "
<script>
function init() {
    M.toast({
        html: '<i class= \"material-icons m-r-10 red-text\">warning</i> El Cliente posee una A/C vigente para ese servicio!'
    })
}
window.onload = init;
</script>";

$validUser = "
<script>
function init() {
    M.toast({
        html: '<i class= \"material-icons m-r-10 red-text\">warning</i> El Socio Lider debe ser Distinto al Gerente de Proyectos!'
    })
}
window.onload = init;
</script>";

/*
 * Project
 */

$created = "
<script>
function init() {
    M.toast({
        html: '<i class= \"material-icons m-r-15 green-text\">done</i> Se ha generado el proyecto exitosamente!'
    })
}
window.onload = init;
</script>";

$validProyect = "
<script>
function init() {
    M.toast({
        html: '<i class= \"material-icons m-r-10 red-text\">warning</i> El Cliente posee un Proyecto vigente para ese servicio!'
    })
}
window.onload = init;
</script>";

$notAllowed = "
<script>
function init() {
    M.toast({
        html: '<i class= \"material-icons m-r-10 red-text\">warning</i> Operaci&oacuten no permitida!'
    })
}
window.onload = init;
</script>";

$exceeded = "
<script>
function init() {
    M.toast({
        html: '<i class= \"material-icons m-r-10 red-text\">warning</i> No puede superar el N&uacute;mero de Usuarios contratados!'
    })
}
window.onload = init;
</script>";
