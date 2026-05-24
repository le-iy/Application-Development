<?php
$metric = [
    ["1 centimetre", "10 millimetres", "1 cm", "10 mm"],
    ["1 decimetre", "10 centimetres", "1 dm", "10 cm"],
    ["1 metre", "100 centimetres", "1 m", "100 cm"],
    ["1 kilometre", "1000 metres", "1 km", "1000 m"]
];

$imperial = [
    ["1 foot", "12 inches", "1 ft", "12 in"],
    ["1 yard", "3 feet", "1 yd", "3 ft"],
    ["1 chain", "22 yards", "1 ch", "22 yd"],
    ["1 furlong", "220 yards (or 10 chains)", "1 fur", "220 yd (or 10 ch)"],
    ["1 mile", "1760 yards (or 8 furlongs)", "1 mi", "1760 yd (or 8 fur)"]
];

$metricToImperial = [
    ["1 millimetre", 1 / 25.4, "inches", "1 mm", "in"],
    ["1 centimetre", 1 / 2.54, "inches", "1 cm", "in"],
    ["1 metre", 39.37008, "inches", "1 m", "in"],
    ["1 metre", 3.28084, "feet", "1 m", "ft"],
    ["1 metre", 1.09361, "yards", "1 m", "yd"],
    ["1 kilometre", 1093.6133, "yards", "1 km", "yd"],
    ["1 kilometre", 0.62137, "miles", "1 km", "mi"]
];

$imperialToMetric = [
    ["1 inch", 2.54, "centimetres", "1 in", "cm"],
    ["1 foot", 30.48, "centimetres", "1 ft", "cm"],
    ["1 yard", 91.44, "centimetres", "1 yd", "cm"],
    ["1 yard", 0.9144, "metres", "1 yd", "m"],
    ["1 mile", 1609.344, "metres", "1 mi", "m"],
    ["1 mile", 1.609344, "kilometres", "1 mi", "km"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Measure Conversion Chart - Lengths (UK)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f6f6f6;
            margin: 0;
            padding: 30px;
        }

        .sheet {
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border: 2px solid #333;
        }

        h1 {
            text-align: center;
            color: #4a6785;
            font-size: 32px;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }

        th, td {
            border: 1px solid #888;
            padding: 10px;
            text-align: center;
        }

        th.section {
            background: #ffe600;
            color: #000;
            font-size: 20px;
        }

        td {
            background: #fafafa;
        }
    </style>
</head>
<body>
    <div class="sheet">
        <h1>MEASURE CONVERSION CHART - LENGTHS (UK)</h1>

        <table>
            <tr><th colspan="4" class="section">METRIC CONVERSIONS</th></tr>
            <?php foreach ($metric as $row): ?>
                <tr>
                    <td><?= $row[0] ?></td>
                    <td>= <?= $row[1] ?></td>
                    <td><?= $row[2] ?></td>
                    <td>= <?= $row[3] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <table>
            <tr><th colspan="4" class="section">IMPERIAL CONVERSIONS</th></tr>
            <?php foreach ($imperial as $row): ?>
                <tr>
                    <td><?= $row[0] ?></td>
                    <td>= <?= $row[1] ?></td>
                    <td><?= $row[2] ?></td>
                    <td>= <?= $row[3] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <table>
            <tr><th colspan="4" class="section">METRIC -> IMPERIAL CONVERSIONS</th></tr>
            <?php foreach ($metricToImperial as $row): ?>
                <tr>
                    <td><?= $row[0] ?></td>
                    <td>= <?= $row[1] ?></td>
                    <td><?= $row[2] ?></td>
                    <td>= <?= $row[3] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <table>
            <tr><th colspan="4" class="section">IMPERIAL -> METRIC CONVERSIONS</th></tr>
            <?php foreach ($imperialToMetric as $row): ?>
                <tr>
                    <td><?= $row[0] ?></td>
                    <td>= <?= $row[1] ?></td>
                    <td><?= $row[2] ?></td>
                    <td>= <?= $row[3] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>