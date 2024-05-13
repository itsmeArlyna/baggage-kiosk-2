const puppeteer = require('puppeteer');

(async () => {
  const browser = await puppeteer.launch();
  const page = await browser.newPage();
  
  // Use file:// protocol to load local PHP file
  const filePath = 'file:///C:/xampp/htdocs/baggage-kiosk-2/index.php';
  
  await page.goto(filePath, { waitUntil: 'networkidle2' });

  // Adjust the path where the PDF will be saved
  const pdfPath = 'C:/xampp/htdocs/baggage-kiosk-2/document.pdf';
  
  await page.pdf({ path: pdfPath, format: 'A4' });
  
  console.log(`PDF saved to: ${pdfPath}`);
  
  await browser.close();
})();
