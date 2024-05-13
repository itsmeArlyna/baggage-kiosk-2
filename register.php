<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>REGISTRATION</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <style>
        body {
            background-color: rgba(67, 67, 67, 0.153);
        }

        button {
            width: 30%;
        }

        .btn {
            border-radius: 10px;
        }

        .card {
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
            height: 100%;
            border-radius: 10px;
        }

        a {
            color: white;
            font-weight: bolder;
        }

        img {
            width: 30%;
            margin-bottom: 10%;
        }

        #custom-card {
            padding: 2% 5%;
        }

        label {
            font-weight: bold;
        }

        nav {
            font-weight: bold;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }

        .warning-container {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }

        .warning-icon {
            width: 30px;
            height: 30px;
            background-color: #ff5555;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 20px;
            animation: pulse 1s infinite;
            font-weight: bold;
        }

        .warning-text {
            margin-left: 10px;
            font-size: 18px;
            color: red;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-danger text-light">
        <span class="navbar-brand mb-0">LIBRARY - BAGGAGE AREA KIOSK</span>
        <a href="user_main_interface.php"><i class="fas fa-arrow-left"></i>
            Back</a>
    </nav>
    <div class="container pt-2">
        <div class="row pt-5">
            <div class="col-12 ">
                <div class="card pt-5" id="custom-card">
                    <h1 class="text-info text-center"><b>Registration</b></h1>
                    <div class="card-body">
                        <div class="warning-container">
                            <div class="warning-icon">!</div>
                            <div class="warning-text">PLACE YOUR SCHOOL ID ON THE READER . . .</div>
                        </div>
                        <form action="save_registration.php" method="post">
                            <div class="form-row" id="student_logs">
                                <div class="form-group col-md-6">
                                    <label for="input_card_id">Card ID</label>
                                    <input type="text" class="form-control" id="input_card_id" name="rfid"
                                        placeholder="Place your id on the card reader" autofocus>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input_tup_id">TUP ID</label>
                                    <input type="text" class="form-control" id="input_tup_id" name="tupid"
                                        placeholder="Enter your Student ID" pattern="TUPM-\d{2}-\d{4}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="input_student_name">Name</label>
                                    <input type="text" class="form-control" id="input_student_name" name="name"
                                        placeholder="Enter Full name">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="input_student_gender">Gender</label>
                                    <select id="input_student_gender" name="gender" class="form-control">
                                        <option selected disabled value="">Choose Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="input_student_number">Number</label>
                                    <input type="text" class="form-control" id="input_student_number" name="number"
                                        value="+639" placeholder="Enter number">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="input_student_college">College</label>
                                    <select id="input_student_college" name="college" class="form-control"
                                        onchange="populateCourses()">
                                        <option selected disabled value="">Choose College</option>
                                        <option value="College of Industrial Technology">College of Industrial
                                            Technology</option>
                                        <option value="College of Industrial Education">College of Industrial Education
                                        </option>
                                        <option value="College of Engineering">College of Engineering</option>
                                        <option value="College of Liberal Arts">College of Liberal Arts</option>
                                        <option value="College of Science">College of Science</option>
                                        <option value="College of Architecture and Fine Arts">College of Architecture
                                            and Fine Arts</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input_student_course">Course</label>
                                    <select id="input_student_course" name="course" class="form-control">
                                        <option selected disabled value="">Choose Course</option>
                                    </select>
                                </div>
                            </div>

                
                            <div class="form-row">
                                <div class="col-12 d-flex align-items-center">
                                    <input type="checkbox" required>
                                    <p class="mb-0 ml-2">I understand the <a class="text-primary" href="#"
                                            data-toggle="modal" data-target="#exampleModal">Data Privacy Agreement</a>
                                    </p>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Data Privacy Agreement</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>This Data Privacy Agreement ("Agreement") is entered into by and between
                                                the Researchers of the study entitled Development of Security System for
                                                Baggage Are of Technological University of the Philippines located at
                                                Technological University of the Philippines-Manila Campus, and the user
                                                ("User") accessing the baggage area system of the University Library.
                                            </p>
                                            <br>
                                            <p>1. Data Collection and Usage</p>
                                            <br>
                                            <p>By using the baggage area system of the University Library, the User
                                                acknowledges and agrees that their personal data may be collected and
                                                processed by researchers for the sole purpose of facilitating the
                                                functionality of the system. Personal data may include but is not
                                                limited to:
                                                <br>
                                                - Name <br>
                                                - Student ID <br>
                                                - Contact Information
                                            </p>
                                            <br>
                                            2. Consent for Data Usage
                                            <br>
                                            The User explicitly consents to the collection, processing, and usage of
                                            their personal data for the purpose specified above. The researchers agrees
                                            not to use the User's personal data for any other purpose without obtaining
                                            additional consent.
                                            <br><br>
                                            3. Testing and Implementation
                                            <br>
                                            The User acknowledges that as part of the development, testing, and
                                            implementation of the baggage area system, their personal data may be
                                            utilized. This includes but is not limited to testing scenarios,
                                            troubleshooting, and system optimization.
                                            <br><br>
                                            4. Data Security
                                            <br>
                                            The researchers agrees to implement appropriate technical and organizational
                                            measures to ensure the security and confidentiality of the User's personal
                                            data.
                                            <br><br>
                                            5. Data Retention
                                            <br>
                                            Personal data collected from the User will only be retained for as long as
                                            necessary to fulfill the purposes outlined in this Agreement or as required
                                            by law.
                                            <br><br>
                                            6. User Rights
                                            <br>
                                            The User retains the right to access, rectify, and delete their personal
                                            data held by the researchers. Requests regarding personal data should be
                                            directed to angela.nalda@tup.edu.ph.
                                            <br><br>
                                            7. Agreement Acceptance
                                            <br>
                                            By accessing and using the baggage area system of the University Library,
                                            the User acknowledges that they have read, understood, and agreed to the
                                            terms of this Data Privacy Agreement.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="justify-content-center d-flex text-center">
                                <button class="btn btn-primary mt-2" id="registerButton" type="submit" name="register">
                                    <b>R E G I S T E R !</b>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>

    <script>
        function focusInput() {
            document.getElementById("input_card_id").focus();
        }
        focusInput();
        ///////////////////////////////////////////COLLEGE AND COURSE /////////////////////
        function populateCourses() {
            var collegeDropdown = document.getElementById("input_student_college");
            var courseDropdown = document.getElementById("input_student_course");

            courseDropdown.innerHTML = '<option selected disabled value="">Choose Course</option>';

            var selectedCollege = collegeDropdown.value;

            switch (selectedCollege) {
                case "College of Industrial Technology":
                    addCourseOption("Bachelor of Science in Food Technology");
                    addCourseOption("Bachelor of Engineering Technology major in Computer Engineering Technology");
                    addCourseOption("Bachelor of Engineering Technology major in Civil Technology");
                    addCourseOption("Bachelor of Engineering Technology major in Electrical Technology");
                    addCourseOption("Bachelor of Engineering Technology major in Electronics Communication Technology");
                    addCourseOption("Bachelor of Engineering Technology major in Electronics Technology");
                    addCourseOption("Bachelor of Engineering Technology major in Instrumentation and Control Technology");
                    addCourseOption("Bachelor of Engineering Technology major in Mechanical Technology");
                    addCourseOption("Bachelor of Engineering Technology major in Mechatronics Technology");
                    addCourseOption("Bachelor of Engineering Technology major in Railway Technology");
                    addCourseOption(
                        "Bachelor of Engineering Technology major in Mechanical Engineering Technology option in Automotive Technology"
                    );
                    addCourseOption(
                        "Bachelor of Engineering Technology major in Mechanical Engineering Technology option in Foundry Technology"
                    );
                    addCourseOption(
                        "Bachelor of Engineering Technology major in Mechanical Engineering Technology option in Heating Ventilating & Air-Conditioning/Refrigeration Technology"
                    );
                    addCourseOption(
                        "Bachelor of Engineering Technology major in Mechanical Engineering Technology option in Power Plant Technology"
                    );
                    addCourseOption(
                        "Bachelor of Engineering Technology major in Mechanical Engineering Technology option in Welding Technology"
                    );
                    addCourseOption(
                        "Bachelor of Engineering Technology major in Mechanical Engineering Technology option in Dies and Moulds Technology"
                    );
                    addCourseOption("Bachelor of Science in Food Technology");
                    addCourseOption("Master of Technology");
                    break;
                case "College of Industrial Education":
                    addCourseOption(
                        "Bachelor of Science Industrial Education major in Information Communication Technology");
                    addCourseOption("Bachelor of Science Industrial Education major in Home Economics");
                    addCourseOption("Bachelor of Science Industrial Education major in Industrial Arts");
                    addCourseOption("Bachelor of Technical Vocational Teachers Education major in Animation");
                    addCourseOption(
                        "Bachelor of Technical Vocational Teachers Education major in Beauty Care and Wellness");
                    addCourseOption("Bachelor of Technical Vocational Teachers Education major in Computer Programming");
                    addCourseOption("Bachelor of Technical Vocational Teachers Education major in Electrical");
                    addCourseOption("Bachelor of Technical Vocational Teachers Education major in Electronics");
                    addCourseOption("Bachelor of Technical Vocational Teachers Education major in Service Management");
                    addCourseOption("Bachelor of Technical Vocational Teachers Education major in Fashion and Garment");
                    addCourseOption(
                        "Bachelor of Technical Vocational Teachers Education major in Heat Ventilation & Air Conditioning"
                    );
                    addCourseOption("Bachelor of Technical Teachers Education");
                    addCourseOption(
                        "Bachelor of Science Industrial Education major in Information Communication Technology");
                    addCourseOption("Bachelor of Science Industrial Education major in Home Economics");
                    addCourseOption("Bachelor of Science Industrial Education major in Industrial Arts");
                    addCourseOption("Doctor of Education major in Industrial Education Management");
                    addCourseOption("Doctor of Education major in Career Guidance");
                    addCourseOption("Doctor of Technology");
                    addCourseOption("Doctor of Philosophy major in Technology Management");
                    addCourseOption("Master of Arts in Industrial Education major in Curriculum and Instruction");
                    addCourseOption("Master of Arts in Industrial Education major in Educational Technology");
                    addCourseOption("Master of Arts in Industrial Education major in Administration and Supervision");
                    addCourseOption("Master of Arts in Industrial Education major in Guidance and Counseling");
                    addCourseOption("Master of Arts in Teaching major in Technology and Home Economics");
                    addCourseOption("Master of Technology Education");
                    break;
                case "College of Engineering":
                    addCourseOption("Bachelor of Science in Civil Engineering");
                    addCourseOption("Bachelor of Science in Electrical Engineering");
                    addCourseOption("Bachelor of Science in Electronics Engineering");
                    addCourseOption("Bachelor of Science in Mechanical Engineering");
                    addCourseOption("Bachelor of Science in Civil Engineering");
                    addCourseOption("Bachelor of Science in Electrical Engineering");
                    addCourseOption("Bachelor of Science in Electronics Engineering");
                    addCourseOption("Bachelor of Science in Mechanical Engineering");
                    addCourseOption("Master of Engineering Program");
                    addCourseOption("Master of Science in Civil Engineering major in General Civil Engineering");
                    addCourseOption("Master of Science in Civil Engineering major in Geotechnical Engineering");
                    addCourseOption("Master of Science in Civil Engineering major in Structural Engineering");
                    addCourseOption("Master of Science in Electrical Engineering major in Power System Engineering");
                    addCourseOption(
                        "Master of Science in Electrical Engineering major in Instrumentation and Control Engineering");
                    addCourseOption("Master of Science in Electrical Engineering major in Electronics Engineering");
                    addCourseOption("Master of Science in Electrical Engineering major in Communication Engineering");
                    addCourseOption("Master of Science in Electrical Engineering");
                    addCourseOption("Master of Science in Electrical Engineering major in Computer Engineering");
                    addCourseOption("Master of Science in Mechanical Engineering major in Energy Engineering");
                    addCourseOption("Master of Science in Mechanical Engineering major in Production Technology");
                    addCourseOption(
                        "Masters of Engineering Program in Civil Engineering major in Structural Engineering Option");
                    addCourseOption(
                        "Masters of Engineering Program in Civil Engineering major in Geotechnical Engineering Option");
                    addCourseOption(
                        "Masters of Engineering Program in Civil Engineering major in General Civil Engineering Option");
                    addCourseOption(
                        "Masters of Engineering Program in Electrical Engineering major in Power Engineering Option");
                    addCourseOption(
                        "Masters of Engineering Program in Electrical Engineering major in Instrumentation and Computer Engineering Option"
                    );
                    addCourseOption(
                        "Masters of Engineering Program in Electrical Engineering major in Electronics and Communication Engineering Option"
                    );
                    addCourseOption(
                        "Masters of Engineering Program in Mechanical Engineering major in Refrigeration and Air-conditioning Option"
                    );
                    addCourseOption("Masters of Engineering Program in Mechanical Engineering major in Heat Power Option");
                    addCourseOption(
                        "Masters of Engineering Program in Mechanical Engineering major in Manufacturing and Production Option"
                    );
                    break;
                case "College of Liberal Arts":
                    addCourseOption("Bachelor of Arts in Management major in Industrial Management");
                    addCourseOption("Bachelor of Science in Entrepreneurship Management");
                    addCourseOption("Bachelor of Science in Hospitality Management");
                    addCourseOption("Bachelor of Arts in Management major in Industrial Management");
                    addCourseOption("Bachelor of Science in Entrepreneurship Management");
                    addCourseOption("Bachelor of Science in Hospitality Management");
                    addCourseOption("Doctor of Management Science");
                    addCourseOption("Master in Management");
                    break;
                case "College of Science":
                    addCourseOption("Bachelor of Applied Science in Laboratory Technology");
                    addCourseOption("Bachelor of Science in Computer Science");
                    addCourseOption("Bachelor of Science in Environmental Science");
                    addCourseOption("Bachelor of Science in Information System");
                    addCourseOption("Bachelor of Science in Information Technology");
                    addCourseOption("Bachelor of Applied Science in Laboratory Technology");
                    addCourseOption("Bachelor of Science in Computer Science");
                    addCourseOption("Bachelor of Science in Environmental Science");
                    addCourseOption("Bachelor of Science in Information System");
                    addCourseOption("Bachelor of Science in Information Technology");
                    addCourseOption("Master of Arts in Teaching major in Physics");
                    addCourseOption("Master of Arts in Teaching major in Mathematics");
                    addCourseOption("Master of Arts in Teaching major in General Science");
                    addCourseOption("Master of Arts in Teaching major in Chemistry");
                    addCourseOption("Master of Information Technology");
                    break;
                case "College of Architecture and Fine Arts":
                    addCourseOption("Bachelor of Science in Architecture");
                    addCourseOption("Bachelor of Fine Arts");
                    addCourseOption("Bachelor in Graphics Technology major in Architecture Technology");
                    addCourseOption("Bachelor in Graphics Technology major in Industrial Design");
                    addCourseOption("Bachelor in Graphics Technology major in Mechanical Drafting Technology");
                    addCourseOption("Bachelor of Science in Architecture");
                    addCourseOption("Bachelor of Fine Arts");
                    addCourseOption("Bachelor in Graphics Technology major in Architecture Technology");
                    addCourseOption("Bachelor in Graphics Technology major in Industrial Design");
                    addCourseOption("Bachelor in Graphics Technology major in Mechanical Drafting Technology");
                    addCourseOption("Master in Architecture major in Construction Technology Management");
                    addCourseOption("Master in Graphic Technology");

                    break;
            }
        }

        function addCourseOption(courseName) {
            var courseDropdown = document.getElementById("input_student_course");
            courseDropdown.innerHTML += '<option value="' + courseName + '">' + courseName + '</option>';
        }

        document.getElementById('input_card_id').addEventListener('input', function (event) {
            let inputValue = event.target.value;

            let sanitizedValue = inputValue.replace(/\D/g, '');

            sanitizedValue = sanitizedValue.slice(0, 10);

            event.target.value = sanitizedValue;
        });

        document.addEventListener('DOMContentLoaded', function () {
            var inputCode = document.getElementById('input_tup_id');

            inputCode.addEventListener('input', function () {
                var sanitizedValue = this.value.replace(/[^TUPM\d-]/g, '');

                if (/^TUPM-\d{0,2}-\d{0,4}$/.test(sanitizedValue)) {
                    this.setCustomValidity('');
                } else {
                    this.setCustomValidity('Please enter a valid code in the format TUPM-**-****');
                }
            });
        });


        const idleTime = 15000;

        let idleTimer;

        function resetTimer() {
            clearTimeout(idleTimer);
            idleTimer = setTimeout(goBack, idleTime);
        }

        function goBack() {
            if (window.history.length > 1) {
                window.history.back();
            } else {
                console.log("No previous page");
            }
        }

        document.addEventListener('mousemove', resetTimer);
        document.addEventListener('keydown', resetTimer);
        document.addEventListener('mousedown', resetTimer);
        document.addEventListener('touchstart', resetTimer);

        // Function to handle opening the camera
function openCamera() {
    const constraints = {
        video: true
    };

    const cameraPreview = document.getElementById('cameraPreview');
    const canvas = document.getElementById('canvas');
    const capturedImage = document.getElementById('capturedImage');

    navigator.mediaDevices.getUserMedia(constraints)
        .then(stream => {
            // Display the camera stream in a video element
            cameraPreview.srcObject = stream;
            cameraPreview.play();
            cameraPreview.style.display = 'block';
        })
        .catch(error => {
            console.error('Error accessing camera:', error);
            alert('Failed to access the camera. Please check your device settings.');
        });

    // Function to capture an image from the video stream
    function captureImage() {
        canvas.width = cameraPreview.videoWidth;
        canvas.height = cameraPreview.videoHeight;
        canvas.getContext('2d').drawImage(cameraPreview, 0, 0, canvas.width, canvas.height);

        // Convert the captured image to data URL
        const imageDataURL = canvas.toDataURL('image/jpeg');

        // Display the captured image in an <img> element
        capturedImage.src = imageDataURL;
        capturedImage.style.display = 'block';

        // Stop the camera stream
        cameraPreview.srcObject.getTracks().forEach(track => track.stop());
        cameraPreview.style.display = 'none';
        canvas.style.display = 'none';
    }

    // Attach captureImage function to the button click event
    const cameraButton = document.getElementById('cameraButton');
    cameraButton.addEventListener('click', captureImage);
}

// Attach openCamera function to the button click event
const cameraButton = document.getElementById('cameraButton');
cameraButton.addEventListener('click', openCamera);

    </script>
</body>

</html>