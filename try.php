
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>RFID Data Retrieval</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<h2>RFID Data</h2>
<input type="text" id="rfidInput" placeholder="Enter RFID">
<button onclick="getData()">Get Data</button>

<div id="result"></div>

<script>
function getData() {
    var rfid = document.getElementById("rfidInput").value;
    $.ajax({
        url: 'http://localhost/dashboard_kiosk/save_registration.php',
        type: 'POST',
        data: {rfid: rfid},
        dataType: 'json',
        success: function(response) {
            if(response.length > 0) {
                var data = response[0];
                $('#result').html(
                '<p>Card ID: ' + data.rfid + '</p><p>TUP ID: ' + data.tupid + '</p> <p>Name: ' + data.name + '</p><p> Gender: ' + data.gender + '</p> <p>Course: ' + data.course + '</p> <p>College: ' + data.college + '</p><p>Registration date: ' + data.registration_date+ '</p>' );
            } else {
                $('#result').html('<p>No data found for this RFID.</p>');
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}
</script>

</body>
</html>
