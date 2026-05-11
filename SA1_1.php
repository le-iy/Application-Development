<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 20px;
            color: #222;
        }

        .container {
            width: 900px;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            box-sizing: border-box;
            border: 1px solid #ddd;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        .title h1 {
            font-size: 24px;
            margin: 0;
        }

        .title p {
            margin: 5px 0 0 0;
            font-size: 13px;
        }

        .section {
            border: 2px solid #e0b3b3;
            padding: 14px;
            margin-bottom: 18px;
        }

        .section-title {
            display: inline-block;
            background: #d9534f;
            color: #fff;
            font-size: 12px;
            font-weight: bold;
            padding: 6px 10px;
            margin-bottom: 14px;
        }

        .row {
            display: flex;
            gap: 30px;
            margin-bottom: 14px;
        }

        .col {
            width: 50%;
        }

        .field {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .field label {
            width: 120px;
            font-size: 12px;
        }

        .field input[type="text"],
        .field input[type="number"],
        .field input[type="date"],
        .field select {
            flex: 1;
            padding: 7px;
            border: 1px solid #bbb;
            box-sizing: border-box;
            font-size: 12px;
            background: #fff;
        }

        .field textarea {
            flex: 1;
            padding: 7px;
            border: 1px solid #bbb;
            box-sizing: border-box;
            font-size: 12px;
            background: #fff;
            height: 70px;
            resize: none;
        }

        .radio-inline {
            flex: 1;
            font-size: 12px;
        }

        .radio-inline label {
            width: auto;
            margin-right: 14px;
        }

        .subheading {
            font-size: 12px;
            font-weight: bold;
            margin: 10px 0;
        }

        .button-row {
            text-align: center;
            margin-top: 20px;
        }

        .button-row input {
            padding: 10px 18px;
            border: none;
            cursor: pointer;
            margin: 0 5px;
            font-size: 12px;
        }

        .clear-btn {
            background: #cccccc;
            color: #000;
        }

        .submit-btn {
            background: #333;
            color: #fff;
        }

        .output {
            margin-top: 25px;
            padding: 18px;
            border: 1px solid #bbb;
            background: #fafafa;
        }

        .output h2 {
            text-align: center;
            margin-top: 0;
            font-size: 22px;
        }

        .output h3 {
            margin-bottom: 8px;
            margin-top: 16px;
            font-size: 15px;
        }

        .output p {
            margin: 5px 0;
            font-size: 13px;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="title">
        <h1>Student Registration Form</h1>
        <p>Student Information and Educational Background</p>
    </div>

    <form method="post">

        <div class="section">
            <div class="section-title">PERSONAL INFORMATION</div>

            <div class="row">
                <div class="col">
                    <div class="field">
                        <label>First Name</label>
                        <input type="text" name="firstName" required>
                    </div>

                    <div class="field">
                        <label>Middle Name</label>
                        <input type="text" name="middleName">
                    </div>

                    <div class="field">
                        <label>Last Name</label>
                        <input type="text" name="lastName" required>
                    </div>

                    <div class="field">
                        <label>Place of Birth</label>
                        <input type="text" name="placeOfBirth" required>
                    </div>

                    <div class="field">
                        <label>Date of Birth</label>
                        <input type="date" name="birthDate" required>
                    </div>

                    <div class="field">
                        <label>Age</label>
                        <input type="number" name="age" required>
                    </div>

                    <div class="field">
                        <label>Nationality</label>
                        <input type="text" name="nationality" required>
                    </div>
                </div>

                <div class="col">
                    <div class="field">
                        <label>Student ID No.</label>
                        <input type="text" name="studentId" required>
                    </div>

                    <div class="field">
                        <label>Gender</label>
                        <div class="radio-inline">
                            <label><input type="radio" name="gender" value="Male" required> Male</label>
                            <label><input type="radio" name="gender" value="Female"> Female</label>
                        </div>
                    </div>

                    <div class="field">
                        <label>Email</label>
                        <input type="text" name="email" required>
                    </div>

                    <div class="field">
                        <label>Phone</label>
                        <input type="text" name="phone" required>
                    </div>

                    <div class="field">
                        <label>Address</label>
                        <textarea name="address" required></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section-title">EDUCATIONAL BACKGROUND</div>

            <div class="subheading">Senior High School Information</div>

            <div class="row">
                <div class="col">
                    <div class="field">
                        <label>Previous School</label>
                        <input type="text" name="previousSchool" required>
                    </div>

                    <div class="field">
                        <label>School Address</label>
                        <input type="text" name="schoolAddress" required>
                    </div>
                </div>

                <div class="col">
                    <div class="field">
                        <label>Year Graduated</label>
                        <input type="text" name="yearGraduated" required>
                    </div>

                    <div class="field">
                        <label>General Average</label>
                        <input type="text" name="generalAverage" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="field">
                        <label>Track / Strand</label>
                        <select name="trackStrand" required>
                            <option value="">Select...</option>
                            <option value="STEM">STEM</option>
                            <option value="ABM">ABM</option>
                            <option value="HUMSS">HUMSS</option>
                            <option value="GAS">GAS</option>
                            <option value="TVL">TVL</option>
                            <option value="ICT">ICT</option>
                        </select>
                    </div>
                </div>

                <div class="col">
                </div>
            </div>

            <div class="subheading">College Information</div>

            <div class="row">
                <div class="col">
                    <div class="field">
                        <label>School / Univ.</label>
                        <input type="text" name="currentSchool" required>
                    </div>

                    <div class="field">
                        <label>Course</label>
                        <select name="course" required>
                            <option value="">Select...</option>
                            <option value="BS Information Technology">BS Information Technology</option>
                            <option value="BS Computer Science">BS Computer Science</option>
                            <option value="BS Information Systems">BS Information Systems</option>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="field">
                        <label>Year Level</label>
                        <select name="yearLevel" required>
                            <option value="">Select...</option>
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                        </select>
                    </div>

                    <div class="field">
                        <label>School Year</label>
                        <input type="text" name="schoolYear" placeholder="2025-2026" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="button-row">
            <input type="reset" value="Clear Form" class="clear-btn">
            <input type="submit" name="submit" value="Submit Registration" class="submit-btn">
        </div>

    </form>

    <?php
    if (isset($_POST["submit"])) {

        $firstName = $_POST["firstName"];
        $middleName = $_POST["middleName"];
        $lastName = $_POST["lastName"];

        $placeOfBirth = $_POST["placeOfBirth"];
        $birthDate = $_POST["birthDate"];
        $age = $_POST["age"];
        $nationality = $_POST["nationality"];
        $studentId = $_POST["studentId"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];

        $previousSchool = $_POST["previousSchool"];
        $schoolAddress = $_POST["schoolAddress"];
        $yearGraduated = $_POST["yearGraduated"];
        $generalAverage = $_POST["generalAverage"];
        $trackStrand = $_POST["trackStrand"];
        $currentSchool = $_POST["currentSchool"];
        $course = $_POST["course"];
        $yearLevel = $_POST["yearLevel"];
        $schoolYear = $_POST["schoolYear"];

        if ($middleName != "") {
            $fullName = $firstName . " " . $middleName . " " . $lastName;
        } else {
            $fullName = $firstName . " " . $lastName;
        }

        echo "<div class='output'>";
        echo "<h2>Student Registration Output</h2>";

        echo "<h3>Personal Information</h3>";
        echo "<p>First Name: " . $firstName . "</p>";
        echo "<p>Middle Name: " . $middleName . "</p>";
        echo "<p>Last Name: " . $lastName . "</p>";
        echo "<p>Full Name: " . $fullName . "</p>";
        echo "<p>Place of Birth: " . $placeOfBirth . "</p>";
        echo "<p>Date of Birth: " . $birthDate . "</p>";
        echo "<p>Age: " . $age . "</p>";
        echo "<p>Nationality: " . $nationality . "</p>";
        echo "<p>Student ID No.: " . $studentId . "</p>";
        echo "<p>Email: " . $email . "</p>";
        echo "<p>Gender: " . $gender . "</p>";
        echo "<p>Phone: " . $phone . "</p>";
        echo "<p>Address: " . $address . "</p>";

        echo "<h3>Educational Background</h3>";
        echo "<p>Previous School: " . $previousSchool . "</p>";
        echo "<p>School Address: " . $schoolAddress . "</p>";
        echo "<p>Year Graduated: " . $yearGraduated . "</p>";
        echo "<p>General Average: " . $generalAverage . "</p>";
        echo "<p>Track / Strand: " . $trackStrand . "</p>";
        echo "<p>School / University: " . $currentSchool . "</p>";
        echo "<p>Course: " . $course . "</p>";
        echo "<p>Year Level: " . $yearLevel . "</p>";
        echo "<p>School Year: " . $schoolYear . "</p>";

        echo "<h3>Formatted Output</h3>";
        echo "<p>Full Name in UPPERCASE: " . strtoupper($fullName) . "</p>";
        echo "<p>Full Name in lowercase: " . strtolower($fullName) . "</p>";
        echo "<p>Full Name in Name Case: " . ucwords(strtolower($fullName)) . "</p>";
        echo "<p>Nationality in UPPERCASE: " . strtoupper($nationality) . "</p>";
        echo "<p>Email in lowercase: " . strtolower($email) . "</p>";
        echo "<p>Address in Name Case: " . ucwords(strtolower($address)) . "</p>";
        echo "<p>Course in UPPERCASE: " . strtoupper($course) . "</p>";
        echo "<p>Phone Number Length: " . strlen($phone) . "</p>";

        echo "</div>";
    }
    ?>

</div>

</body>
</html>