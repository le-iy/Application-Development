<html>
<head>
    <title>Formative 5</title>
    <link rel="stylesheet" href="../fa5_css.css">
</head>
<body>

<div class="container">
    <h2>Formative 5</h2>
    <p class="subtitle">Number 2</p>

    <form method="post" action="mainpage_display.php">
        <div class="form-row">
            <label>First Name <span class="required_symbl">*</span></label>
            <input type="text" name="firstname" placeholder="Enter your first name">
        </div>

        <div class="form-row">
            <label>Middle Name <span class="required_symbl">*</span></label>
            <input type="text" name="middlename" placeholder="Enter your middle name">
        </div>

        <div class="form-row">
            <label>Last Name <span class="required_symbl">*</span></label>
            <input type="text" name="lastname" placeholder="Enter your last name">
        </div>

        <div class="form-row">
            <label>Date of Birth <span class="required_symbl">*</span></label>
            <input type="text" name="birthdate" placeholder="Month Day Year">
        </div>

        <div class="form-row">
            <label>Address <span class="required_symbl">*</span></label>
            <input type="text" name="address" placeholder="Enter your address">
        </div>

        <div class="button-row">
            <input type="submit" value="Submit">
        </div>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['firstname'])) {
            $fname = $_GET['firstname'];
            $mname = $_GET['middlename'];
            $lname = $_GET['lastname'];
            $bday = $_GET['birthdate'];
            $addr = $_GET['address'];
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
    }?>
</div>

</body>
</html>