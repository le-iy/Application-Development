<html>
<head>
    <title>Formative 3 - Num2</title>
    <link rel="stylesheet" href="FA3_css.css">
</head>

<body>

<?php
    $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    $add = 1;
    $sub = 1;
    $times = 1;
    $div = $numbers[0];

    foreach ($numbers as $number) {
        $add = $add + $number;
        $sub = $sub - $number;
        $times = $times * $number;
    }

    for ($i = 1; $i < count($numbers); $i++) {
        $div = $div / $numbers[$i];
    }
?>

<table>
    <tr>
        <th colspan="2" style="font-size: 18px;">
            Array list:
            <?php
                foreach ($numbers as $number) {
                    echo $number . " ";
                }
            ?>
        </th>
    </tr>

    <tr>
        <td>Addition</td>
        <td><?php echo $add; ?></td>
    </tr>

    <tr>
        <td>Subtraction</td>
        <td><?php echo $sub; ?></td>
    </tr>

    <tr>
        <td>Multiplication</td>
        <td><?php echo $times; ?></td>
    </tr>

    <tr>
        <td>Division</td>
        <td><?php echo $div; ?></td>
    </tr>
</table>

</body>
</html>