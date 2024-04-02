<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MAIN INTERFACE</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        button {
            width: 50%;
            margin-bottom: 5%;
            transition: 0.2s;
        }

        button:hover {
            transform: scale(1.1);
        }

        .card {
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
            height: 100%;
            border-radius: 15px;
        }

        a {
            color: white;
            font-weight: bolder;
        }

        img {
            width: 30%;
            margin-bottom: 2%;
            border-radius: 50%;
        }

        body {
            background-color: rgba(67, 67, 67, 0.153);
        }

        nav {
            font-weight: bold;
        }

        .col-3 {
            padding-top: 15%;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-danger text-light">
        <span class="navbar-brand mb-0">LIBRARY - BAGGAGE AREA KIOSK</span>
        <a href="home.html" class="text-danger"><i class="fas fa-arrow-left"></i>
            Back</a>
    </nav>
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-9">
                <div class="card pt-5 justify-content-center text-center">

                    <h1 class="text-center text-info"><b>MOST RECENT LOG</b></h1>
                    <form action="save_logs.php" method="post">
                        <div>
                            <label for="rfid"></label>
                            <input id="myInput" type="text" name="rfid" style="opacity:0;" autocomplete="off">
                        </div>
                        <div>
                            <button id="submitButton" type="submit" name="save" hidden>save</button>
                        </div>
                    </form>
                    <div class="card-body">
                        <img src="" alt="" id="genderImage"> <!--put the image here-->
                        <div class="d-flex justify-content-center" id="tableBody"></div>
                    </div>
                </div>
            </div>
            <div class="col-3 text-center mt-5">
                <h1 class="mb-5" style="font-size: 2rem; color: #000;">Doesn't have an account yet?</h1>
                <a href="register.php"><button class="btn btn-success" id="registerButton">
                        <h5>Register</h5>
                    </button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mt-5">
                <a href="a_face/index.php">
                    <button class="btn btn-primary">Face recognition</button>
                </a>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script>
        function focusInput() {
            document.getElementById("myInput").focus();
        }
        focusInput();

        document.getElementById("myInput").addEventListener("input", function () {
            if (this.value.trim() !== "") {
                document.getElementById("submitButton").click();
            }
        });

        document.getElementById("myInput").addEventListener("input", function () {
            if (this.value.length > 10) {
                this.value = this.value.slice(0, 10);
            }
        });
        $.ajax({
            url: 'http://localhost/baggage-kiosk-2/save_logs.php',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                console.log(data);
                var html_append = "";
                var genderImage = ''; 
                $.each(data, function (index, item) {
                    var color = '';
                    if (item.status.toLowerCase() === 'out') {
                        color = 'red';
                    } else if (item.status.toLowerCase() === 'in') {
                        color = 'blue';
                    }
                    var tupid = item.tupid;
                    if (tupid.length > 4) {
                        tupid = tupid.slice(0, -4) + "****";
                    } else {
                        tupid = "****";
                    }
                    var gender = item.gender ? item.gender.toLowerCase() : 'unknown';
                    genderImage = getImageUrl(gender);
                    var statusHtml = '<h1 style="color: ' + color + '; font-weight: bold;">' + item.status.toUpperCase() + '</h1>';
                    html_append += '<div>' +
                        '<h1>' + tupid + '</h1>' +
                        statusHtml +
                        '</div>';
                });
                $("#genderImage").attr("src", genderImage);
                $("#tableBody").html(html_append);
            }
        });

        function getImageUrl(gender) {
            if (gender === 'female') {
                return 'https://i.pinimg.com/564x/85/25/83/852583511c3109d7a4efa0c3a233be1e.jpg';
            } else if (gender === 'male') {
                return 'https://i.pinimg.com/564x/d3/7b/02/d37b020e87945ad7f245e48df752ed03.jpg';
            } else {
                return 'unknown_image_url.jpg';
            }
        }
// document.getElementById("submitButton").addEventListener("click", function() {
//             var xhr = new XMLHttpRequest();
//             xhr.open("GET", "sendSMS.php", true);
//             xhr.onreadystatechange = function() {
//                 if (xhr.readyState === 4 && xhr.status === 200) {
//                     alert(xhr.responseText);
//                 }
//             };
//             xhr.send();
//         });
    </script>
</body>

</html>