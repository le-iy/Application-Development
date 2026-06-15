<?php
    session_start();

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

    <div class="result-box">
        <a href="../image_bank/colors.avif">
            <img src="../image_bank/header.jpg" class="picture-img">
        </a>
        
        <h3>My Favorite Colors</h3>

        <div>My Favorite Color 1: <?php echo $_SESSION["fave_color1"]; ?></div>
        <div>My Favorite Color 2: <?php echo $_SESSION["fave_color2"]; ?></div>
        <div>My Favorite Color 3: <?php echo $_SESSION["fave_color3"]; ?></div>
        <div>My Favorite Color 4: <?php echo $_SESSION["fave_color4"]; ?></div>
        <div>My Favorite Color 5: <?php echo $_SESSION["fave_color5"]; ?></div>
    </div>
</div>

</body>
</html>