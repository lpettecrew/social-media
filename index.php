<?php
require_once("config.php");
include(ROOT_PATH . '/includes/php/getUser.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Media</title>

    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'includes/css/main.css' ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL . 'includes/css/home.css' ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <?php include(ROOT_PATH . '/includes/components/navbar.php') ?>
    <header class="header-outer">
        <div class="header-inner">
            <h1><a href="#">Cyber Media</a></h1>
        </div>
    </header>

    <div class="home">
        <!-- Greet user if logged in -->
        <?php if (isset($_SESSION['user']['id'])) { ?>
            <div class="greeting">
                <h2>Welcome back, <i><?php echo $_SESSION['user']['username'] ?></i></h2>
                <a href="<?php echo BASE_URL . 'includes/php/logout.php' ?>">Logout</a>
            </div>

            <form class="post-form__form">
                <textarea class="post-text__textarea">This is my first post!! #MyFirstPost</textarea>
                <input name="post-btn" type="submit" class="btn" style="float: right;" value="Post">
                <br style="clear: right;">
                <br>
                <hr class="post-form-split__hr">
            </form>
        <?php } else { ?>
            <div class="greeting">
                <h2>You're not logged in, log in <a href="<?php echo BASE_URL . 'login/' ?>">here</a>.</h2>
            </div>
        <?php } ?>

        <div class="feed">
            <h1 class="feed-title__h1">My feed</h1>
            <div class="retrieve-posts">
                <?php
                $query = "SELECT * FROM `posts` LIMIT 3";
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
            <button class="load-more-btn btn">Show more</button>
        </div>
    </div>
    <?php include(ROOT_PATH . '/includes/components/footer.php') ?>
    <script src="<?php echo BASE_URL . 'includes/js/loadPosts.js' ?>"></script>
</body>

</html>