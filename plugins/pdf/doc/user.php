<?php

session_start();

require('../fpdf.php');

include '../../../connection.php';
    
$_item = mysqli_query($master, "SELECT * FROM user INNER JOIN civilstatus ON user.civilStatusId = civilstatus.civilStatusId INNER JOIN gender ON user.genderId = gender.genderId INNER JOIN country ON user.countryId = country.countryId INNER JOIN office ON user.officeId = office.officeId INNER JOIN division ON user.divisionId = division.divisionId INNER JOIN department ON user.departmentId = department.departmentId INNER JOIN level ON user.levelId = level.levelId WHERE user.userId = '" . $_GET["id"] . "'"); $data = $_item -> fetch_object();

class PDF extends FPDF {

    function Header() {
        $this -> SetTitle('Reportes'); $this -> Image('../../../images/logo.png', 10, 10, 45); $this -> SetFont('Arial', 'IB', 13); $this -> Cell(45, 10, '', 0, 0, ''); $this -> Cell(150, 12, utf8_decode('Módulo: Usuarios'), 0, 0, 'R'); $this -> Ln(20); $this -> SetFont('Arial','I',8); $this -> Cell(195, 5, utf8_decode('Tablas Maestras'), 0, 0, ''); $this -> Ln(); $this -> Cell(97.5, 5, utf8_decode('Auditoría Externa'), 0, 0, ''); $this -> Cell(97.5, 5, 'Fecha: ' . date('d/m/Y'), 0, 0, 'R'); $this -> SetY(50); $this -> Line(10, 45, 205, 45);
    }

    function Footer() {
        $this -> SetY(-10); $this -> SetFont('Arial', 'I', 7); $this -> Cell(150, 5, utf8_decode('Reporte emitido por el Sistema SagraGP para fines de consulta.'), 0, 0, ''); $this -> Cell(45, 5, utf8_decode('Página') . ' ' .$this -> PageNo().' de {nb}', 0, 0, 'R'); $this -> Line(10, 267, 205, 267);
    }
}

$pdf = new PDF(); $pdf -> AddPage(); $pdf -> AliasNbPages(); if ($data) { $pdf -> AddFont('Ubuntu', '', 'Ubuntu-Light.php'); $pdf -> SetDrawColor(150, 150, 150); $pdf -> SetFont('Ubuntu', '', 9); $pdf -> Cell(15, 6, 'Usuario: '); $pdf -> SetFont('Arial', 'B', 9); $pdf -> Cell(180, 6, utf8_decode($data -> userName . " " . $data -> userSurname), ''); $pdf -> Ln(10); $pdf -> SetFont('Ubuntu', '', 9); $pdf -> Cell(35, 6, 'Nombres: '); $pdf -> Cell(170, 6, utf8_decode($data -> userName), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, 'Apellidos: '); $pdf -> Cell(170, 6, utf8_decode($data -> userSurname), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, 'Estado Civil: '); $pdf -> Cell(170, 6, utf8_decode($data -> civilStatusName), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, 'Fecha de Nacimiento: '); $pdf -> Cell(170, 6, utf8_decode($data -> userBirthday), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, utf8_decode('Género: ')); $pdf -> Cell(170, 6, utf8_decode($data -> genderName), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, utf8_decode('Correo Electrónico: ')); $pdf -> Cell(170, 6, utf8_decode($data -> userEmail), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, utf8_decode('Teléfono 1: ')); $pdf -> Cell(170, 6, utf8_decode($data -> userPhone1), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, utf8_decode('Teléfono 2: ')); $pdf -> Cell(170, 6, utf8_decode($data -> userPhone2), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, utf8_decode('Dirección: ')); $pdf -> MultiCell(160, 6, utf8_decode($data -> userAddress), '', '', ''); $pdf -> Cell(35, 6, 'Ciudad: '); $pdf -> Cell(170, 6, utf8_decode($data -> userCity), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, 'Estado: '); $pdf -> Cell(170, 6, utf8_decode($data -> userState), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, utf8_decode('País: ')); $pdf -> Cell(170, 6, utf8_decode($data -> countryName), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, 'Fecha de Ingreso: '); $pdf -> Cell(170, 6, utf8_decode($data -> userAdmission), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, 'Oficina: '); $pdf -> Cell(170, 6, utf8_decode($data -> officeName), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, utf8_decode('División: ')); $pdf -> Cell(170, 6, utf8_decode($data -> divisionName), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, 'Departamento: '); $pdf -> Cell(170, 6, utf8_decode($data -> departmentName), '', '', ''); $pdf -> Ln(); $pdf -> Cell(35, 6, 'Nivel Educativo: '); $pdf -> Cell(170, 6, utf8_decode($data -> levelName)); $pdf -> Ln(); $pdf -> Cell(35, 6, 'Estatus: '); $status = $data -> userStatus == 1 ? 'Activo' : 'Inactivo'; $pdf -> Cell(170, 6, $status); $pdf -> Ln(); } $pdf -> Output('I', 'usuario.pdf', '');
