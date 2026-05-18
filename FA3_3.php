<html>
<head>
    <title>Formative 3- num3</title>
    <link rel="stylesheet" href="FA3_css.css">
</head>

<body>
<?php
    function sum($num1, $num2, $num3) {
        return $num1 + $num2 + $num3;
    }
    function diff($num1, $num2, $num3) {
        return $num1 - $num2 - $num3;
    }
    function product($num1, $num2, $num3) {
        return $num1 * $num2 * $num3;
    }
    function divide($num1, $num2, $num3) {
        return $num1 / $num2 / $num3;
    }

    $par1 = 25;
    $par2 = 13;
    $par3 = 6;

    $sum = sum($par1, $par2, $par3);
    $difference = diff($par1, $par2, $par3);
    $product = product($par1, $par2, $par3);
    $quotient = divide($par1, $par2, $par3);
?>

<table>
    <tr>
        <th colspan="2" style="font-size: 18px;">
            My Parameter values:
            <?php echo $par1 . ", " . $par2 . ", " . $par3; ?>
        </th>
    </tr>
    <tr>
        <td>Addition</td>
        <td><?php echo $sum; ?></td>
    </tr>
    <tr>
        <td>Subtraction</td>
        <td><?php echo $difference; ?></td>
    </tr>
    <tr>
        <td>Multiplication</td>
        <td><?php echo $product; ?></td>
    </tr>
    <tr>
        <td>Division</td>
        <td><?php echo $quotient; ?></td>
    </tr>
</table>
</body>

</html>