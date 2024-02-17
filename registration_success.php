<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Success Swal Page</title>
<!-- Link to SweetAlert CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.3/sweetalert2.min.css">
<style>
  /* Optional: Add your custom styles here */
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }
</style>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.3/sweetalert2.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    Swal.fire({
      icon: 'success',
      title: 'Registered successfully!',
      text: 'You now have an access to the baggage area.',
      showConfirmButton: true, 
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = 'user_main_interface.php';
      }
    });
  });
</script>
</body>
</html>
