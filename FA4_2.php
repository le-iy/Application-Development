<html>
<head>
    <title>FA4 Num 2</title>
    <link rel="stylesheet" href="FA4_css.css">
</head>

<body>

<header>
    <h1>STRING FUNCTIONS</h1>
</header>

<table>
    <tr>
        <th colspan="6" class="table-title">List of Names</th>
    </tr>

    <tr>
        <th>Name</th>
        <th>Number of Characters</th>
        <th>Uppercase First Character</th>
        <th>Replace Vowels with @</th>
        <th>Check Position of Character "a"</th>
        <th>Reversed Name</th>
    </tr>

    <?php
        $names = array(
            "yanfei", "venti", "xiao", "hu tao", "klee",
            "barbara", "jean", "kaeya", "lisa", "amber",
            "diluc", "mona", "sucrose", "albedo", "ganyu",
            "zhongli", "childe", "ningguang", "keqing", "qiqi"
        );

        foreach ($names as $name) {
            $position = strpos($name, "a");

            if ($position === false) {
                $position = "🚫";
            }

            echo "<tr>";
            echo "<td>$name</td>";
            echo "<td>" . strlen($name) . "</td>";
            echo "<td>" . ucfirst($name) . "</td>";
            echo "<td>" . str_replace(array("a", "e", "i", "o", "u"), "@", $name) . "</td>";
            echo "<td>$position</td>";
            echo "<td>" . strrev($name) . "</td>";
            echo "</tr>";
        }
    ?>

</table>

</body>
</html>