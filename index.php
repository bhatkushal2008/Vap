<?php
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Rental Hub</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="logo">
        <img src="logo.png" alt="Campus Rental Hub logo">
        <span>Campus Rental Hub</span>
    </div>
  <nav>
    <a href="index.php">Home</a>
    <a href="#categories">Categories</a>
    <a href="#items">Browse Items</a>
    <a href="#about">About</a>
</nav>

    <div class="login-register">
        <a href="login.php" class="login">Login</a>
        <a href="register.php" class="register">Register</a>
    </div>

</header>
<!-- Home Section -->
<section class="hero">

    <div class="hero-image">
        <img src="universityWebsite.jpeg" alt="Students">
    </div>
    <div class="hero-text">
        <div class="tag">Built for College Students</div>
        <h1>
            Rent Smarter.<br>
            <span>Live Better.</span>
        </h1>
        <p>
            Find affordable books, electronics, study
            equipment and more — all within your campus community.
        </p>
    </div>

<form action="search.php" method="GET" class="search-box">

    <input type="text" name="search" placeholder="Search items">

    <button type="submit">Search</button>
</form>

</section>
<section class="categories">
 <div class="category-header">
        <div>
            <p>START WITH A CATEGORY</p>
            <h2>What are you looking for?</h2>
        </div>

        <a href="">See all →</a>
    </div>
    <div class="category-list">

        <div class="category"> Books </div>
        <div class="category"> Calculators</div>
        <div class="category"> Cycles </div>
        <div class="category"> Electronics </div>
        <div class="category"> Furniture </div>
        <div class="category"> Hostel Essentials </div>
        <div class="category"> Lab Equipment </div>
        <div class="category"> Others </div>

    </div>
</section>

<!-- Rental Items -->

