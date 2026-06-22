<?php require('backend.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>FA6 - Dog Register</title>
    <link rel="stylesheet" href="fa6.css">
</head>
<body>

<nav class="topbar">
    <div class="nav-container">
        <a class="brand" href="register.php">FA6 Dog Information</a>

        <div class="nav-links">
            <a href="dawg_regis.php">REGISTER</a>
            <a href="dawg_view.php">DAWGS' INFO</a>
        </div>
    </div>
</nav>

<div class="page-container">
    <div class="register-box">
        <div class="main-card">
            <div class="card-header">
                <h4>Dog Information</h4>
            </div>

            <div class="card-body">
                <?php if ($message): ?>
                    <div class="message-box <?php echo $type; ?>">
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>

                <form action="dawg_regis.php" method="post">
                    <div class="form-group">
                        <label for="dawg_name">Name</label>
                        <input type="text" name="dawg_name" id="dawg_name">
                    </div>

                    <div class="form-group">
                        <label for="dawg_breed">Breed</label>
                        <select name="dawg_breed" id="dawg_breed">
                            <option value="">-- Select Breed --</option>
                            <option value="Chow Chow">Chow Chow</option>
                            <option value="Pug">Pug</option>
                            <option value="Siberian Husky">Siberian Husky</option>
                            <option value="Golden Retriever">Golden Retriever</option>
                            <option value="Shih Tzu">Shih Tzu</option>
                            <option value="Aspín">Aspín</option>
                            <option value="Askal">Askal</option>
                            <option value="Beagle">Beagle</option>
                            <option value="Bulldog">Bulldog</option>
                            <option value="Dalmatian">Dalmatian</option>
                            <option value="German Shepherd">German Shepherd</option>
                            <option value="Labrador Retriever">Labrador Retriever</option>
                            <option value="Poodle">Poodle</option>
                            <option value="Rottweiler">Rottweiler</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="dawg_age">Age</label>
                        <div class="input-with-unit">
                            <input type="text" name="dawg_age" id="dawg_age">
                            <span>years old</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="dawg_address">Address</label>
                        <input type="text" name="dawg_address" id="dawg_address">
                    </div>

                    <div class="form-group">
                        <label for="dawg_color">Color</label>
                        <select name="dawg_color" id="dawg_color">
                            <option value="">-- Select Color --</option>
                            <option value="Brown">Brown</option>
                            <option value="White">White</option>
                            <option value="Black">Black</option>
                            <option value="Golden">Golden</option>
                            <option value="Gray">Gray</option>
                            <option value="Cream">Cream</option>
                            <option value="Mixed">Mixed</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="dawg_height">Height</label>
                        <div class="input-with-unit">
                            <input type="text" name="dawg_height" id="dawg_height">
                            <span>feet</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="dawg_weight">Weight</label>
                        <div class="input-with-unit">
                            <input type="text" name="dawg_weight" id="dawg_weight">
                            <span>kilos</span>
                        </div>
                    </div>

                    <div class="button-group">
                        <button type="submit" class="button primary-btn">Save</button>
                        <a href="dawg_view.php" class="button secondary-btn">View Dog Records</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
mysqli_close($conn);
?>

</body>
</html>