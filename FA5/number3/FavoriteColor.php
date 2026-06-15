<?php
session_start();

if (isset($_POST["submitbttn"])) {
    $_SESSION["fave_color1"] = $_POST["fave_color1"];
    $_SESSION["fave_color2"] = $_POST["fave_color2"];
    $_SESSION["fave_color3"] = $_POST["fave_color3"];
    $_SESSION["fave_color4"] = $_POST["fave_color4"];
    $_SESSION["fave_color5"] = $_POST["fave_color5"];

    header("Location: ResultColors.php");
    exit();
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

            <div class="session-row">
                <label>Favorite color 1:</label>
                <input type="text" name="fave_color1" placeholder="red or #ff0000">
            </div>

            <div class="session-row">
                <label>Favorite color 2:</label>
                <input type="text" name="fave_color2" placeholder="blue or #0000ff">
            </div>

            <div class="session-row">
                <label>Favorite color 3:</label>
                <input type="text" name="fave_color3" placeholder="pink or #ffc0cb">
            </div>

            <div class="session-row">
                <label>Favorite color 4:</label>
                <input type="text" name="fave_color4" placeholder="green or #008000">
            </div>

            <div class="session-row">
                <label>Favorite color 5:</label>
                <input type="text" name="fave_color5" placeholder="yellow or #ffff00">
            </div>
        </div>

        <div class="session-button">
            <input type="submit" name="submitbttn" value="SUBMIT">
        </div>
    </form>
</div>

</body>
</html>