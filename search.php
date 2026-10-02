<?php

// Get search value
$search = "";

if (isset($_GET['search'])) {
    $search = strtolower(trim($_GET['search']));
}


// Rental items
$items = [

    [
        "id" => 1,
        "name" => "Engineering Mathematics",
        "category" => "Books",
        "location" => "Computer Department",
        "price" => 40,
        "image" => "mathsbook.jpg"
    ],

    [
        "id" => 2,
        "name" => "HP Laptop",
        "category" => "Electronics",
        "location" => "IT Department",
        "price" => 250,
        "image" => "hplaptop.jpg"
    ],

    [
        "id" => 3,
        "name" => "Scientific Calculator",
        "category" => "Calculators",
        "location" => "Mechanical Department",
        "price" => 20,
        "image" => "cal.jpg"
    ],

    [
        "id" => 4,
        "name" => "Lamp",
        "category" => "Study Tools",
        "location" => "Hostel Room No. 33",
        "price" => 80,
        "image" => "lamp.jpg"
    ]

];


// Search matching items
$results = [];

foreach ($items as $item) {

    if (
        $search == "" ||
        strpos(strtolower($item["name"]), $search) !== false ||
        strpos(strtolower($item["category"]), $search) !== false ||
        strpos(strtolower($item["location"]), $search) !== false
    ) {

        $results[] = $item;

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Search Results - Campus Rental Hub</title>

    <!-- IMPORTANT -->
    <link rel="stylesheet" href="style.css">

</head>

<body>


<!-- Header -->

<header>

    <div class="logo">

        <img src="logo.png" alt="Campus Rental Hub logo">

        <span>
            Campus Rental Hub
        </span>

    </div>


    <nav>

        <a href="index.php">
            Home
        </a>

        <a href="index.php#categories">
            Categories
        </a>

        <a href="index.php#items">
            Browse Items
        </a>

        <a href="index.php#about">
            About
        </a>

    </nav>


    <div class="login-register">

        <a href="login.php" class="login">
            Login
        </a>

        <a href="register.php" class="register">
            Register
        </a>

    </div>

</header>



<!-- Search -->

<section class="search-page">

    <h1>
        Search Results
    </h1>


    <form action="search.php" method="GET" class="search-box">

        <input
            type="text"
            name="search"
            value="<?php echo htmlspecialchars($search); ?>"
            placeholder="Search items"
        >

        <button type="submit">
            Search
        </button>

    </form>

 <?php if (count($results) > 0): ?>


        <div class="items">


            <?php foreach ($results as $item): ?>

                <div class="item-card">

                    <img
                        src="<?php echo $item["image"]; ?>"
                        alt="<?php echo $item["name"]; ?>"
                    >


                    <h3>
                        <?php echo $item["name"]; ?>
                    </h3>


                    <p>
                        Category:
                        <?php echo $item["category"]; ?>
                    </p>


                    <p>
                        Location:
                        <?php echo $item["location"]; ?>
                    </p>


                    <h4>
                        ₹<?php echo $item["price"]; ?> / day
                    </h4>


                    <a
                        href="details.php?id=<?php echo $item["id"]; ?>"
                        class="details-btn"
                    >
                        View Details
                    </a>

                </div>

            <?php endforeach; ?>


        </div>


    <?php else: ?>

        <div class="no-results">

            <h2>
                No items found
            </h2>

            <p>
                Try searching for another item.
            </p>

            <a href="index.php">
                Back to Home
            </a>

        </div>

    <?php endif; ?>


</section>


<!-- Footer -->

<footer>

    <div class="footer-logo">

        <img src="logo.png" alt="Campus Rental Hub logo">

        <span>
            Campus Rental Hub
        </span>

    </div>


    <p>
         2026 Campus Rental Hub | Built for Students
    </p>

</footer>


</body>

</html>