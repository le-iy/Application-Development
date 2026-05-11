<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 30px 20px;
            color: #222;
        }

        .mainWrap {
            width: 900px;
            margin: auto;
            background: #ffffff;
            padding: 25px;
            box-sizing: border-box;
            border: 1px solid #e7e7e7;
            border-radius: 18px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.06);
        }

        .titleBox {
            text-align: center;
            margin-bottom: 22px;
        }

        .titleBox h1 {
            margin: 0;
            font-size: 34px;
            font-weight: bold;
            color: #2b2b2b;
        }

        .titleBox p {
            margin: 8px 0 0 0;
            font-size: 14px;
            color: #777;
        }

        .tableCard {
            background: #fff;
            border: 1px solid #ececec;
            border-radius: 16px;
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            margin: auto;
        }

        td {
            width: 50px;
            height: 40px;
            border: 1px solid #ffffff;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            border-radius: 6px;
        }

        .softPink {
            background-color: #ffeceb;
            color: #d45c4f;
        }

        .softPeach {
            background-color: #fff4ee;
            color: #b85b3f;
        }
    </style>
</head>
<body>

<div class="mainWrap">
    <div class="titleBox">
        <h1>Multiplication Table</h1>
        <p>APPLICATIN DEVELPOMENT SUMMATIEV</p>
    </div>

    <div class="tableCard">
        <table>
        <?php
        for ($row = 0; $row <= 10; $row++) {
            echo "<tr>";

            for ($col = 0; $col <= 10; $col++) {
                $answer = $row * $col;

                if (($row + $col) % 2 == 0) {
                    echo "<td class='softPink'>" . $answer . "</td>";
                } else {
                    echo "<td class='softPeach'>" . $answer . "</td>";
                }
            }

            echo "</tr>";
        }
        ?>
        </table>
    </div>
</div>

</body>
</html>