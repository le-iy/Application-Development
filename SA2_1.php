<html>
<head>
    <title>SA2 Fruit Directory</title>
    <link rel="stylesheet" href="SA2_css.css">
</head>

<body>

<table>
    <tr>
        <th colspan="4" class="table-title">My Fruits</th>
    </tr>

    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Facts</th>
    </tr>

    <?php
        $fruits = array(
            array(
                "image" => "image_bank/Fruits/bwapple.jpg",
                "name" => "Apple",
                "description" => "Color Red",
                "facts" => "Apples are crunchy fruits that are often eaten fresh or used in desserts."
            ),

            array(
                "image" => "image_bank/Fruits/avocacacaca.jpg",
                "name" => "Avocado",
                "description" => "Color Green",
                "facts" => "Avocados are creamy fruits that are rich in healthy fats."
            ),

            array(
                "image" => "image_bank/Fruits/banana.jpg",
                "name" => "Banana",
                "description" => "Color Yellow",
                "facts" => "Bananas are a good source of potassium and are commonly eaten as a snack."
            ),

            array(
                "image" => "image_bank/Fruits/bluebeb.jpg",
                "name" => "Blueberry",
                "description" => "Color Blue",
                "facts" => "Blueberries are small fruits known for having antioxidants."
            ),

            array(
                "image" => "image_bank/Fruits/garp.jpg",
                "name" => "Grape",
                "description" => "Color Purple",
                "facts" => "Grapes grow in bunches and can be eaten fresh or made into juice."
            ),

            array(
                "image" => "image_bank/Fruits/mnago.jpg",
                "name" => "Mango",
                "description" => "Color Yellow",
                "facts" => "Mangoes are tropical fruits with sweet and juicy flesh."
            ),

            array(
                "image" => "image_bank/Fruits/isorangeanorangebecauseitisorange.jpg",
                "name" => "Orange",
                "description" => "Color Orange",
                "facts" => "Oranges are citrus fruits that are rich in vitamin C."
            ),

            array(
                "image" => "image_bank/Fruits/penple.jpg",
                "name" => "Pineapple",
                "description" => "Color Yellow",
                "facts" => "Pineapples have rough outer skin and sweet, juicy flesh inside."
            ),

            array(
                "image" => "image_bank/Fruits/tomato.jpg",
                "name" => "Tomato",
                "description" => "Color Red",
                "facts" => "Tomatoes are fruits that are commonly used in many dishes."
            ),

            array(
                "image" => "image_bank/Fruits/watermelown.jpg",
                "name" => "Watermelon",
                "description" => "Color Green",
                "facts" => "Watermelons contain a lot of water and are refreshing to eat."
            )
        );

        foreach ($fruits as $fruit) {
            echo "<tr>";
            echo "<td><img src='" . $fruit["image"] . "' alt='" . $fruit["name"] . "'></td>";
            echo "<td>" . $fruit["name"] . "</td>";
            echo "<td>" . $fruit["description"] . "</td>";
            echo "<td>" . $fruit["facts"] . "</td>";
            echo "</tr>";
        }
    ?>

</table>

</body>
</html>