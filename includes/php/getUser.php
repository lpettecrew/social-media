<?php
function getUserInfo($username)
{
    global $conn;
    $query = "SELECT id, username, picture, bio FROM `users` WHERE username='$username'";
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

function getUserPostInfo($id)
{
    global $conn;
    $sql = "SELECT username, picture FROM `users` WHERE id=$id LIMIT 1";

    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    return $user;
}
