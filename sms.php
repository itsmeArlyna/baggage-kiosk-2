<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sendSMS.php" method="post">
        <input type="text" name="phoneNumber" required>
        <input type="text" name="message">

        <button class="btnSend">SEND</button>
    </form>
</body>
</html>