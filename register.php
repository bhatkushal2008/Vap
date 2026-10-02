<?php

include "db.php";

$message = "";

if (isset($_POST["register"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check if email already exists
    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

    if (mysqli_num_rows($check) > 0) {

        $message = "Email already registered.";

    } else {

        // Hash password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user
        $sql = "INSERT INTO users (name, email, password)
                VALUES ('$name', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {

            header("Location: login.php");
            exit();

        } else {

            $message = "Registration failed.";
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Registration Page</title>

    <link rel="stylesheet" href="register.css">

</head>

<body>

    <div class="register-box">

        <h1>Registration Page</h1>

        <?php

        if ($message != "") {
            echo "<p class='message'>$message</p>";
        }

        ?>

        <form method="POST">

            <label>Name</label>

            <input
                type="text"
                name="name"
                placeholder="Enter your name"
                required
            >

            <br>

            <label>Email</label>

            <input
                type="email"
                name="email"
                placeholder="Enter your email"
                required
            >

            <br>

            <label>Password</label>

            <input
                type="password"
                name="password"
                placeholder="Enter your password"
                required
            >

            <br>

            <button type="submit" name="register">
                Register
            </button>

        </form>

        <p>
            Already have an account?
            <a href="login.php">Login</a>
        </p>

    </div>

</body>

</html>