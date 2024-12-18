<?php
// Start the session
session_start();

// Include the database connection
include("../common/db.php");

if (isset($_POST['Signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    // Use a prepared statement to avoid SQL injection and syntax issues
    $user = $conn->prepare("INSERT INTO `user` (`id`, `username`, `email`, `password`, `address`) VALUES (NULL, ?, ?, ?, ?)");

    // Bind the parameters to the statement
    $user->bind_param("ssss", $username, $email, $password, $address);

    // Execute the statement
    $result = $user->execute();

    if ($result) {
        // Store user information in the session
        $_SESSION['user'] = [
            "username" => $username,
            "email" => $email,
        ];
        header("location: /discuss");
    } else {
        echo "New user not register";
    }
}
elseif(isset($_POST['Login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username ="";
    $query = "Select * from user where email='$email' and password='$password'";
    $result = $conn->query($query);
    print_r($result);
    if($result->num_rows==1){
        foreach($result as $row){
            $username=$row['username'];
        }
        $_SESSION['user'] = [
            "username" => $username,
            "email" => $email,
        ];
        header("location: /discuss");
    }
    else{
        echo "User not registered";
    }
}
elseif (isset($_GET['Logout'])) {
    // Destroy the session to log out the user
    session_destroy();
    // Redirect to the homepage or another page after logging out
    header("Location: /discuss");
    exit(); // Stop further script execution after the redirect
}
else{

}
?>
