<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #062349;
            margin: 0;
            padding: 20px;
        }

        .container {
            width: 820px;
            margin: auto;
            background-color: #f2f2f2;
            border-radius: 6px;
            padding: 18px 18px 25px 18px;
            box-sizing: border-box;
        }

        h1, h2, h3, p {
            margin: 0;
        }

        .top-header {
            text-align: center;
            margin-bottom: 15px;
        }

        .top-header h2 {
            font-size: 16px;
            font-weight: bold;
        }

        .top-header p {
            font-size: 10px;
            font-style: italic;
            color: #666;
        }

        .top-header h1 {
            font-size: 15px;
            margin-top: 8px;
            font-weight: bold;
            line-height: 1.3;
        }

        .section {
            border: 1px solid #9db2c8;
            border-radius: 4px;
            padding: 12px 10px 14px 10px;
            margin-bottom: 12px;
            background-color: #f2f2f2;
        }

        .section-title {
            display: inline-block;
            background-color: #17395d;
            color: white;
            font-size: 10px;
            font-weight: bold;
            padding: 4px 10px;
            border-radius: 3px;
            margin-bottom: 12px;
        }

        .sub-title {
            font-size: 11px;
            font-weight: bold;
            margin: 8px 0 8px 0;
        }

        .row {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }

        .field {
            flex: 1;
        }

        .field label {
            display: block;
            font-size: 10px;
            margin-bottom: 4px;
            color: #000;
        }

        .field input,
        .field select,
        .field textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 6px 8px;
            border: 1px solid #9db2c8;
            border-radius: 2px;
            font-size: 11px;
            background-color: white;
        }

        .field textarea {
            resize: none;
            height: 55px;
        }

        .radio-group {
            padding-top: 4px;
            font-size: 11px;
        }

        .radio-group input {
            margin-right: 3px;
        }

        .button-row {
            text-align: center;
            margin-top: 14px;
        }

        .button-row input {
            padding: 7px 18px;
            border: none;
            border-radius: 2px;
            font-size: 11px;
            cursor: pointer;
            margin: 0 5px;
        }

        .clear-btn {
            background-color: #c9d8e8;
            color: #000;
        }

        .submit-btn {
            background-color: #17395d;
            color: white;
        }

        .output {
            margin-top: 18px;
            border: 1px solid #9db2c8;
            background-color: #ffffff;
            padding: 15px;
            border-radius: 4px;
        }

        .output h2 {
            text-align: center;
            margin-bottom: 12px;
            font-size: 18px;
        }

        .output h3 {
            margin-top: 12px;
            margin-bottom: 8px;
            font-size: 14px;
            color: #17395d;
        }

        .output p {
            margin: 5px 0;
            font-size: 13px;
        }

        hr {
            border: 0;
            border-top: 1px solid #d3dbe4;
            margin: 14px 0;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="top-header">
        <h1>APPLICATION DEVELOPMENT SUMMATIVE<br>Student Registration Form</h1>
    </div>

    <form method="post">

        <div class="section">
            <div class="section-title">Personal Information</div>

            <div class="row">
                <div class="field">
                    <label>Last Name</label>
                    <input type="text" name="lastName" required>
                </div>
                <div class="field">
                    <label>First Name</label>
                    <input type="text" name="firstName" required>
                </div>
                <div class="field">
                    <label>Middle Name</label>
                    <input type="text" name="middleName">
                </div>
            </div>

            <div class="row">
                <div class="field">
                    <label>Date of Birth</label>
                    <input type="date" name="birthDate" required>
                </div>
                <div class="field">
                    <label>Age</label>
                    <input type="number" name="age" required>
                </div>
            </div>

            <div class="row">
                <div class="field">
                    <label>Sex</label>
                    <div class="radio-group">
                        <input type="radio" name="sex" value="Male" required> Male
                        <input type="radio" name="sex" value="Female"> Female
                    </div>
                </div>
                <div class="field">
                    <label>Email Address</label>
                    <input type="text" name="email" required>
                </div>
                <div class="field">
                    <label>Contact Number</label>
                    <input type="text" name="contactNumber" required>
                </div>
            </div>

            <div class="row">
                <div class="field">
                    <label>Address</label>
                    <textarea name="address" required></textarea>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section-title">Educational Background</div>

            <div class="sub-title">Senior High School Information</div>

            <div class="row">
                <div class="field">
                    <label>Previous School (SHS)</label>
                    <input type="text" name="previousSchool" required>
                </div>
            </div>

            <div class="row">
                <div class="field">
                    <label>School Address</label>
                    <input type="text" name="schoolAddress" required>
                </div>
                <div class="field">
                    <label>Year Graduated</label>
                    <input type="text" name="yearGraduated" required>
                </div>
            </div>

            <div class="row">
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
                <div class="field">
                    <label>General Average</label>
                    <input type="text" name="generalAverage" required>
                </div>
            </div>

            <hr>

            <div class="sub-title">College Information</div>

            <div class="row">
                <div class="field">
                    <label>Current School / University</label>
                    <input type="text" name="currentSchool" required>
                </div>
            </div>

            <div class="row">
                <div class="field">
                    <label>Course</label>
                    <select name="course" required>
                        <option value="">Select...</option>
                        <option value="BS Information Technology">BS Information Technology</option>
                        <option value="BS Computer Science">BS Computer Science</option>
                        <option value="BS Information Systems">BS Information Systems</option>
                    </select>
                </div>
                <div class="field">
                    <label>Year Level</label>
                    <select name="yearLevel" required>
                        <option value="">Select Year</option>
                        <option value="1st Year">1st Year</option>
                        <option value="2nd Year">2nd Year</option>
                        <option value="3rd Year">3rd Year</option>
                        <option value="4th Year">4th Year</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="field">
                    <label>Student ID Number</label>
                    <input type="text" name="studentId" required>
                </div>
                <div class="field">
                    <label>School Year</label>
                    <input type="text" name="schoolYear" placeholder="2025-2026" required>
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

        $lastName = $_POST["lastName"];
        $firstName = $_POST["firstName"];
        $middleName = $_POST["middleName"];
        $birthDate = $_POST["birthDate"];
        $age = $_POST["age"];
        $sex = $_POST["sex"];
        $email = $_POST["email"];
        $contactNumber = $_POST["contactNumber"];
        $address = $_POST["address"];

        $previousSchool = $_POST["previousSchool"];
        $schoolAddress = $_POST["schoolAddress"];
        $yearGraduated = $_POST["yearGraduated"];
        $trackStrand = $_POST["trackStrand"];
        $generalAverage = $_POST["generalAverage"];

        $currentSchool = $_POST["currentSchool"];
        $course = $_POST["course"];
        $yearLevel = $_POST["yearLevel"];
        $studentId = $_POST["studentId"];
        $schoolYear = $_POST["schoolYear"];

        $fullName = $firstName . " " . $middleName . " " . $lastName;

        echo "<div class='output'>";
        echo "<h2>Student Registration Output</h2>";

        echo "<h3>Personal Information</h3>";
        echo "<p>Full Name: " . $fullName . "</p>";
        echo "<p>Last Name: " . $lastName . "</p>";
        echo "<p>First Name: " . $firstName . "</p>";
        echo "<p>Middle Name: " . $middleName . "</p>";
        echo "<p>Date of Birth: " . $birthDate . "</p>";
        echo "<p>Age: " . $age . "</p>";
        echo "<p>Sex: " . $sex . "</p>";
        echo "<p>Email Address: " . $email . "</p>";
        echo "<p>Contact Number: " . $contactNumber . "</p>";
        echo "<p>Address: " . $address . "</p>";

        echo "<h3>Educational Background</h3>";
        echo "<p>Previous School (SHS): " . $previousSchool . "</p>";
        echo "<p>School Address: " . $schoolAddress . "</p>";
        echo "<p>Year Graduated: " . $yearGraduated . "</p>";
        echo "<p>Track / Strand: " . $trackStrand . "</p>";
        echo "<p>General Average: " . $generalAverage . "</p>";
        echo "<p>Current School / University: " . $currentSchool . "</p>";
        echo "<p>Course: " . $course . "</p>";
        echo "<p>Year Level: " . $yearLevel . "</p>";
        echo "<p>Student ID Number: " . $studentId . "</p>";
        echo "<p>School Year: " . $schoolYear . "</p>";

        echo "<h3>Formatted Output</h3>";
        echo "<p>Full Name in UPPERCASE: " . strtoupper($fullName) . "</p>";
        echo "<p>Full Name in lowercase: " . strtolower($fullName) . "</p>";
        echo "<p>Full Name in Name Case: " . ucwords(strtolower($fullName)) . "</p>";
        echo "<p>Course in UPPERCASE: " . strtoupper($course) . "</p>";
        echo "<p>Address in Name Case: " . ucwords(strtolower($address)) . "</p>";
        echo "<p>Email in lowercase: " . strtolower($email) . "</p>";
        echo "<p>Contact Number Length: " . strlen($contactNumber) . "</p>";

        echo "</div>";
    }
    ?>

</div>

</body>
</html>