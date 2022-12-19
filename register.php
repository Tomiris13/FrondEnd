<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="register.css" rel="stylesheet" />
    <title>Registration</title>
</head>
<body>
    <form action="signup.php" method="post">
        <label>Username</label>
        <input type="text" name='username' placeholder="enter your username">
        <label>First name</label>
        <input type="text" name='first_name' placeholder="enter your first name">
        <label>Last name</label>    
        <input type="text" name='last_name' placeholder="enter your last name">
        <label>Password</label>
        <input type="password" name='password' placeholder="enter your password">
        <label>Password confirmation</label>
        <input type="password" name='password_confirm' placeholder="confirm your password">
        <label>Phone number</label>
        <input type="number" name='phone' placeholder="enter your phone">
        <label>Email</label>
        <input type="email" name='email' placeholder="enter your email">
        <button>Register</button>
        <p>
            You have an account? <a href="auth.php">Login!</a>
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
            }     
                unset($_SESSION['message']);
        ?>
        
    </form>
</body>
</html>