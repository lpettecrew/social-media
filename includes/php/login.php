<?php
ob_start();

if (isset($_POST['login-btn'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Secure md5 encryption.

    // Query database
    global $conn;
    $query = "SELECT * FROM `users` WHERE username='$username' and password='$password' LIMIT 1";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $reg_user_id = mysqli_fetch_assoc($result)['id'];

        $_SESSION['user'] = getUserById($reg_user_id); // Create user session with all user variables
    }
}

function getUserById($id)
{
    global $conn;
    $sql = "SELECT * FROM `users` WHERE id=$id LIMIT 1";

    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    return $user;
}

ob_flush();
