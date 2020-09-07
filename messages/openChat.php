<?php
require_once("../config.php");
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
    <link href="<?php echo BASE_URL . 'includes/css/messages.css' ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <?php include(ROOT_PATH . '/includes/components/navbar.php') ?>
    <header class="header-outer">
        <div class="header-inner">
            <h1><a href="#">Cyber Media</a></h1>
            <p>Now chatting with {user}</p>
        </div>
    </header>

    <div class="direct-messages">
        <div class="message-outer message-from">
            <div class="message-inner">
                <div class="message-meta">
                    <img src="<?php echo BASE_URL . 'images/Profile%20Picture.png' ?>">
                    <p>JDBeere</p>
                </div>
                <div class="message-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis recusandae nulla odio saepe autem rem.
                </div>
            </div>
        </div>
        <div class="message-outer message-to">
            <div class="message-inner">
                <div class="message-meta">
                    <img src="<?php echo BASE_URL . 'images/Profile%20Picture.png' ?>">
                    <p>JDBeere</p>
                </div>
                <div class="message-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis recusandae nulla odio saepe autem rem.
                </div>
            </div>
        </div>
        <br style="clear: both;">
        <form class="send-dm-form">
            <input type="text" placeholder="Send a message..." class="add-comment-btn input">
            <!-- Press enter to post a comment -->
            <p class="add-comment-btn__span">Press ENTER to send</p>
        </form>
    </div>
    <?php include(ROOT_PATH . '/includes/components/footer.php') ?>
</body>

</html>