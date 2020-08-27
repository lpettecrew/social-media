<?php

if (isset($_POST['signup-btn'])) {
    global $conn;
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES (NULL, '$username', '$email', '$password')";

    mysqli_query($conn, $query);

    // To do:
    // Make sure username or email does not already exist on database.
}
