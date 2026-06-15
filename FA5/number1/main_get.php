<html>
<head>
    <title>Formative 5</title>
    <link rel="stylesheet" href="../fa5_css.css">
</head>
<body>

<div class="container">
    <h2>Formative 5</h2>
    <p class="subtitle">Number 1</p>

    <?php
        $fname = $mname = $lname = $bday = $addr = "";
        $fnameErr = $mnameErr = $lnameErr = $bdayErr = $addrErr = "";
        $valid = true;

        if (isset($_GET['submitbtn'])) {
            $fname = $_GET['firstname'];
            $mname = $_GET['middlename'];
            $lname = $_GET['lastname'];
            $bday = $_GET['birthdate'];
            $addr = $_GET['address'];

            /*pragma guied
            az, AZ, 0-9, tapos pag symbols, -, pag hashes may \
            */
            if (empty($fname)) {
                $fnameErr = "First name is required.";
                $valid = false;
            } elseif (!preg_match("/^[a-zA-Z- ]+$/", $fname)) {
                $fnameErr = "Only letters, dash, and spaces are allowed.";
                $valid = false;
            }

            if (empty($mname)) {
                $mnameErr = "Middle name is required.";
                $valid = false;
            } elseif (!preg_match("/^[a-zA-Z- ]*$/", $mname)) {
                $mnameErr = "Only letters, dash, and spaces are allowed.";
                $valid = false;
            }

            if (empty($lname)) {
                $lnameErr = "Last name is required.";
                $valid = false;
            } elseif (!preg_match("/^[a-zA-Z- ]*$/", $lname)) {
                $lnameErr = "Only letters, dash, and spaces are allowed.";
                $valid = false;
            }

            if (empty($bday)) {
                $bdayErr = "Date of birth is required.";
                $valid = false;
            } elseif (strtotime($bday) == false) {
                $bdayErr = "Enter a valid date. Example: January 1 2005";
                $valid = false;
            }

            if (empty($addr)) {
                $addrErr = "Address is required.";
                $valid = false;
            }
        }
    ?>

    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-row">
            <label>First Name <span class="required_symbl">*</span></label>
            <input type="text" name="firstname" placeholder="Enter your first name" value="<?php echo $fname; ?>">
            <span class="error"><?php echo $fnameErr; ?></span>
        </div>

        <div class="form-row">
            <label>Middle Name <span class="required_symbl">*</span></label>
            <input type="text" name="middlename" placeholder="Enter your middle name" value="<?php echo $mname; ?>">
            <span class="error"><?php echo $mnameErr; ?></span>
        </div>

        <div class="form-row">
            <label>Last Name <span class="required_symbl">*</span></label>
            <input type="text" name="lastname" placeholder="Enter your last name" value="<?php echo $lname; ?>">
            <span class="error"><?php echo $lnameErr; ?></span>
        </div>

        <div class="form-row">
            <label>Date of Birth <span class="required_symbl">*</span></label>
            <input type="text" name="birthdate" placeholder="Month Day Year" value="<?php echo $bday; ?>">
            <span class="error"><?php echo $bdayErr; ?></span>
        </div>

        <div class="form-row">
            <label>Address <span class="required_symbl">*</span></label>
            <input type="text" name="address" placeholder="Enter your address" value="<?php echo $addr; ?>">
            <span class="error"><?php echo $addrErr; ?></span>
        </div>

        <div class="button-row">
            <input type="submit" name="submitbtn" value="Submit">
        </div>
    </form>

    <?php
        if (isset($_GET['submitbtn']) && $valid == true) {
    ?>

    <div class="result-box">
        <h3>Submitted Information</h3>
        <div>First Name: <?php echo $fname; ?></div>
        <div>Middle Name: <?php echo $mname; ?></div>
        <div>Last Name: <?php echo $lname; ?></div>
        <div>Date of Birth: <?php echo $bday; ?></div>
        <div>Address: <?php echo $addr; ?></div>
    </div>

    <?php
        }
    ?>
</div>

</body>
</html>