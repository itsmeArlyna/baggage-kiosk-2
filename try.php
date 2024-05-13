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
            <div class="col-12">
                <div class="card pt-5 justify-content-center text-center">

                    <h1 class="text-center text-info"><b>MOST RECENT BAG LOG</b></h1>
                    <form action="save_tag.php" method="post">
                        <div>
                            <label for="rfid"></label>
                            <input id="myInput" type="text" name="bag_tag_id" style="opacity:1;" autocomplete="off">
                        </div>
                        <div>
                            <button id="submitButton" type="submit" name="save" style="opacity:0;">save</button>
                        </div>
                    </form>
                    <div class="card-body">
                        <?php

                        include_once ('connection.php');
                        $sql = "SELECT * FROM registered_tags ORDER BY timestamp DESC LIMIT 1";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $latestRow = $result->fetch_assoc();
                            echo "<h1 class='text-primary'><b>BAG TAG: " . $latestRow['id_number'] . "</b></h1><br>";
                            echo "Status: " . $latestRow['status'] . "<br>";
                            echo "" . $latestRow['timestamp'] . "<br>";
                        } else {
                            echo "No rows found.";
                        }

                        ?>

                    </div>

                </div>
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

        // document.getElementById("myInput").addEventListener("input", function () {
        //     if (this.value.trim() !== "") {
        //         document.getElementById("submitButton").click();
        //     }
        // });

        // document.getElementById("myInput").addEventListener("input", function () {
        //     if (this.value.length > 10) {
        //         this.value = this.value.slice(0, 10);
        //     }
        // });


    </script>
</body>

</html>