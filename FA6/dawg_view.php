<?php require('backend.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>FA6 - Dog Records</title>
    <link rel="stylesheet" href="fa6.css">
</head>
<body>

<nav class="topbar">
    <div class="nav-container">
        <a class="brand" href="dawg_regis.php">FA6 Dog Information</a>

        <div class="nav-links">
            <a href="dawg_regis.php">REGISTER</a>
            <a href="dawg_view.php">DAWGS' INFO</a>
        </div>
    </div>
</nav>

<div class="page-container">
    <div class="main-card">
        <div class="card-header">
            <h4>Dog Records</h4>
        </div>

        <div class="card-body">
            <?php if (mysqli_num_rows($result) > 0): ?>
                <table class="dog-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Breed</th>
                            <th>Age</th>
                            <th>Address</th>
                            <th>Color</th>
                            <th>Height</th>
                            <th>Weight</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $counter = 1;

                        while ($row = mysqli_fetch_assoc($result)):
                        ?>
                            <tr>
                                <td><?php echo $counter++; ?></td>
                                <td><?php echo htmlspecialchars($row['dawg_name']); ?></td>
                                <td><?php echo htmlspecialchars($row['dawg_breed']); ?></td>
                                <td><?php echo htmlspecialchars($row['dawg_age']); ?> years old</td>
                                <td><?php echo htmlspecialchars($row['dawg_address']); ?></td>
                                <td><?php echo htmlspecialchars($row['dawg_color']); ?></td>
                                <td><?php echo htmlspecialchars($row['dawg_height']); ?> feet</td>
                                <td><?php echo htmlspecialchars($row['dawg_weight']); ?> kilos</td>
                            </tr>
                            
                        <?php endwhile; ?>
                    </tbody>
                </table>

            <?php else: ?>
                <p class="empty-text">No dog records found.</p>
            <?php endif; ?>

            <a href="dawg_regis.php" class="button secondary-btn">Add Dog Information</a>
        </div>
    </div>
</div>

<?php
mysqli_close($conn);
?>

</body>
</html>