<!DOCTYPE html>
<html lang="en">
<head>
    <title>Discuss</title>
    <?php include('./client/commonFiles.php'); ?>
</head>
<body>
    <?php 
    // Start the session at the very beginning
    session_start();
    
    // Include the header file
    include('./client/header.php'); 
    
    // Check for Signup or Login requests
    if (isset($_GET['Signup']) && !isset($_SESSION['user']['username'])) {
        include('./client/signup.php'); 
    }
    else if (isset($_GET['Login']) && !isset($_SESSION['user']['username'])) {
        include('./client/login.php'); 
    }
    else if (isset($_GET['ask']) && $_GET['ask']) {
        include('./client/ask.php');
    }    
    
    ?>
</body>
</html>
