<?php
    session_start();

    if ($_SESSION["fave_color1"] == "Red") {
        $image1 = "red.jpg";
    } elseif ($_SESSION["fave_color1"] == "Green") {
        $image1 = "green.jpg";
    } elseif ($_SESSION["fave_color1"] == "Yellow") {
        $image1 = "yellow.jpg";
    } elseif ($_SESSION["fave_color1"] == "Blue") {
        $image1 = "blue.jpg";
    } elseif ($_SESSION["fave_color1"] == "Violet") {
        $image1 = "violet.jpg";
    } elseif ($_SESSION["fave_color1"] == "Orange") {
        $image1 = "orange.jpg";
    } elseif ($_SESSION["fave_color1"] == "Brown") {
        $image1 = "brown.jpg";
    } elseif ($_SESSION["fave_color1"] == "Gray") {
        $image1 = "gray.jpg";
    }

    if ($_SESSION["fave_color2"] == "Red") {
        $image2 = "red.jpg";
    } elseif ($_SESSION["fave_color2"] == "Green") {
        $image2 = "green.jpg";
    } elseif ($_SESSION["fave_color2"] == "Yellow") {
        $image2 = "yellow.jpg";
    } elseif ($_SESSION["fave_color2"] == "Blue") {
        $image2 = "blue.jpg";
    } elseif ($_SESSION["fave_color2"] == "Violet") {
        $image2 = "violet.jpg";
    } elseif ($_SESSION["fave_color2"] == "Orange") {
        $image2 = "orange.jpg";
    } elseif ($_SESSION["fave_color2"] == "Brown") {
        $image2 = "brown.jpg";
    } elseif ($_SESSION["fave_color2"] == "Gray") {
        $image2 = "gray.jpg";
    }

    if ($_SESSION["fave_color3"] == "Red") {
        $image3 = "red.jpg";
    } elseif ($_SESSION["fave_color3"] == "Green") {
        $image3 = "green.jpg";
    } elseif ($_SESSION["fave_color3"] == "Yellow") {
        $image3 = "yellow.jpg";
    } elseif ($_SESSION["fave_color3"] == "Blue") {
        $image3 = "blue.jpg";
    } elseif ($_SESSION["fave_color3"] == "Violet") {
        $image3 = "violet.jpg";
    } elseif ($_SESSION["fave_color3"] == "Orange") {
        $image3 = "orange.jpg";
    } elseif ($_SESSION["fave_color3"] == "Brown") {
        $image3 = "brown.jpg";
    } elseif ($_SESSION["fave_color3"] == "Gray") {
        $image3 = "gray.jpg";
    }

    if ($_SESSION["fave_color4"] == "Red") {
        $image4 = "red.jpg";
    } elseif ($_SESSION["fave_color4"] == "Green") {
        $image4 = "green.jpg";
    } elseif ($_SESSION["fave_color4"] == "Yellow") {
        $image4 = "yellow.jpg";
    } elseif ($_SESSION["fave_color4"] == "Blue") {
        $image4 = "blue.jpg";
    } elseif ($_SESSION["fave_color4"] == "Violet") {
        $image4 = "violet.jpg";
    } elseif ($_SESSION["fave_color4"] == "Orange") {
        $image4 = "orange.jpg";
    } elseif ($_SESSION["fave_color4"] == "Brown") {
        $image4 = "brown.jpg";
    } elseif ($_SESSION["fave_color4"] == "Gray") {
        $image4 = "gray.jpg";
    }

    if ($_SESSION["fave_color5"] == "Red") {
        $image5 = "red.jpg";
    } elseif ($_SESSION["fave_color5"] == "Green") {
        $image5 = "green.jpg";
    } elseif ($_SESSION["fave_color5"] == "Yellow") {
        $image5 = "yellow.jpg";
    } elseif ($_SESSION["fave_color5"] == "Blue") {
        $image5 = "blue.jpg";
    } elseif ($_SESSION["fave_color5"] == "Violet") {
        $image5 = "violet.jpg";
    } elseif ($_SESSION["fave_color5"] == "Orange") {
        $image5 = "orange.jpg";
    } elseif ($_SESSION["fave_color5"] == "Brown") {
        $image5 = "brown.jpg";
    } elseif ($_SESSION["fave_color5"] == "Gray") {
        $image5 = "gray.jpg";
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

    <div class="result-box">
        <a href="../image_bank/colors.avif">
            <img src="../image_bank/header.jpg" class="picture-img">
        </a>
        
        <h3>MY FAVORITE COLORS</h3>

        <div class="color-item">
            <div>My Favorite Color 1: <?php echo $_SESSION["fave_color1"]; ?></div>
            <img src="../image_bank/<?php echo $image1; ?>" class="picture-img">
        </div>

        <div class="color-item">
            <div>My Favorite Color 2: <?php echo $_SESSION["fave_color2"]; ?></div>
            <img src="../image_bank/<?php echo $image2; ?>" class="picture-img">
        </div>

        <div class="color-item">
            <div>My Favorite Color 3: <?php echo $_SESSION["fave_color3"]; ?></div>
            <img src="../image_bank/<?php echo $image3; ?>" class="picture-img">
        </div>

        <div class="color-item">
            <div>My Favorite Color 4: <?php echo $_SESSION["fave_color4"]; ?></div>
            <img src="../image_bank/<?php echo $image4; ?>" class="picture-img">
        </div>

        <div class="color-item">
            <div>My Favorite Color 5: <?php echo $_SESSION["fave_color5"]; ?></div>
            <img src="../image_bank/<?php echo $image5; ?>" class="picture-img">
        </div>
    </div>
</div>

</body>
</html>