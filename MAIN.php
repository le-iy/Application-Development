<!DOCTYPE html>
<html>
<head>
    <title>Mga Summatives ni Lei</title>
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

        .summativeCard {
            width: 250px;
            height: 150px;
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

        .summativeCard:hover {
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
    <h1 class="mgaSummativesNiLei">MGA SUMMATIVES NI LEI &gt;:3</h1>

    <div class="cardHolder">
        <a href="SA1_1.php" class="summativeCard">
            <div class="cardText">
                <h2>SUMMATIVE 1: 1</h2>
                <p>Student Form</p>
            </div>
        </a>

        <a href="SA1_2.php" class="summativeCard">
            <div class="cardText">
                <h2>SUMMATIVE 1: 2</h2>
                <p>Multiplicatodn Tabel</p>
            </div>
        </a>
    </div>
</div>

</body>
</html>