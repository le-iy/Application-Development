<?php
    if (isset($_POST['firstname'])) {
        $fname = $_POST['firstname'];
        $mname = $_POST['middlename'];
        $lname = $_POST['lastname'];

        setcookie("first_name_ck10", $fname, time() + 10);
        setcookie("middle_name_ck10", $mname, time() + 10);
        setcookie("last_name_ck10", $lname, time() + 10);

        setcookie("first_name_ck20", $fname, time() + 20);
        setcookie("middle_name_ck20", $mname, time() + 20);
        setcookie("last_name_ck20", $lname, time() + 20);

        setcookie("first_name_ck30", $fname, time() + 30);
        setcookie("middle_name_ck30", $mname, time() + 30);
        setcookie("last_name_ck30", $lname, time() + 30);

        header("Location: mainpage_display.php?set=yes");
        exit();
    }
?>

<html>
<head>
    <title>Formative 5</title>
    <link rel="stylesheet" href="../fa5_css.css">
</head>
<body>

<div class="cookie-container">
    <?php
        if (isset($_GET['set'])) {
    ?>

    <div class="notif-box notif-success">
        <h3>Cookies added!!!!!!!!!!!!!!!!</h3>
        <div>First, middle, and last name will expire after <b>10 seconds</b>.</div>
    </div>

    <?php
    }?>

    <div class="result-box">
        <h3>Cookie Values</h3>

        <div>
            First Name:
            <?php
                if (isset($_COOKIE["first_name_ck10"])) {
                    echo $_COOKIE["first_name_ck10"];
                } else {
                    echo "cookie is expired or not set.";
                }
            ?>
        </div>

        <div>
            Middle Name:
            <?php
                if (isset($_COOKIE["middle_name_ck10"])) {
                    echo $_COOKIE["middle_name_ck10"];
                } else {
                    echo "cookie is expired or not set.";
                }
            ?>
        </div>

        <div>
            Last Name:
            <?php
                if (isset($_COOKIE["last_name_ck10"])) {
                    echo $_COOKIE["last_name_ck10"];
                } else {
                    echo "cookie is expired or not set.";
                }
            ?>
        </div>
    </div>

</div>


<div class="cookie-container">
    <?php
        if (isset($_GET['set'])) {
    ?>

    <div class="notif-box notif-success">
        <h3>Cookies added!!!!!!!!!!!!!!!!</h3>
        <div>First, middle, and last name will expire after <b>20 seconds</b>.</div>
    </div>

    <?php
    }?>

    <div class="result-box">
        <h3>Cookie Values</h3>

        <div>
            First Name:
            <?php
                if (isset($_COOKIE["first_name_ck20"])) {
                    echo $_COOKIE["first_name_ck20"];
                } else {
                    echo "cookie is expired or not set.";
                }
            ?>
        </div>

        <div>
            Middle Name:
            <?php
                if (isset($_COOKIE["middle_name_ck20"])) {
                    echo $_COOKIE["middle_name_ck20"];
                } else {
                    echo "cookie is expired or not set.";
                }
            ?>
        </div>

        <div>
            Last Name:
            <?php
                if (isset($_COOKIE["last_name_ck20"])) {
                    echo $_COOKIE["last_name_ck20"];
                } else {
                    echo "cookie is expired or not set.";
                }
            ?>
        </div>
    </div>

</div>


<div class="cookie-container">
    <?php
        if (isset($_GET['set'])) {
    ?>

    <div class="notif-box notif-success">
        <h3>Cookies added!!!!!!!!!!!!!!!!</h3>
        <div>First, middle, and last name will expire after <b>30 seconds</b>.</div>
    </div>

    <?php
    }?>

    <div class="result-box">
        <h3>Cookie Values</h3>

        <div>
            First Name:
            <?php
                if (isset($_COOKIE["first_name_ck30"])) {
                    echo $_COOKIE["first_name_ck30"];
                } else {
                    echo "cookie is expired or not set.";
                }
            ?>
        </div>

        <div>
            Middle Name:
            <?php
                if (isset($_COOKIE["middle_name_ck30"])) {
                    echo $_COOKIE["middle_name_ck30"];
                } else {
                    echo "cookie is expired or not set.";
                }
            ?>
        </div>

        <div>
            Last Name:
            <?php
                if (isset($_COOKIE["last_name_ck30"])) {
                    echo $_COOKIE["last_name_ck30"];
                } else {
                    echo "cookie is expired or not set.";
                }
            ?>
        </div>
    </div>

</div>

</body>
</html>