<?php
require_once("../../config.php");
include(ROOT_PATH . '/includes/php/getUser.php');
if (isset($_GET['user'])) {
    $user = getUserInfo($_GET['user']);
} else if (isset($_SESSION['user']['id'])) {
    $user = getUserInfo($_SESSION['user']['username']);
} else {
    $user = NULL; // If user doesn't exist, set $user to NULL so the request can be evaluated
}

// Retrieve the current amount of rows showing, add 3 to the limit.
// For each row retrieve, append it to the current feed.

$postNewCount = $_POST['postNewCount'];

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