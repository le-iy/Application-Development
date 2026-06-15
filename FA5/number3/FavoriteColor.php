<?php
session_start();

$error = "";

if (isset($_POST["submitbttn"])) {

    $color1 = $_POST["fave_color1"];
    $color2 = $_POST["fave_color2"];
    $color3 = $_POST["fave_color3"];
    $color4 = $_POST["fave_color4"];
    $color5 = $_POST["fave_color5"];

    if (
        preg_match("/^#[a-fA-F0-9]{6}$/", $color1) &&
        preg_match("/^#[a-fA-F0-9]{6}$/", $color2) &&
        preg_match("/^#[a-fA-F0-9]{6}$/", $color3) &&
        preg_match("/^#[a-fA-F0-9]{6}$/", $color4) &&
        preg_match("/^#[a-fA-F0-9]{6}$/", $color5)
    ) {
        $_SESSION["fave_color1"] = $color1;
        $_SESSION["fave_color2"] = $color2;
        $_SESSION["fave_color3"] = $color3;
        $_SESSION["fave_color4"] = $color4;
        $_SESSION["fave_color5"] = $color5;

        header("Location: ResultColors.php");
        exit();
    } else {
        $error = "Please enter valid hex colors only. Example: #ff0000";
    }
}
?>

<html>
<head>
    <title>Formative 5</title>
    <link rel="stylesheet" href="separeaerte_css.css">
</head>
<body>

<div class="session-container">
    <h2>Formative 5</h2>
    <p class="subtitle">Number 3</p>

    <form method="post" action="FavoriteColor.php">
        <div class="session-form">
            <div class="session-title">Enter your favorite colors</div>

            <?php
            if ($error != "") {
                echo "<p style='color:red; font-weight:bold;'>$error</p>";
            }
            ?>

            <div class="session-row">
                <label>Favorite color 1:</label>
                <input type="text" name="fave_color1">
            </div>

            <div class="session-row">
                <label>Favorite color 2:</label>
                <input type="text" name="fave_color2">
            </div>

            <div class="session-row">
                <label>Favorite color 3:</label>
                <input type="text" name="fave_color3">
            </div>

            <div class="session-row">
                <label>Favorite color 4:</label>
                <input type="text" name="fave_color4">
            </div>

            <div class="session-row">
                <label>Favorite color 5:</label>
                <input type="text" name="fave_color5">
            </div>
        </div>

        <div class="session-button">
            <input type="submit" name="submitbttn" value="SUBMIT">
        </div>
    </form>
</div>

</body>
</html>