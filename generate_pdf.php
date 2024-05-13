<?php
require_once __DIR__ . '/vendor/autoload.php'; // Include Composer's autoloader

use Mpdf\Mpdf;

// HTML content that you want to convert to PDF
$html = '
<!DOCTYPE html>
<html>
<head>
    <title>My HTML to PDF</title>
</head>
<body>
    <h1>Hello, PDF!</h1>
    <p>This is a test PDF generated from HTML using mpdf in PHP.</p>
</body>
</html>
';

// Create an mPDF object
$mpdf = new Mpdf();

// Write HTML content to PDF
$mpdf->WriteHTML($html);

// Output PDF as a downloadable file (inline)
$mpdf->Output('my_pdf_file.pdf', 'D'); // D for download

// Note: The script will stop here after generating and sending the PDF file.
