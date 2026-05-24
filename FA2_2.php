<?php
$name = "";
$grade = "";
$rank = "";
$rankClass = "";
$error = "";
$gradeDisplay = "";

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $grade = $_POST["grade"];

    if ($name == "" || $grade == "") {
        $error = "Please enter your name and grade.";
    } elseif (!is_numeric($grade)) {
        $error = "Grade must be a number.";
    } else {
        $gradeNum = (float)$grade;

        if ($gradeNum < 0 || $gradeNum > 100) {
            $error = "Grade must be between 0 and 100.";
        } else {
            if ($gradeNum >= 93) {
                $rank = "A";
            } elseif ($gradeNum >= 90) {
                $rank = "A-";
            } elseif ($gradeNum >= 87) {
                $rank = "B+";
            } elseif ($gradeNum >= 83) {
                $rank = "B";
            } elseif ($gradeNum >= 80) {
                $rank = "B-";
            } elseif ($gradeNum >= 77) {
                $rank = "C+";
            } elseif ($gradeNum >= 73) {
                $rank = "C";
            } elseif ($gradeNum >= 70) {
                $rank = "C-";
            } elseif ($gradeNum >= 67) {
                $rank = "D+";
            } elseif ($gradeNum >= 63) {
                $rank = "D";
            } elseif ($gradeNum >= 60) {
                $rank = "D-";
            } else {
                $rank = "F";
            }

            if ($rank == "A") {
                $rankClass = "rank-a";
            } elseif ($rank == "A-") {
                $rankClass = "rank-a-minus";
            } elseif ($rank == "B+") {
                $rankClass = "rank-b-plus";
            } elseif ($rank == "B") {
                $rankClass = "rank-b";
            } elseif ($rank == "B-") {
                $rankClass = "rank-b-minus";
            } elseif ($rank == "C+") {
                $rankClass = "rank-c-plus";
            } elseif ($rank == "C") {
                $rankClass = "rank-c";
            } elseif ($rank == "C-") {
                $rankClass = "rank-c-minus";
            } elseif ($rank == "D+") {
                $rankClass = "rank-d-plus";
            } elseif ($rank == "D") {
                $rankClass = "rank-d";
            } elseif ($rank == "D-") {
                $rankClass = "rank-d-minus";
            } else {
                $rankClass = "rank-f";
            }

            $gradeDisplay = $gradeNum;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Ranking Program</title>
    <style>
        body {
            margin: 0;
            padding: 30px;
            background: #eef2f7;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 780px;
            margin: 0 auto;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 28px;
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.10);
        }

        h1 {
            margin: 0 0 25px 0;
            text-align: center;
            color: #1e3a8a;
            font-size: 26px;
        }

        .form-box {
            margin-bottom: 28px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #111827;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #94a3b8;
            font-size: 15px;
            box-sizing: border-box;
            border-radius: 0;
            background: #fff;
        }

        button {
            width: 100%;
            padding: 12px;
            border: 1px solid #94a3b8;
            background: #000000;
            color: #ffffff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 0;
        }

        button:hover {
            background: #bfcbdb;
            color: #000000;
        }

        .result-layout {
            width: 620px;
            margin: 20px auto 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto 155px;
            gap: 18px;
            font-family: "Times New Roman", serif;
        }

        .name-box,
        .rank-box,
        .grade-box {
            border: 1px solid #000000;
            background: #ffffff;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .name-box {
            grid-column: 1 / 3;
            grid-row: 1;
            min-height: 50px;
            padding: 10px 18px;
            justify-content: flex-start;
            font-size: 18px;
        }

        .rank-box {
            grid-column: 1;
            grid-row: 2;
            flex-direction: column;
            gap: 12px;
            min-height: 155px;
        }

        .grade-box {
            grid-column: 2;
            grid-row: 2;
            flex-direction: column;
            gap: 12px;
            min-height: 155px;
        }

        .box-label {
            font-size: 20px;
        }

        .box-value {
            font-size: 25px;
            font-weight: bold;
        }

        .strong {
            font-weight: bold;
        }

        .error {
            margin-top: 20px;
            padding: 12px;
            border: 1px solid #fca5a5;
            background: #fee2e2;
            color: #991b1b;
            text-align: center;
            font-weight: bold;
        }

        .rank-a {
            background: #15803d;
            color: #ffffff;
        }

        .rank-a-minus {
            background: #16a34a;
            color: #ffffff;
        }

        .rank-b-plus {
            background: #65a30d;
            color: #ffffff;
        }

        .rank-b {
            background: #84cc16;
            color: #ffffff;
        }

        .rank-b-minus {
            background: #bef264;
            color: #1f2937;
        }

        .rank-c-plus {
            background: #facc15;
            color: #1f2937;
        }

        .rank-c {
            background: #f59e0b;
            color: #ffffff;
        }

        .rank-c-minus {
            background: #fb923c;
            color: #ffffff;
        }

        .rank-d-plus {
            background: #f97316;
            color: #ffffff;
        }

        .rank-d {
            background: #ea580c;
            color: #ffffff;
        }

        .rank-d-minus {
            background: #dc2626;
            color: #ffffff;
        }

        .rank-f {
            background: #991b1b;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Grade Rank Systems</h1>

        <div class="form-box">
            <form method="POST">
                <label for="name">Student Name</label>
                <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">

                <label for="grade">Grade</label>
                <input type="text" id="grade" name="grade" value="<?php echo htmlspecialchars($grade); ?>">

                <button type="submit" name="submit">Check Rank</button>
            </form>
        </div>

        <?php if ($rank != ""): ?>
            <div class="result-layout">
                <div class="name-box">
                    <span><span class="strong">Name:</span> <?php echo htmlspecialchars($name); ?></span>
                </div>

                <div class="rank-box <?php echo $rankClass; ?>">
                    <div class="box-label">Rank:</div>
                    <div class="box-value"><?php echo $rank; ?></div>
                </div>

                <div class="grade-box">
                    <div class="box-label">Grade:</div>
                    <div class="box-value"><?php echo $gradeDisplay; ?></div>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($error != ""): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
    </div>
</body>
</html>