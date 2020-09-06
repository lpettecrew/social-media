<?php
require_once("../config.php");
include("../includes/php/getUser.php");
// Get current user profile from URL
// Only returns username, picture and bio to avoid SQL injection
if (isset($_GET['user'])) {
    $user = getUserInfo($_GET['user']);
} else if (isset($_SESSION['user']['id'])) {
    $user = getUserInfo($_SESSION['user']['username']);
} else {
    $user = NULL; // If user doesn't exist, set $user to NULL so the request can be evaluated
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Media</title>

    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'includes/css/main.css' ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL . 'includes/css/user.css' ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL . 'includes/css/image-preview.css' ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <?php include(ROOT_PATH . '/includes/components/navbar.php') ?>
    <header class="header-outer">
        <div class="header-inner">
            <h1><a href="#">Cyber Media</a></h1>
        </div>
    </header>

    <div class="user">
        <?php if (isset($_SESSION['user']['id'])) {  // Check if logged in
            if ($_SESSION['user']['username'] == $user['username']) { // Check if the user is currently viewing their profile
        ?>
                <h1>My profile</h1>
                <br>
                <a href="<?php echo BASE_URL . 'includes/php/logout.php' ?>">Logout</a>
                <br>
                <h2>@<?php echo $user['username'] ?></h2>
                <br>
                <form class="profile">
                    <div class="preview-image-outer">
                        <input type="file" name="image" id="inpFile">
                        <div class="image-preview" id="imagePreview">
                            <img src="<?php echo BASE_URL . 'images/users/' . $user['picture'] ?>" alt="Image Preview" class="image-preview__image">
                            <label for="inpFile" class="inpFile__label"><span class="inpFile__label-inner">Change Picture</span></label>
                        </div>
                    </div>
                    <div class="edit-bio">
                        <label>Bio:</label>
                        <br>
                        <br>
                        <textarea required>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit architecto dicta odit dolores minus dolor, exercitationem facere sapiente non omnis eum ullam natus, explicabo ab nisi voluptatem corrupti voluptas quia unde nam, itaque fugit quibusdam.</textarea>

                        <button type="submit" class="btn" style="float: right;">Update</button>
                    </div>
                </form>
                <br style="clear: both;">
                <hr>
                <br>
                <h2><i>@<?php echo $user['username'] ?></i>'s posts:</h2>
                <br>
                <div class="posts">
                    <div class="retrieve-posts">
                        <?php
                        $query = "SELECT * FROM `posts` WHERE user_id=" . $user['id'] . " LIMIT 3";
                        $posts = mysqli_query($conn, $query);
                        if (mysqli_num_rows($posts) > 0) {
                            while ($post = mysqli_fetch_assoc($posts)) { ?>
                                <div class="post">
                                    <div class="post-meta">
                                        <a href="#"><img class="profile-picture__img" src="<?php echo BASE_URL . 'images/Profile%20Picture.png' ?>" alt="Leo Pettecrew"></a>
                                        <a class="username" href="#">@<?php echo getUserPostInfo($post['user_id'])['username'] ?></a>
                                    </div>
                                    <div class="post-body">
                                        <p class="body-text__p">
                                            <?php echo $post['body'] ?>
                                        </p>
                                    </div>
                                    <div class="post-actions">
                                        <span><a href="#"><i class="fas fa-thumbs-up"></i> (<?php echo $post['likes'] ?>)</a></span>
                                        <span><a href="#"><i class="fas fa-thumbs-down"></i> (<?php echo $post['dislikes'] ?>)</a></span>
                                        <span><a href="#">View comments</a></span>
                                        <!-- Pressing view comments displays a dropdown of 3 comments, with the option to retrieve more. -->
                                        <input type="text" placeholder="Add a comment..." class="add-comment-btn input">
                                        <!-- Press enter to post a comment -->
                                        <p class="add-comment-btn__span">Press ENTER to add comment</p>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } else { ?>
                            <h2>No posts.</h2>
                            <br>
                        <?php } ?>
                    </div>
                    <button class="load-more-btn-user btn">Show more</button>
                </div>
            <?php } else if ($user != NULL) { // If the user if viewing someone else's profile 
            ?>
                <h1><i>@<?php echo $user['username'] ?></i>'s profile</h1>
                <div class="profile">
                    <div class="profile-image-outer">
                        <img src="<?php echo BASE_URL . 'images/users/default.png' ?>" alt="<?php echo $user['picture'] ?>">
                    </div>
                    <div class="bio">
                        <div class="bio-inner">
                            <h2>Bio: </h2>
                            <br>
                            <p><?php echo $user['bio'] ?></p>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                </div>
                <hr>
                <br>
                <h2><i>@<?php echo $user['username'] ?></i>'s posts:</h2>
                <br>
                <div class="posts">
                    <div class="retrieve-posts">
                        <?php
                        $query = "SELECT * FROM `posts` WHERE user_id=" . $user['id'] . " LIMIT 3";
                        $posts = mysqli_query($conn, $query);
                        if (mysqli_num_rows($posts) > 0) {
                            while ($post = mysqli_fetch_assoc($posts)) { ?>
                                <div class="post">
                                    <div class="post-meta">
                                        <a href="#"><img class="profile-picture__img" src="<?php echo BASE_URL . 'images/Profile%20Picture.png' ?>" alt="Leo Pettecrew"></a>
                                        <a class="username" href="#">@<?php echo getUserPostInfo($post['user_id'])['username'] ?></a>
                                    </div>
                                    <div class="post-body">
                                        <p class="body-text__p">
                                            <?php echo $post['body'] ?>
                                        </p>
                                    </div>
                                    <div class="post-actions">
                                        <span><a href="#"><i class="fas fa-thumbs-up"></i> (<?php echo $post['likes'] ?>)</a></span>
                                        <span><a href="#"><i class="fas fa-thumbs-down"></i> (<?php echo $post['dislikes'] ?>)</a></span>
                                        <span><a href="#">View comments</a></span>
                                        <!-- Pressing view comments displays a dropdown of 3 comments, with the option to retrieve more. -->
                                        <input type="text" placeholder="Add a comment..." class="add-comment-btn input">
                                        <!-- Press enter to post a comment -->
                                        <p class="add-comment-btn__span">Press ENTER to add comment</p>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } else { ?>
                            <h2>No posts.</h2>
                            <br>
                        <?php } ?>
                    </div>
                    <button class="load-more-btn-user btn">Show more</button>
                </div>
            <?php } else { // If user doesn't exist 
            ?>
                <h1>This user doesn't exist.</h1>
            <?php } ?>
        <?php } else {
            // If not logged in and no URL user set, present them with an error.
        ?>
            <h1>The user you're looking for doesn't exist.</h1>
            <br>
            <p>If you were trying to access your own profile, you need to be <a href="../login/">logged in</a>.</p>
        <?php } ?>
        <!-- If not, present them with public information that cannot be edited -->
    </div>
    <?php include(ROOT_PATH . '/includes/components/footer.php') ?>
    <script src="<?php echo BASE_URL . 'includes/js/loadPosts.js' ?>"></script>
    <script src="<?php echo BASE_URL . 'includes/js/imagePreview.js' ?>"></script>
</body>

</html>