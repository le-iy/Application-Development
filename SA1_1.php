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

        .logoPic {
            width: 90px;
            height: 90px;
            object-fit: cover;
            display: block;
            margin: 0 auto 10px auto;
            border-radius: 50%;
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
            margin-top: 30px;
            background: #ffffff;
            border: 1px solid #e7e7e7;
            border-radius: 18px;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.06);
        }

        .output h2 {
            text-align: left;
            margin: 0 0 18px 0;
            font-size: 28px;
            font-weight: bold;
            color: #2b2b2b;
        }

        .output-pill {
            display: inline-block;
            background: #fff3ee;
            color: #f28c6f;
            border-radius: 999px;
            padding: 8px 14px;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 18px;
        }

        .output-grid {
            display: flex;
            gap: 16px;
            align-items: flex-start;
            flex-wrap: wrap;
            margin-bottom: 16px;
        }

        .output-card {
            background: #fff;
            border: 1px solid #ececec;
            border-radius: 16px;
            padding: 18px 20px;
            box-sizing: border-box;
            width: calc(50% - 8px);
        }

        .output-card.full-width {
            width: 100%;
        }

        .output-card h3 {
            margin: 0 0 12px 0;
            font-size: 16px;
            color: #f28c6f;
            font-weight: bold;
        }

        .output p {
            margin: 7px 0;
            font-size: 14px;
            color: #444;
            line-height: 1.6;
        }

        .output-label {
            font-weight: bold;
            color: #222;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="title">
        <img src="https://i.pinimg.com/736x/d6/94/de/d694deb596d8f2e7166c2c1bcc3c9c6a.jpg" alt="Logo" class="logoPic">
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
                        <input type="text" name="biiiiirthPlis" required>
                    </div>

                    <div class="field">
                        <label>Date of Birth</label>
                        <input type="date" name="bertDate" required>
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
                        <input type="text" name="studID" required>
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
                        <input type="text" name="prevSchool" required>
                    </div>

                    <div class="field">
                        <label>School Address</label>
                        <input type="text" name="schoolAdd" required>
                    </div>
                </div>

                <div class="col">
                    <div class="field">
                        <label>Year Graduated</label>
                        <input type="text" name="yearGraduated" required>
                    </div>

                    <div class="field">
                        <label>General Average</label>
                        <input type="text" name="genAve" required>
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
                        <select name="yearLvl" required>
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

        $biiiiirthPlis = $_POST["biiiiirthPlis"];
        $bertDate = $_POST["bertDate"];
        $age = $_POST["age"];
        $nationality = $_POST["nationality"];
        $studID = $_POST["studID"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];

        $prevSchool = $_POST["prevSchool"];
        $schoolAdd = $_POST["schoolAdd"];
        $yearGraduated = $_POST["yearGraduated"];
        $genAve = $_POST["genAve"];
        $trackStrand = $_POST["trackStrand"];
        $currentSchool = $_POST["currentSchool"];
        $course = $_POST["course"];
        $yearLvl = $_POST["yearLvl"];
        $schoolYear = $_POST["schoolYear"];

        if ($middleName != "") {
            $fullName = $firstName . " " . $middleName . " " . $lastName;
        } else {
            $fullName = $firstName . " " . $lastName;
        }

        echo "<div class='output'>";
        echo "<h2>Submitted Information</h2>";

        echo "<div class='output-grid'>";

        echo "<div class='output-card'>";
        echo "<h3>Personal Information</h3>";
        echo "<p><span class='output-label'>First Name:</span> " . $firstName . "</p>";
        echo "<p><span class='output-label'>Middle Name:</span> " . $middleName . "</p>";
        echo "<p><span class='output-label'>Last Name:</span> " . $lastName . "</p>";
        echo "<p><span class='output-label'>Full Name:</span> " . $fullName . "</p>";
        echo "<p><span class='output-label'>Place of Birth:</span> " . $biiiiirthPlis . "</p>";
        echo "<p><span class='output-label'>Date of Birth:</span> " . $bertDate . "</p>";
        echo "<p><span class='output-label'>Age:</span> " . $age . "</p>";
        echo "<p><span class='output-label'>Nationality:</span> " . $nationality . "</p>";
        echo "<p><span class='output-label'>Student ID No.:</span> " . $studID . "</p>";
        echo "<p><span class='output-label'>Email:</span> " . $email . "</p>";
        echo "<p><span class='output-label'>Gender:</span> " . $gender . "</p>";
        echo "<p><span class='output-label'>Phone:</span> " . $phone . "</p>";
        echo "<p><span class='output-label'>Address:</span> " . $address . "</p>";
        echo "</div>";

        echo "<div class='output-card'>";
        echo "<h3>Educational Background</h3>";
        echo "<p><span class='output-label'>Previous School:</span> " . $prevSchool . "</p>";
        echo "<p><span class='output-label'>School Address:</span> " . $schoolAdd . "</p>";
        echo "<p><span class='output-label'>Year Graduated:</span> " . $yearGraduated . "</p>";
        echo "<p><span class='output-label'>General Average:</span> " . $genAve . "</p>";
        echo "<p><span class='output-label'>Track / Strand:</span> " . $trackStrand . "</p>";
        echo "<p><span class='output-label'>School / University:</span> " . $currentSchool . "</p>";
        echo "<p><span class='output-label'>Course:</span> " . $course . "</p>";
        echo "<p><span class='output-label'>Year Level:</span> " . $yearLvl . "</p>";
        echo "<p><span class='output-label'>School Year:</span> " . $schoolYear . "</p>";
        echo "</div>";

        echo "</div>";

        echo "<div class='output-card full-width'>";
        echo "<h3>Formatted Output</h3>";
        echo "<p><span class='output-label'>Full Name in UPPERCASE:</span> " . strtoupper($fullName) . "</p>";
        echo "<p><span class='output-label'>Full Name in lowercase:</span> " . strtolower($fullName) . "</p>";
        echo "<p><span class='output-label'>Full Name in Name Case:</span> " . ucwords(strtolower($fullName)) . "</p>";
        echo "<p><span class='output-label'>Nationality in UPPERCASE:</span> " . strtoupper($nationality) . "</p>";
        echo "<p><span class='output-label'>Email in lowercase:</span> " . strtolower($email) . "</p>";
        echo "<p><span class='output-label'>Address in Name Case:</span> " . ucwords(strtolower($address)) . "</p>";
        echo "<p><span class='output-label'>Course in UPPERCASE:</span> " . strtoupper($course) . "</p>";
        echo "<p><span class='output-label'>Phone Number Length:</span> " . strlen($phone) . "</p>";
        echo "</div>";

        echo "</div>";
    }
    ?>

</div>

</body>
</html>