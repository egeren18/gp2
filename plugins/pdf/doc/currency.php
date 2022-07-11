<?php

session_start();

require('../fpdf.php');

include '../../../connection.php';
        
$_item = mysqli_query($master, "SELECT * FROM currency WHERE currencyStatus = 1 ORDER BY currencyName");

class PDF extends FPDF {

    function Header() {
	$this -> SetTitle('Reportes'); $this -> Image('../../../images/logo.png', 10, 10, 45); $this -> SetFont('Arial', 'IB', 13); $this -> Cell(45, 10, '', 0, 0, ''); $this -> Cell(150, 12, utf8_decode('Módulo: Monedas'), 0, 0, 'R'); $this -> Ln(20); $this -> SetFont('Arial','I',8); $this -> Cell(195, 5, utf8_decode('Tablas Maestras'), 0, 0, ''); $this -> Ln(); $this -> Cell(97.5, 5, utf8_decode('Auditoría Externa'), 0, 0, ''); $this -> Cell(97.5, 5, 'Fecha: ' . date('d/m/Y'), 0, 0, 'R'); $this -> SetY(50); $this -> Line(10, 45, 205, 45);
    }

    function Footer() {
        $this -> SetY(-10); $this -> SetFont('Arial', 'I', 7); $this -> Cell(150, 5, utf8_decode('Reporte emitido por el Sistema SagraGP para fines de consulta.'), 0, 0, ''); $this -> Cell(45, 5, utf8_decode('Página') . ' ' .$this -> PageNo().' de {nb}', 0, 0, 'R'); $this -> Line(10, 267, 205, 267);
    }
}

$pdf = new PDF(); $pdf -> AddPage(); $pdf -> AliasNbPages(); $pdf -> AddFont('Ubuntu', '', 'Ubuntu-Light.php'); $pdf -> SetFont('Ubuntu', '', 9); while ($item = $_item -> fetch_object()) { $pdf -> Cell(40, 6, '- ' . utf8_decode($item -> currencyName)); $pdf -> Ln(); } $pdf -> Output('I', 'monedas.pdf', '');
