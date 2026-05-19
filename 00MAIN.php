<!DOCTYPE html>
<html>
<head>
    <title>APPLICATION DEVELOPMENT: Courseworks</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .pageWrap {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 70px;
            box-sizing: border-box;
        }

        .mgaSummativesNiLei {
            margin: 0 0 35px 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 38px;
            font-weight: bold;
            color: #882121d5;
            text-align: center;
        }

        .cardHolder {
            display: flex;
            gap: 28px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .cardss {
            width: 190px;
            height: 110px;
            background-color: white;
            border-radius: 18px;
            box-shadow: 0 6px 16px rgba(255, 182, 193, 0.35);
            text-decoration: none;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            transition: transform 0.15s ease;
        }

        .cardss:hover {
            transform: translateY(-3px);
        }

        .cardText h2 {
            margin: 0;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 0.5px;
        }

        .cardText p {
            margin: 6px 0 0 0;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="pageWrap">
    <h1 class="mainTitle">APPLICATION DEVELOPMENT: Courseworks</h1>

    <div class="cardHolder">

    <? /*Summative1 */ ?>
        <a href="SA1_1.php" class="cardss">
            <div class="cardText">
                <h2>SUMMATIVE 1: 1</h2>
                <p>Student Form</p>
            </div>
        </a>

        <a href="SA1_2.php" class="cardss">
            <div class="cardText">
                <h2>SUMMATIVE 1: 2</h2>
                <p>Multiplicatodn Tabel</p>
            </div>
        </a>

    <? /*Forma3 */ ?>
        <a href="FA3_1.php" class="cardss">
            <div class="cardText">
                <h2>FORMATIVE 3</h2>
                <p>Number 1</p>
            </div>
        </a>

        <a href="FA3_2.php" class="cardss">
            <div class="cardText">
                <h2>FORMATIVE 3</h2>
                <p>Number 2</p>
            </div>
        </a>

        <a href="FA3_3.php" class="cardss">
            <div class="cardText">
                <h2>FORMATIVE 3</h2>
                <p>Number 3</p>
            </div>
        </a>
    
    <? /*Forma4 */ ?>
        <a href="FA4_1_index.php" class="cardss">
            <div class="cardText">
                <h2>FORMATIVE 4</h2>
                <p>2 items</p>
            </div>
        </a>
    </div>
</div>

</body>
</html>