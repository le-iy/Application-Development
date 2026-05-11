<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
        }

        td {
            width: 45px;
            height: 45px;
            border: 1px solid gray;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
        }

        .yellow {
            background-color: yellow;
        }

        .red {
            background-color: red;
        }
    </style>
</head>
<body>

<h1>Multiplication Table</h1>

<table>
<?php
for ($row = 0; $row <= 10; $row++) {
    echo "<tr>";

    for ($col = 0; $col <= 10; $col++) {
        $answer = $row * $col;

        if (($row + $col) % 2 == 0) {
            echo "<td class='yellow'>" . $answer . "</td>";
        } else {
            echo "<td class='red'>" . $answer . "</td>";
        }
    }

    echo "</tr>";
}
?>
</table>

</body>
</html>