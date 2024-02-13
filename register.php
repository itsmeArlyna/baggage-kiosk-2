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
        font-size: 24px;
        color: #333;
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
    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col-12 ">
                <div class="card" id="custom-card">
                    <div class="card-body">
                        <div class="warning-container">
                            <div class="warning-icon">!</div>
                            <div class="warning-text">PLACE YOUR SCHOOL ID ON THE READER . . .</div>
                        </div>
                        <form method="post" action="insert.php">
                            <div class="form-row" id="student_logs">
                                <div class="form-group col-md-6">
                                    <label for="input_card_id">Card ID</label>
                                    <input type="text" class="form-control" id="input_card_id" name="input_card_id"
                                        placeholder="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input_tup_id">TUP ID</label>
                                    <input type="text" class="form-control" id="input_tup_id" name="input_tup_id"
                                        placeholder="Enter your Student ID" pattern="TUPM-\d{2}-\d{4}" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="input_student_name">Name</label>
                                    <input type="text" class="form-control" id="input_student_name"
                                        name="input_student_name" placeholder="Enter Full name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="input_student_gender">Gender</label>
                                    <select id="input_student_gender" name="input_student_gender" class="form-control">
                                        <option selected disabled value="">Choose Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="input_student_college">College</label>
                                    <select id="input_student_college" name="input_student_college" class="form-control"
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
                                    <select id="input_student_course" name="input_student_course" class="form-control">
                                        <option selected disabled value="">Choose Course</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="input_student_mobile">Mobile Number</label>
                                    <input type="text" class="form-control" id="input_student_mobile"
                                        name="input_student_mobile" placeholder="Enter Mobile no">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="input_student_email">Image 1</label>
                                    <input type="email" class="form-control" id="input_student_email"
                                        name="input_student_email" placeholder="This is optional, for face recognition">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="input_student_email">Image 2</label>
                                    <input type="email" class="form-control" id="input_student_email"
                                        name="input_student_email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="justify-content-center d-flex text-center">
                                <button class="btn btn-primary pt-2 mt-1" id="registerButton" type="submit"
                                    name="submit">
                                    <h4>Register!</h4>
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


    document.addEventListener('DOMContentLoaded', function() {
        var inputCode = document.getElementById('input_tup_id');

        inputCode.addEventListener('input', function() {
            var sanitizedValue = this.value.replace(/[^TUPM\d-]/g, '');

            if (/^TUPM-\d{0,2}-\d{0,4}$/.test(sanitizedValue)) {
                this.setCustomValidity(''); 
            } else {
                this.setCustomValidity('Please enter a valid code in the format TUPM-**-****');
            }
        });
    });


    const idleTime = 10000;

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

    </script>
</body>

</html>