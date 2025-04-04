<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
        <div class="hello-container">
            <a href="logout.php" class="btn btn-danger">Sign Out</a>
            
            <div class="welcome-content">
                <h1 class="welcome-message">Hello, World!</h1>
                <div class="highlight-box">
                    <p>Welcome <span class="user-email"><?php echo htmlspecialchars($_SESSION["email"]); ?></span></p>
                </div>
                <p>We're glad to have you on board!  </p>
            </div>
        </div>
    </div>
</body>
</html>