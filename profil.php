<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Profile - CampusRental</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        /* Navigation Bar */

        header {
            background-color: white;
            padding: 15px 40px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            border-bottom: 1px solid #ddd;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-circle {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background-color: #2563eb;
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 20px;
            font-weight: bold;
        }

        .logo h2 {
            color: #2563eb;
        }

        nav a {
            text-decoration: none;
            color: #333;
            margin: 0 10px;
        }

        nav a:hover {
            color: #2563eb;
        }

        .profile-icon {
            font-size: 28px;
            color: #2563eb;
        }


        /* Profile Section */

        .profile-container {
            min-height: calc(100vh - 76px);

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 40px;
        }

        .profile-box {
            width: 500px;
            background-color: white;

            padding: 40px;

            border-radius: 15px;

            box-shadow: 0 2px 10px #ccc;

            text-align: center;
        }

        .profile-circle {
            width: 90px;
            height: 90px;

            margin: 0 auto 20px;

            border-radius: 50%;

            background-color: #eaf2ff;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 45px;
            color: #2563eb;
        }

        .profile-box h1 {
            margin-bottom: 10px;
            color: #14233a;
        }

        .profile-box p {
            color: #666;
            margin-bottom: 25px;
        }


        /* Profile Options */

        .profile-options {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .profile-options a {
            text-decoration: none;

            padding: 14px;

            background-color: #f5f5f5;

            color: #333;

            border-radius: 8px;

            text-align: left;
        }

        .profile-options a:hover {
            background-color: #eaf2ff;
            color: #2563eb;
        }

        .logout {
            background-color: #2563eb !important;
            color: white !important;
            text-align: center !important;
        }
    </style>

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

    <!-- Navigation Bar -->

    <header>

        <div class="logo">

            <div class="logo-circle">
                C
            </div>

            <h2>CampusRental</h2>

        </div>


        <nav>

            <a href="index.html">Browse</a>

            <a href="#">My rentals</a>

        </nav>


        <div class="profile-icon">

            <i class="fa-solid fa-circle-user"></i>

        </div>

    </header>


    <!-- Profile Section -->

    <div class="profile-container">

        <div class="profile-box">

            <div class="profile-circle">

                <i class="fa-solid fa-user"></i>

            </div>


            <h1>My Profile</h1>

            <p>Manage your CampusRental account</p>


            <div class="profile-options">

                <a href="#">
                    <i class="fa-solid fa-user"></i>
                    &nbsp; Personal Information
                </a>

                <a href="#">
                    <i class="fa-solid fa-box"></i>
                    &nbsp; My Rentals
                </a>
        
                <a href="#">
                    <i class="fa-solid fa-list"></i>
                    &nbsp; My Listings
                </a>

                <a href="#">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    &nbsp; Logout
                </a>

            </div>

        </div>

    </div>

</body>

</html>