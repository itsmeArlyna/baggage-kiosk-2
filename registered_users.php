<?php
include_once('connection.php');

require_once('C:\xampp\htdocs\baggage-kiosk-2\fpdf186\fpdf.php'); 
$pdf = new FPDF('L'); 
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 16); 

$pdf->Cell(0, 15, 'Registered Users Report', 0, 1, 'C'); 
$pdf->SetFont('Arial', '', 7); 

$columnWidths = [
    'tupid' => 20,         
    'name' => 40,
    'gender' => 10,
    'course' => 140,
    'college' => 40,
    'registration_date' => 30       
];

$pdf->Cell($columnWidths['tupid'], 10, 'TUP ID', 1);
$pdf->Cell($columnWidths['name'], 10, 'Name', 1);
$pdf->Cell($columnWidths['gender'], 10, 'Gender', 1);
$pdf->Cell($columnWidths['course'], 10, 'Course', 1);
$pdf->Cell($columnWidths['college'], 10, 'College', 1);
$pdf->Cell($columnWidths['registration_date'], 10, 'Registration date', 1);
$pdf->Ln();

$sql = "SELECT * FROM registered_users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell($columnWidths['tupid'], 10, $row['tupid'], 1);
        $pdf->Cell($columnWidths['name'], 10, $row['name'], 1);
        $pdf->Cell($columnWidths['gender'], 10, $row['gender'], 1);
        $pdf->Cell($columnWidths['course'], 10, $row['course'], 1);
        $pdf->Cell($columnWidths['college'], 10, $row['college'], 1);
        $pdf->Cell($columnWidths['registration_date'], 10, $row['registration_date'], 1);
        $pdf->Ln();
    }
}

$conn->close();

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="students_logs.pdf"');

$pdf->Output('D');
?>
