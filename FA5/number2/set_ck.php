<?php
    $fname = "Lei";
    $mname = "Erynko";
    $lname = "Caabay";

    setcookie("fname_tensec", $fname, time() + 10);
    setcookie("mname_tensec", $mname, time() + 20);
    setcookie("lname_tensec", $lname, time() + 30);
?>

<html>
<head>
    <title>Formative 5</title>
    <link rel="stylesheet" href="../fa5_css.css">
</head>
<body>

<div class="cookie-container">
    <div class="result-box">
        <h3>CookieCounter = 10 !! ( '0' )</h3>

        <div>
            First Name:
            <?php
                if (isset($_COOKIE["fname_tensec"])) {
                    echo $_COOKIE["fname_tensec"] . "<br>";
                } else {
                    echo "Cookie had expired or was not set.<br>";
                }
            ?>
        </div>

        <div>
            Middle Name:
            <?php
                if (isset($_COOKIE["mname_tensec"])) {
                    echo $_COOKIE["mname_tensec"] . "<br>";
                } else {
                    echo "Cookie had expired or wasnot set.<br>";
                }
            ?>
        </div>

        <div>
            Last Name:
            <?php
                    if (isset($_COOKIE["lname_tensec"])) {
                echo $_COOKIE["lname_tensec"] . "<br>";
            } else {
                echo "Cookie had expired or was not set.<br>";
            }
            ?>
        </div>
    </div>
    
</div>
</body>
</html>