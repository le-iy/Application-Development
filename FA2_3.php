<?php
    $combinations = "";

    for ($i = 0; $i <= 99; $i++) {
        if ($i < 10) {
            $combinations .= "0" . $i . ", ";
        } else {
            $combinations .= $i . ", ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-Digit Decimal Combinations</title>
    <style>
        body {
            margin: 0;
            padding: 30px;
            font-family: Arial, sans-serif;
            background: #eef2f7;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 25px;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.10);
        }

        h1 {
            margin-top: 0;
            text-align: center;
            color: #1e3a8a;
        }

        .output-box {
            margin-top: 20px;
            padding: 18px;
            border: 1px solid #94a3b8;
            background: #f8fafc;
            font-size: 20px;
            line-height: 1.8;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Two-Digit Decimal Combinations</h1>
        <div class="output-box">
            <?php echo $combinations; ?>
        </div>
    </div>
</body>
</html>