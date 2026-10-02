<?php

session_start();

include "db.php";

$message = "";

if (isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email='$email'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user["password"])) {

            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_name"] = $user["name"];

            header("Location: index.php");
            exit();

        } else {

            $message = "Incorrect password.";
        }

    } else {

        $message = "Email not registered.";
    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Login - Campus Rental Hub</title>

    <link rel="stylesheet" href="login.css">

</head>

<body>

  <div class="login-box">

        <h2>Login</h2>

        <p><?php echo $message; ?></p>

        <form method="POST">

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Password</label>
            <input type="password" name="password" required>

            <button type="submit" name="login">
                Login
            </button>

        </form>

        <p>
            Don't have an account?
            <a href="register.php">Register</a>
        </p>

    </div>

</body>

</html>
