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
    <link rel="stylesheet" href="style.css">
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
                <select name="fave_color1">
                    <option value=""></option>
                    <option value="Red">Red</option>
                    <option value="Green">Green</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Blue">Blue</option>
                    <option value="Violet">Violet</option>
                    <option value="Orange">Orange</option>
                    <option value="Brown">Brown</option>
                    <option value="Gray">Gray</option>
                    <option value="Rainbow">Rainbow</option>
                </select>
            </div>

            <div class="session-row">
                <label>Favorite color 2:</label>
                <select name="fave_color2">
                    <option value=""></option>
                    <option value="Red">Red</option>
                    <option value="Green">Green</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Blue">Blue</option>
                    <option value="Violet">Violet</option>
                    <option value="Orange">Orange</option>
                    <option value="Brown">Brown</option>
                    <option value="Gray">Gray</option>
                    <option value="Rainbow">Rainbow</option>
                </select>
            </div>

            <div class="session-row">
                <label>Favorite color 3:</label>
                <select name="fave_color3">
                    <option value=""></option>
                    <option value="Red">Red</option>
                    <option value="Green">Green</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Blue">Blue</option>
                    <option value="Violet">Violet</option>
                    <option value="Orange">Orange</option>
                    <option value="Brown">Brown</option>
                    <option value="Gray">Gray</option>
                    <option value="Rainbow">Rainbow</option>
                </select>
            </div>

            <div class="session-row">
                <label>Favorite color 4:</label>
                <select name="fave_color4">
                    <option value=""></option>
                    <option value="Red">Red</option>
                    <option value="Green">Green</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Blue">Blue</option>
                    <option value="Violet">Violet</option>
                    <option value="Orange">Orange</option>
                    <option value="Brown">Brown</option>
                    <option value="Gray">Gray</option>
                    <option value="Rainbow">Rainbow</option>
                </select>
            </div>

            <div class="session-row">
                <label>Favorite color 5:</label>
                <select name="fave_color5">
                    <option value=""></option>
                    <option value="Red">Red</option>
                    <option value="Green">Green</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Blue">Blue</option>
                    <option value="Violet">Violet</option>
                    <option value="Orange">Orange</option>
                    <option value="Brown">Brown</option>
                    <option value="Gray">Gray</option>
                    <option value="Rainbow">Rainbow</option>
                </select>
            </div>
        </div>

        <div class="session-button">
            <input type="submit" name="submitbttn" value="SUBMIT">
        </div>
    </form>
</div>

</body>
</html>