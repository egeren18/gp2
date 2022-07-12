<?php

@session_start();

$sM = "localhost";
$uM = "sagracom";
$pM = "Sagra2507.";
$dM = 'sagracom_alberto';

$master = new mysqli($sM, $uM, $pM, $dM);

$sMrer = "localhost";
$uMrer = "sagracom_crear";
$pMrer = "Sagra2507.";
$dMrer = 'sagracom_modelos_cuestionarios';
$rer = new mysqli($sMrer, $uMrer, $pMrer, $dMrer);

$sMtipomc = "localhost";
$uMtipomc = "sagracom_crear";
$pMtipomc = "Sagra2507.";
$dMtipomc = 'sagracom_tipo_cuestionario';
$tipomc = new mysqli($sMtipomc, $uMtipomc, $pMtipomc, $dMtipomc);

$sMtipoc = "localhost";
$uMtipoc = "sagracom_crear";
$pMtipoc = "Sagra2507.";
$dMtipoc = 'sagracom_tipo_cuestionario_categoria';
$tipoc = new mysqli($sMtipoc, $uMtipoc, $pMtipoc, $dMtipoc);

$sMtipod = "localhost";
$uMtipod = "sagracom_crear";
$pMtipod = "Sagra2507.";
$dMtipod = 'sagracom_tipo_cuestionario_pregunta';
$tipod = new mysqli($sMtipod, $uMtipod, $pMtipod, $dMtipod);

$sMtipos = "localhost";
$uMtipos = "sagracom_crear";
$pMtipos = "Sagra2507.";
$dMtipos = 'sagracom_tipo_cuestionario_servicio';
$tipos = new mysqli($sMtipos, $uMtipos, $pMtipos, $dMtipos);


$sMmanuales = "localhost";
$uMmanuales = "sagracom_crear";
$pMmanuales = "Sagra2507.";
$dMmanuales = 'sagracom_manuales';
$manuales = new mysqli($sMmanuales, $uMmanuales, $pMmanuales, $dMmanuales);


$sMrespal = "localhost";
$uMrespal = "sagracom_crear";
$pMrespal = "Sagra2507.";
$dMrespal = 'sagracom_resplado';
$respal = new mysqli($sMrespal, $uMrespal, $pMrespal, $dMrespal);

$sMac = "localhost";
$uMac = "sagracom_crear";
$pMac = "Sagra2507.";
$dMac = 'sagracom_cuestionarios_AC';
$bdac = new mysqli($sMac, $uMac, $pMac, $dMac);

$sSACQ = "localhost";
$uSACQ = "sagracom_crear";
$pSACQ = "Sagra2507.";
$dSACQ = "sagracom_" . $_SESSION["subscriberId"]."ac";

$acq = new mysqli($sSACQ, $uSACQ, $pSACQ, $dSACQ);

$sp = "localhost";
$up = "sagracom_crear";
$pp = "Sagra2507.";
$dp = "sagracom_tipo_project";

$app = new mysqli($sp, $up, $pp, $dp);


$spc = "localhost";
$upc = "sagracom_crear";
$ppc = "Sagra2507.";
$dpc = "sagracom_tipo_project_categoria";

$appc = new mysqli($spc, $upc, $ppc, $dpc);

$spc = "localhost";
$upc = "sagracom_crear";
$ppc = "Sagra2507.";
$dpc = "sagracom_tipo_project_actividad";

$appa = new mysqli($spc, $upc, $ppc, $dpc);


$spc = "localhost";
$upc = "sagracom_crear";
$ppc = "Sagra2507.";
$dpc = "sagracom_tipo_project_modelo";

$appm = new mysqli($spc, $upc, $ppc, $dpc);



$spc = "localhost";
$upc = "sagracom_crear";
$ppc = "Sagra2507.";
$dpc = "sagracom_project";

$appf = new mysqli($spc, $upc, $ppc, $dpc);


$spc = "localhost";
$upc = "sagracom_crear";
$ppc = "Sagra2507.";
$dpc = "sagracom_project_respaldo";

$appr = new mysqli($spc, $upc, $ppc, $dpc);


    $sSACQ = "localhost";
    $uSACQ = "sagracom_crear";
    $pSACQ = "Sagra2507.";
    $dSACQ = "sagracom_" . $_SESSION["subscriberId"]."project";

    $pquest = new mysqli($sSACQ, $uSACQ, $pSACQ, $dSACQ);



