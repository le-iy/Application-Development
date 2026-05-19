<html>
<head>
    <title>Formative 3 - Num1</title>
    <link rel="stylesheet" href="FA3_css.css">
</head>

<body>

<div class="header">
    <img class="logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJBRHwBxHZKaRPJJGo9mqlXNm_eqkxWtvBTQ&s">
    <h1>Random University's Student List</h1>
</div>

    <?php
        $students = array(
            array(
                "name" => "Carla Santos",
                "imgs" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRT3iENtepglTroB3XrI3bb01ykolusxmbcwQ&s",
                "age" => 21,
                "bday" => "March 12, 2005",
                "cntc" => "09123456789"
            ),
            array(
                "name" => "Anna Reyes",
                "imgs" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8lTpAD7f96W7zI5BhEdFomIuGLlVJrgmEgA&s",
                "age" => 22,
                "bday" => "January 5, 2004",
                "cntc" => "09234567890"
            ),
            array(
                "name" => "Daniel Cruz",
                "imgs" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsJJeoSqJoJNGPEWD1EfQkw9lLEPtiHrqWmA&s",
                "age" => 23,
                "bday" => "April 20, 2003",
                "cntc" => "09345678901"
            ),
            array(
                "name" => "Ben Garcia",
                "imgs" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAG20RToPppQUxTPRE4RJ8wOaHrThvZuwGqQ&s",
                "age" => 21,
                "bday" => "July 9, 2005",
                "cntc" => "09456789012"
            ),
            array(
                "name" => "Ella Mendoza",
                "imgs" => "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQ5DjPjIXFZHrLqv7Lto-1G9esbHVdpQmbRrw_o-Rlmsus_rkOJ",
                "age" => 22,
                "bday" => "August 14, 2004",
                "cntc" => "09567890123"
            ),
            array(
                "name" => "Francis Lopez",
                "imgs" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUrCvt2_e8Agh9rXqGPOPVGmefUNI6GdfrLw&s",
                "age" => 23,
                "bday" => "September 22, 2003",
                "cntc" => "09678901234"
            ),
            array(
                "name" => "Grace Torres",
                "imgs" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRS9vlnL6O_2UvliHlSU7dm3kwYFnieRDw-2g&s",
                "age" => 21,
                "bday" => "February 11, 2005",
                "cntc" => "09789012345"
            ),
            array(
                "name" => "Hannah Flores",
                "imgs" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQE7X0Ca0FiJEHL83XYxEW9Mk4x51u-pGlSzA&s",
                "age" => 22,
                "bday" => "December 3, 2004",
                "cntc" => "09890123456"
            ),
            array(
                "name" => "Ivan Ramos",
                "imgs" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUDOa2VUVAEFUsRQIA7xTCR2xnirP7i3YiNg&s",
                "age" => 23,
                "bday" => "October 18, 2003",
                "cntc" => "09901234567"
            ),
            array(
                "name" => "Julia Navarro",
                "imgs" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSL2fK-K-JewwXdBjuMalAbWNMUtWOp8PfuvA&s",
                "age" => 21,
                "bday" => "November 25, 2005",
                "cntc" => "09012345678"
            )
        );

        ksort($students);
    ?>

    <table>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Image</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Contact Number</th>
        </tr>

        <?php $number = 1; foreach ($students as $student): ?>
        <tr>
            <td><?php echo $number; ?></td>
            <td><?php echo $student['name']; ?></td>
            <td>
                <img class="student-img" src="<?php echo $student['imgs']; ?>">
            </td>
            <td><?php echo $student['age']; ?></td>
            <td><?php echo $student['bday']; ?></td>
            <td><?php echo $student['cntc']; ?></td>
        </tr>
        <?php $number++; ?>
        <?php endforeach; ?>
    
    </table>

</body>
</html>