<?php

session_start();

require('../fpdf.php');

include '../../../connection.php';
    
$_item = mysqli_query($master, "SELECT * FROM access INNER JOIN module ON access.moduleId = module.moduleId INNER JOIN user ON access.userId = user.userId WHERE access.userId = '" . $_GET["id"] . "' ORDER BY module.moduleName");

$data = $_item -> fetch_object();

class PDF extends FPDF {

    function Header() {
        $this -> SetTitle('Reportes'); $this -> Image('../../../images/logo.png', 10, 10, 45); $this -> SetFont('Arial', 'IB', 13); $this -> Cell(45, 10, '', 0, 0, ''); $this -> Cell(150, 12, utf8_decode('Módulo: Permisos Usuarios'), 0, 0, 'R'); $this -> Ln(20); $this -> SetFont('Arial','I',8); $this -> Cell(195, 5, utf8_decode('Tablas Maestras'), 0, 0, ''); $this -> Ln(); $this -> Cell(97.5, 5, utf8_decode('Auditoría Externa'), 0, 0, ''); $this -> Cell(97.5, 5, 'Fecha: ' . date('d/m/Y'), 0, 0, 'R'); $this -> SetY(50); $this -> Line(10, 45, 205, 45);
    }

    function Footer() {
        $this -> SetY(-10); $this -> SetFont('Arial', 'I', 7); $this -> Cell(150, 5, utf8_decode('Reporte emitido por el Sistema SagraGP para fines de consulta.'), 0, 0, ''); $this -> Cell(45, 5, utf8_decode('Página') . ' ' .$this -> PageNo().' de {nb}', 0, 0, 'R'); $this -> Line(10, 267, 205, 267);
    }
}

$pdf = new PDF(); $pdf -> AddPage(); $pdf -> AliasNbPages(); if ($data) { $pdf -> AddFont('Ubuntu', '', 'Ubuntu-Light.php'); $pdf -> SetDrawColor(150, 150, 150); $pdf -> SetFont('Ubuntu', '', 9); $pdf -> Cell(15, 6, 'Usuario: '); $pdf -> SetFont('Arial', 'B', 9); $pdf -> Cell(180, 6, utf8_decode($data -> userName . " " . $data -> userSurname), ''); $pdf -> Ln(10); $pdf -> SetFont('Ubuntu', '', 9); $pdf -> Cell(70, 6, 'Modulo', 1, '', 'C'); $pdf -> Cell(20, 6, 'Consultar', 1, '', 'C'); $pdf -> Cell(20, 6, 'Crear', 1, '', 'C'); $pdf -> Cell(20, 6, 'Modificar', 1, '', 'C'); $pdf -> Cell(20, 6, 'Eliminar', 1, '', 'C'); $pdf -> Ln(10); while ($item = $_item -> fetch_object()) { $pdf -> Cell(70, 6, utf8_decode($item -> moduleName), 1, '', ''); $pdf -> SetFont('ZapfDingbats', '', '10'); $check = $item -> jAccess == 1 ? 3 : ''; $pdf -> Cell(20, 6, $check , 1, '', 'C'); $check = $item -> jCreate == 1 ? 3 : ''; $pdf -> Cell(20, 6, $check , 1, '', 'C'); $check = $item -> jUpdate == 1 ? 3 : ''; $pdf -> Cell(20, 6, $check , 1, '', 'C'); $check = $item -> jDelete == 1 ? 3 : ''; $pdf -> Cell(20, 6, $check , 1, '', 'C'); $pdf -> SetFont('Ubuntu', '', 9); $pdf -> Ln(); }} $pdf -> Output('I', 'permisos_usuario.pdf', '');
