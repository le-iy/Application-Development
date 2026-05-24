<?php
$result = "";
$error = "";

$value = "";
$from = "meter";
$to = "centimeter";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $value = $_POST["value"] ?? "";
    $from = $_POST["from"] ?? "meter";
    $to = $_POST["to"] ?? "centimeter";

    if ($value === "" || !is_numeric($value)) {
        $error = "Please enter a valid number.";
    } else {
        $value = (float)$value;

        switch ($from) {
            case "millimeter":
                $meters = $value / 1000;
                break;
            case "centimeter":
                $meters = $value / 100;
                break;
            case "meter":
                $meters = $value;
                break;
            case "kilometer":
                $meters = $value * 1000;
                break;
            case "inch":
                $meters = $value * 0.0254;
                break;
            case "foot":
                $meters = $value * 0.3048;
                break;
            case "yard":
                $meters = $value * 0.9144;
                break;
            case "mile":
                $meters = $value * 1609.344;
                break;
            default:
                $meters = $value;
        }

        switch ($to) {
            case "millimeter":
                $converted = $meters * 1000;
                break;
            case "centimeter":
                $converted = $meters * 100;
                break;
            case "meter":
                $converted = $meters;
                break;
            case "kilometer":
                $converted = $meters / 1000;
                break;
            case "inch":
                $converted = $meters / 0.0254;
                break;
            case "foot":
                $converted = $meters / 0.3048;
                break;
            case "yard":
                $converted = $meters / 0.9144;
                break;
            case "mile":
                $converted = $meters / 1609.344;
                break;
            default:
                $converted = $meters;
        }

        $result = number_format($value, 4) . " " . ucfirst($from) . "(s) = " . number_format($converted, 4) . " " . ucfirst($to) . "(s)";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length Conversion Page</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            background: linear-gradient(135deg, #dbeafe, #f0f9ff);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 100%;
            max-width: 500px;
            background: #ffffff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
            color: #1e3a8a;
        }

        p {
            text-align: center;
            color: #475569;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #1f2937;
        }

        input, select, button {
            width: 100%;
            padding: 12px;
            margin-bottom: 16px;
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            font-size: 16px;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #2563eb;
        }

        button {
            background: #2563eb;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #1d4ed8;
        }

        .result {
            margin-top: 15px;
            padding: 14px;
            border-radius: 10px;
            background: #ecfeff;
            color: #0f172a;
            font-weight: bold;
            text-align: center;
        }

        .error {
            margin-top: 15px;
            padding: 14px;
            border-radius: 10px;
            background: #fee2e2;
            color: #991b1b;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Length Converter</h1>
        <p>Convert metric and imperial length units</p>

        <form method="POST">
            <label for="value">Enter Value</label>
            <input type="text" id="value" name="value" value="<?php echo htmlspecialchars($value); ?>" placeholder="e.g. 1">

            <label for="from">From</label>
            <select id="from" name="from">
                <option value="millimeter" <?php if ($from == "millimeter") echo "selected"; ?>>Millimeter</option>
                <option value="centimeter" <?php if ($from == "centimeter") echo "selected"; ?>>Centimeter</option>
                <option value="meter" <?php if ($from == "meter") echo "selected"; ?>>Meter</option>
                <option value="kilometer" <?php if ($from == "kilometer") echo "selected"; ?>>Kilometer</option>
                <option value="inch" <?php if ($from == "inch") echo "selected"; ?>>Inch</option>
                <option value="foot" <?php if ($from == "foot") echo "selected"; ?>>Foot</option>
                <option value="yard" <?php if ($from == "yard") echo "selected"; ?>>Yard</option>
                <option value="mile" <?php if ($from == "mile") echo "selected"; ?>>Mile</option>
            </select>

            <label for="to">To</label>
            <select id="to" name="to">
                <option value="millimeter" <?php if ($to == "millimeter") echo "selected"; ?>>Millimeter</option>
                <option value="centimeter" <?php if ($to == "centimeter") echo "selected"; ?>>Centimeter</option>
                <option value="meter" <?php if ($to == "meter") echo "selected"; ?>>Meter</option>
                <option value="kilometer" <?php if ($to == "kilometer") echo "selected"; ?>>Kilometer</option>
                <option value="inch" <?php if ($to == "inch") echo "selected"; ?>>Inch</option>
                <option value="foot" <?php if ($to == "foot") echo "selected"; ?>>Foot</option>
                <option value="yard" <?php if ($to == "yard") echo "selected"; ?>>Yard</option>
                <option value="mile" <?php if ($to == "mile") echo "selected"; ?>>Mile</option>
            </select>

            <button type="submit">Convert</button>
        </form>

        <?php if ($result != ""): ?>
            <div class="result"><?php echo $result; ?></div>
        <?php endif; ?>

        <?php if ($error != ""): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
    </div>
</body>
</html>