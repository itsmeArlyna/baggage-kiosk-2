<?php
include_once('connection.php');
require_once('C:\xampp\htdocs\baggage-kiosk-2\fpdf186\fpdf.php'); 

if(isset($_GET['start_date']) && isset($_GET['end_date'])) {
    $start_date = $_GET['start_date'];
    $end_date = $_GET['end_date'];

    $sql = "SELECT * FROM students_logs WHERE timestamp BETWEEN '$start_date' AND '$end_date'";
} else {
    $sql = "SELECT * FROM students_logs";
}

$pdf = new FPDF('L'); 
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 16); 
$pdf->Cell(0, 15, 'Students Logs Report', 0, 1, 'C'); 
$pdf->SetFont('Arial', '', 7); 

$columnWidths = [
    'id' => 30,        
    'status' => 20,    
    'name' => 40,
    'gender' => 20,
    'course' => 100,
    'college' => 40,
    'time' => 30       
];

$pdf->Cell($columnWidths['id'], 10, 'School ID Number', 1);
$pdf->Cell($columnWidths['status'], 10, 'Status', 1); 
$pdf->Cell($columnWidths['name'], 10, 'Name', 1);
$pdf->Cell($columnWidths['gender'], 10, 'Gender', 1);
$pdf->Cell($columnWidths['course'], 10, 'Course', 1);
$pdf->Cell($columnWidths['college'], 10, 'College', 1);
$pdf->Cell($columnWidths['time'], 10, 'Time', 1);
$pdf->Ln();

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell($columnWidths['id'], 10, $row['rfid'], 1);
        $pdf->Cell($columnWidths['status'], 10, $row['status'], 1);
        $pdf->Cell($columnWidths['name'], 10, $row['name'], 1);
        $pdf->Cell($columnWidths['gender'], 10, $row['gender'], 1);
        $pdf->Cell($columnWidths['course'], 10, $row['course'], 1);
        $pdf->Cell($columnWidths['college'], 10, $row['college'], 1);
        $pdf->Cell($columnWidths['time'], 10, $row['timestamp'], 1);
        $pdf->Ln();
    }
}

$conn->close();

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="students_logs.pdf"');

$pdf->Output('D');
?>
