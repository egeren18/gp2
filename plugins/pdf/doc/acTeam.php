<?php

session_start();

require('../fpdf.php');

include '../../../connection.php';
include '../../../connection2.php';

$_item = mysqli_query($connection, "SELECT * FROM acteam INNER JOIN ac ON acteam.acId = ac.acId WHERE acteam.acId = '" . $_GET["aid"] . "'");
$_client = mysqli_query($connection, "SELECT * FROM acteam INNER JOIN ac ON acteam.acId  = ac.acId INNER JOIN client ON ac.clientId = client.clientId WHERE acteam.acId = '" . $_GET["aid"] . "'"); $client = $_client -> fetch_object();
$_service = mysqli_query($master, "SELECT * FROM service WHERE serviceId = '" . $client -> serviceId . "'"); $service = $_service -> fetch_object();
$_nature = mysqli_query($master, "SELECT * FROM nature WHERE natureId = '" . $service -> natureId . "'"); $nature = $_nature -> fetch_object();

class PDF extends FPDF {

    function Header() {
	$this -> SetTitle('Reportes'); $this -> Image('../../../images/logo.png', 10, 10, 45); $this -> SetFont('Arial', 'IB', 13); $this -> Cell(45, 10, '', 0, 0, ''); $this -> Cell(150, 12, utf8_decode('Módulo: Aceptación y Continuidad'), 0, 0, 'R'); $this -> Ln(20); $this -> SetFont('Arial','I',8); $this -> Cell(195, 5, utf8_decode('Tablas de Gestión'), 0, 0, ''); $this -> Ln(); $this -> Cell(97.5, 5, utf8_decode('Auditoría Externa'), 0, 0, ''); $this -> Cell(97.5, 5, 'Fecha: ' . date('d/m/Y'), 0, 0, 'R'); $this -> SetY(50); $this -> Line(10, 45, 205, 45);
    }

    function Footer() {
        $this -> SetY(-10); $this -> SetFont('Arial', 'I', 7); $this -> Cell(150, 5, utf8_decode('Reporte emitido por el Sistema SagraGP para fines de consulta.'), 0, 0, ''); $this -> Cell(45, 5, utf8_decode('Página') . ' ' .$this -> PageNo().' de {nb}', 0, 0, 'R'); $this -> Line(10, 267, 205, 267);
    }
}

$pdf = new PDF(); $pdf -> AddPage(); $pdf -> AliasNbPages(); $pdf -> AddFont('Ubuntu', '', 'Ubuntu-Light.php'); $pdf -> SetFont('Arial', 'B', 9); $pdf -> Cell(40, 6, "Cliente:"); $pdf -> SetFont('Ubuntu', '', 9); $pdf -> Cell(70, 6, utf8_decode($client -> clientName)); $pdf -> Ln(); $pdf -> SetFont('Arial', 'B', 9); $pdf -> Cell(40, 6, "Naturaleza del Servicio:"); $pdf -> SetFont('Ubuntu', '', 9); $pdf -> Cell(70, 6, utf8_decode($nature -> natureName)); $pdf -> Ln(); $pdf -> SetFont('Arial', 'B', 9); $pdf -> Cell(40, 6, "Servicio:"); $pdf -> SetFont('Ubuntu', '', 9); $pdf -> Cell(70, 6, utf8_decode($service -> serviceName)); $pdf -> Ln(10); $pdf -> SetFont('Arial', 'B', 9); $pdf -> Cell(70, 6, "Equipo de Trabajo:"); $pdf -> Ln(7); $pdf -> SetFont('Ubuntu', '', 9); while ($item = $_item -> fetch_object()) { $_user = mysqli_query($master, "SELECT * FROM user WHERE userId = '" . $item -> userId . "'"); $user = $_user -> fetch_object(); $_role = mysqli_query($master, "SELECT * FROM designated WHERE designatedId = '" . $item -> designatedId . "'"); $role = $_role -> fetch_object(); $pdf -> Cell(70, 6, utf8_decode($user -> userName . ' ' . $user -> userSurname)); $pdf -> Cell(30, 6, utf8_decode($role -> designatedName)); $pdf -> Ln(); } $pdf -> Output('I', 'estados_civiles.pdf', '');