<section id="items" class="section">

    <div class="items-header">

        <h2>All items</h2>

        <div class="sort-box">
            <label for="sort">Sort by</label>

            <select id="sort">
                <option>Newest</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
            </select>
        </div>

    </div>


    <div class="items">


        <!-- Item 1 -->

        <div class="item-card">

            <p class="category">Electronics</p>

            <h3>Raspberry Pi 4 (4 GB)</h3>

            <p>Owner: Nisha</p>

            <p>Pickup: Computer Lab</p>

            <div class="price">
                <strong>₹60</strong>
                <span>per day</span>
                <small>Deposit ₹800</small>
            </div>

            <a href="details.php?id=1" class="details-btn">
                Request to rent
            </a>

        </div>


        <!-- Item 2 -->

        <div class="item-card">

            <p class="category">Hostel & daily</p>

            <h3>Iron box</h3>

            <p>Owner: Yash</p>

            <p>Pickup: Hostel C</p>

            <div class="price">
                <strong>₹15</strong>
                <span>per day</span>
                <small>Deposit ₹200</small>
            </div>

            <a href="details.php?id=2" class="details-btn">
                Request to rent
            </a>

        </div>


        <!-- Item 3 -->

        <div class="item-card">

            <p class="category">Sports & events</p>

            <h3>Badminton rackets (pair)</h3>

            <p>Owner: Tanvi</p>

            <p>Pickup: Sports complex</p>

            <p class="requested">
                ✓ Your requested this
            </p>

            <div class="price">
                <strong>₹20</strong>
                <span>per day</span>
                <small>Deposit ₹200</small>
            </div>

            <a href="details.php?id=3" class="details-btn">
                Request to rent
            </a>

        </div>


        <!-- Item 4 -->

        <div class="item-card">

            <p class="category">Electronics</p>

            <h3>Canon 1500D DSLR</h3>

            <p>Owner: Ishan</p>

            <p>Pickup: Media club room</p>

            <div class="price">
                <strong>₹200</strong>
                <span>per day</span>
                <small>Deposit ₹3,000</small>
            </div>

            <a href="details.php?id=4" class="details-btn">
                Request to rent
            </a>

        </div>


        <!-- Item 5 -->

        <div class="item-card">

            <p class="category">Cycles & travel</p>

            <h3>Hero cycle with lock</h3>

            <p>Owner: Rohan</p>

            <p>Pickup: Hostel A parking</p>

            <div class="price">
                <strong>₹30</strong>
                <span>per day</span>
                <small>Deposit ₹500</small>
            </div>

            <a href="details.php?id=5" class="details-btn">
                Request to rent
            </a>

        </div>


        <!-- Item 6 -->

        <div class="item-card">

            <p class="category">Books</p>

            <h3>Engineering Mathematics (Kreyszig)</h3>

            <p>Owner: Meera</p>

            <p>Pickup: Library entrance</p>

            <div class="price">
                <strong>₹8</strong>
                <span>per day</span>
                <small>Deposit ₹150</small>
            </div>

            <a href="details.php?id=6" class="details-btn">
                Request to rent
            </a>

        </div>


        <!-- Item 7 -->

        <div class="item-card">

            <p class="category">Electronics</p>

            <h3>Arduino Uno starter kit</h3>

            <p>Owner: Kabir</p>

            <p>Pickup: Library entrance</p>

            <div class="price">
                <strong>₹40</strong>
                <span>per day</span>
                <small>Deposit ₹500</small>
            </div>

            <a href="details.php?id=7" class="details-btn">
                Request to rent
            </a>

        </div>


        <!-- Item 8 -->

        <div class="item-card">

            <p class="category">Lab & drafting</p>

            <h3>Lab coat (size M)</h3>

            <p>Owner: Sneha</p>

            <p>Pickup: Girls hostel gate</p>

            <div class="price">
                <strong>₹10</strong>
                <span>per day</span>
                <small>Deposit ₹100</small>
            </div>

            <a href="details.php?id=8" class="details-btn">
                Request to rent
            </a>

        </div>


        <!-- Item 9 -->

        <div class="item-card">

            <p class="category">Lab & drafting</p>

            <h3>Drafting board + mini drafter</h3>

            <p>Owner: Riya</p>

            <p>Pickup: Mechanical block canteen</p>

            <div class="price">
                <strong>₹25</strong>
                <span>per day</span>
                <small>Deposit ₹300</small>
            </div>

            <a href="details.php?id=9" class="details-btn">
                Request to rent
            </a>

        </div>


        <!-- Item 10 -->

        <div class="item-card">

            <p class="category">Electronics</p>

            <h3>Casio fx-991EX calculator</h3>

            <p>Owner: Aarav</p>

            <p>Pickup: Hostel B</p>

            <div class="price">
                <strong>₹15</strong>
                <span>per day</span>
                <small>Deposit ₹200</small>
            </div>

            <a href="details.php?id=10" class="details-btn">
                Request to rent
            </a>

        </div>


    </div>

</section>
<!-- How It Works -->

<section class="how-it-works">

    <h2>How It Works</h2>

    <div class="steps">

        <div class="step">
            <h3>1. Find an Item</h3>
            <p>Search for the item you need.</p>
        </div>

        <div class="step">
            <h3>2. Send Request</h3>
            <p>Select the rental duration and contact the owner.</p>
        </div>

        <div class="step">
            <h3>3. Rent the Item</h3>
            <p>Collect the item and use it during your rental period.</p>
        </div>

    </div>

</section>

<div class="search-container">
    <input type="text" id="searchInput" placeholder="Search for items...">
    <button onclick="searchItems()">Search</button>
</div>

<div id="searchResults"></div>


<!-- About -->

<!-- <section id="about" class="about">

    <p>About Campus Rental Hub</p>

    <h2>
        Making Student Life
        <span>Affordable.</span>
    </h2>

    <p class="about-text">
        Campus Rental Hub connects students who need items
        with students who already have them. Share resources,
        reduce expenses and make campus life easier.
    </p>

    <button onclick="startRenting()">Start Renting</button>

</section> -->

<footer>

    <div class="footer-logo">
        <img src="logo.png" alt="Campus Rental Hub logo">
        <span>Campus Rental Hub</span>
    </div>

    <p>2026 Campus Rental Hub | Built for Students</p>

    <div>
        <a href="">Privacy</a>
        <a href="">Terms</a>
        <a href="">Contact</a>
    </div>

</footer>

<script src="script.js"></script>

</body>
</html>