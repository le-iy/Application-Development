<!DOCTYPE html>
<html>
<head>
    <title>SA2 Number 2</title>
    <link rel="stylesheet" href="SA2_css.css">
</head>

<body>

<?php
    function cbe($side) {
        return $side * $side * $side;
    }

    function rectPrism($length, $width, $height) {
        return $length * $width * $height;
    }

    function cylinder($radius, $height) {
        return 3.14 * $radius * $radius * $height;
    }

    function cone($radius, $height) {
        return (3.14 * $radius * $radius * $height) / 3;
    }

    function sphere($radius) {
        return (4 * 3.14 * $radius * $radius * $radius) / 3;
    }
?>

<table>
    <tr>
        <th colspan="3" class="table-title">Volume of Shapes</th>
    </tr>

    <tr>
        <th>Values</th>
        <th>Formula</th>
        <th>Answer</th>
    </tr>

    <tr>
        <td>s = 5</td>
        <td>V = s³</td>
        <td><?php echo cbe(5); ?></td>
    </tr>

    <tr>
        <td>l = 6, w = 4, h = 3</td>
        <td>V = l × w × h</td>
        <td><?php echo rectPrism(6, 4, 3); ?></td>
    </tr>

    <tr>
        <td>r = 3, h = 7</td>
        <td>V = πr²h</td>
        <td><?php echo cylinder(3, 7); ?></td>
    </tr>

    <tr>
        <td>r = 4, h = 9</td>
        <td>V = πr²h / 3</td>
        <td><?php echo cone(4, 9); ?></td>
    </tr>

    <tr>
        <td>r = 6</td>
        <td>V = 4πr³ / 3</td>
        <td><?php echo sphere(6); ?></td>
    </tr>
</table>

</body>
</html>