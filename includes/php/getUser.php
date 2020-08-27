<?php
function getUserInfo($username)
{
    global $conn;
    $query = "SELECT username, picture, bio FROM `users` WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    // Check user exists in database
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        return $user;
    } else {
        $user = NULL;
        return $user;
    }
}
