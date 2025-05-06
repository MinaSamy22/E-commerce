<?php
session_start();
require_once("partials/general.php");
require_once("partials/navv.php");

// Redirect to home if already logged in
if (isset($_SESSION['user'])) {
    header("Location: home.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="index.css" />
    <title>Welcome to Enactus Community</title>
    
</head>
<body>

<section class="home" style="margin-top: -150px;">
    <div class="hometext">
        <h2>Welcome to Enactus Community</h2>
        <p>For Technology Department Team</p>
        <div class="homebtn">
           <a href="login.php" class="login-button">Login to Continue</a>

        </div>
    </div>
</section>

</body>
</html>
