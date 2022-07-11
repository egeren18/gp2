<?php

session_start();

require('../fpdf.php');

include '../../../connection.php';

$_item = mysqli_query($master, "SELECT * FROM subscriber INNER JOIN country ON subscriber.countryId = country.countryId INNER JOIN subscription ON subscriber.subscriptionId = subscription.subscriptionId WHERE subscriber.subscriberId = '" . $_GET["id"] . "'"); $data = $_item -> fetch_object();

class PDF extends FPDF {

    function Header() {
        $this -> SetTitle('Reportes'); $this -> Image('../../../images/logo.png', 10, 10, 45); $this -> SetFont('Arial', 'IB', 13); $this -> Cell(45, 10, '', 0, 0, ''); $this -> Cell(150, 12, utf8_decode('Módulo: Suscriptores'), 0, 0, 'R'); $this -> Ln(20); $this -> SetFont('Arial','I',8); $this -> Cell(195, 5, utf8_decode('Tablas Maestras'), 0, 0, ''); $this -> Ln(); $this -> Cell(97.5, 5, utf8_decode('Auditoría Externa'), 0, 0, ''); $this -> Cell(97.5, 5, 'Fecha: ' . date('d/m/Y'), 0, 0, 'R'); $this -> SetY(50); $this -> Line(10, 45, 205, 45);
    }

    function Footer() {
        $this -> SetY(-10); $this -> SetFont('Arial', 'I', 7); $this -> Cell(150, 5, utf8_decode('Reporte emitido por el Sistema SagraGP para fines de consulta.'), 0, 0, ''); $this -> Cell(45, 5, utf8_decode('Página') . ' ' .$this -> PageNo().' de {nb}', 0, 0, 'R'); $this -> Line(10, 267, 205, 267);
    }
}

$pdf = new PDF(); $pdf -> AddPage(); $pdf -> AliasNbPages(); if ($data) { $pdf -> AddFont('Ubuntu', '', 'Ubuntu-Light.php'); $pdf -> SetDrawColor(150, 150, 150); $pdf -> SetFont('Ubuntu', '', 9); $pdf -> Cell(20, 6, 'Suscriptor: '); $pdf -> SetFont('Arial', 'B', 9); $pdf -> Cell(180, 6, utf8_decode($data -> subscriberName), ''); $pdf -> Ln(10); $pdf -> SetFont('Ubuntu', '', 9); $pdf -> Cell(35, 6, 'R.I.F: '); $pdf -> Cell(170, 6, utf8_decode($data -> subscriberRif), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, utf8_decode('Teléfono 1: ')); $pdf -> Cell(170, 6, utf8_decode($data -> subscriberPhone1), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, utf8_decode('Teléfono 2: ')); $pdf -> Cell(170, 6, utf8_decode($data -> subscriberPhone2), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, utf8_decode('Persona Contacto: ')); $pdf -> Cell(170, 6, utf8_decode($data -> subscriberContactName . ' ' . $data -> subscriberContactSurname), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, utf8_decode('Correo Electrónico: ')); $pdf -> Cell(170, 6, utf8_decode($data -> subscriberContactEmail), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, utf8_decode('Dirección: ')); $pdf -> MultiCell(160, 6, utf8_decode($data -> subscriberAddress), '', '', ''); $pdf -> Cell(35, 6, 'Ciudad: '); $pdf -> Cell(170, 6, utf8_decode($data -> subscriberCity), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, 'Estado: '); $pdf -> Cell(170, 6, utf8_decode($data -> subscriberState), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, 'Zona Postal: '); $pdf -> Cell(170, 6, utf8_decode($data -> subscriberZipCode), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, utf8_decode('País: ')); $pdf -> Cell(170, 6, utf8_decode($data -> countryName), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, utf8_decode('Página Web: ')); $pdf -> Cell(170, 6, utf8_decode($data -> subscriberWebPage), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, 'Cantidad de Usuarios: '); $pdf -> Cell(170, 6, utf8_decode($data -> subscriberUsers), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, utf8_decode('Fecha de Suscripción: ')); $pdf -> Cell(170, 6, $data -> subscriberStart, '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, utf8_decode('Fecha de Vencimiento: ')); $pdf -> Cell(170, 6, $data -> subscriberExpires, '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, utf8_decode('Tipo de Suscripción: ')); $pdf -> Cell(170, 6, utf8_decode($data -> subscriptionName), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, 'Estatus: '); $status = $data -> subscriberStatus == 1 ? 'Activo' : 'Inactivo'; $pdf -> Cell(170, 6, $status); $pdf -> Ln(10); $pdf -> Cell(20, 6, 'Usuarios: '); $pdf -> SetFont('Ubuntu', '', 9); $pdf -> Ln(10); $_user = mysqli_query($master, "SELECT * FROM user WHERE subscriberId = '" . $_GET["id"] . "' AND userStatus = 1 ORDER BY userName"); while($user = $_user -> fetch_object()) { $pdf -> Cell(195, 6, utf8_decode('- ' . $user -> userName . ' ' . $user -> userSurname)); $pdf -> Ln(); }} $pdf -> Output('I', 'suscriptor.pdf', '');
