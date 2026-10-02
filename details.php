<?php

$id = $_GET['id'] ?? 1;

$items = [

    1 => [
        "name" => "Engineering Mathematics",
        "category" => "Books",
        "location" => "Computer Department",
        "price" => 40,
        "image" => "mathsbook.jpg",
        "description" => "Engineering Mathematics textbook useful for engineering students for study and exam preparation."
    ],

    2 => [
        "name" => "HP Laptop",
        "category" => "Electronics",
        "location" => "IT Department",
        "price" => 250,
        "image" => "hplaptop.jpg",
        "description" => "HP Laptop suitable for programming, assignments, projects, online classes and other college work."
    ],

    3 => [
        "name" => "Scientific Calculator",
        "category" => "Study Tools",
        "location" => "Mechanical Department",
        "price" => 20,
        "image" => "cal.jpg",
        "description" => "Scientific calculator useful for engineering mathematics, physics and other technical calculations."
    ],

      4 => [
        "name" => "Lamp",
        "category" => "Study Tools",
        "location" => "Hostel room no.33",
        "price" => 80,
        "image" => "lamp.jpg",
        "description" => "A useful and affordable study lamp that provides bright, focused lighting for studying and reading."
    ]

];

if (!isset($items[$id])) {
    $id = 1;
}

$item = $items[$id];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo $item["name"]; ?> - Campus Rental Hub
    </title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<header>

    <div class="logo">

        <img src="logo.png" alt="Campus Rental Hub Logo">

        <span>Campus Rental Hub</span>

    </div>
<nav>

        <a href="index.php">Home</a>

        <a href="index.php#categories">Categories</a>

        <a href="index.php#items">Browse Items</a>

        <a href="index.php#about">About</a>

    </nav>


    <div class="login-register">

        <a href="login.php" class="login">Login</a>

        <a href="register.php" class="register">Register</a>

    </div>

</header>


<section class="details-page">

    <div class="details-image">

        <img
            src="<?php echo $item["image"]; ?>"
            alt="<?php echo $item["name"]; ?>"
        >

    </div>


    <div class="details-info">

        <h1>
            <?php echo $item["name"]; ?>
        </h1>


        <p>
            <strong>Category:</strong>
            <?php echo $item["category"]; ?>
        </p>


        <p>
            <strong>Location:</strong>
            <?php echo $item["location"]; ?>
        </p>


        <p>
            <strong>Rent:</strong>

            <span class="details-price">
                ₹<?php echo $item["price"]; ?> / day
            </span>

        </p>


        <p>
            <strong>Description:</strong>
        </p>

        <p>
            <?php echo $item["description"]; ?>
        </p>


        <p>
            <strong>Availability:</strong>

            <span class="available">
                Available
            </span>

        </p>


        <button class="request-btn">
            Send Rental Request
        </button>


        <br><br>


        <a href="index.php#items" class="back-btn">
            ← Back to Items
        </a>

    </div>

</section>


<footer>

    <div class="footer-logo">

        <img src="logo.png" alt="Campus Rental Hub Logo">

        <span>Campus Rental Hub</span>

    </div>

    <p>
        2026 Campus Rental Hub | Built for Students
    </p>

</footer>


</body>

</html>


shreyaa
