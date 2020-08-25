<?php require_once("../config.php") ?>
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
        </div>
    </header>

    <div class="messages">
        <h2>My messages</h2>
        <br>
        <!-- Make sure user is logged in to retrieve messages, if not, redirect to login. -->
        <div class="message-outer">
            <div class="message-inner unread">
                <div class="message-meta">
                    <img src="<?php echo BASE_URL . 'images/Profile%20Picture.png' ?>">
                    <p>JDBeere</p>
                </div>
                <div class="message-body">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias illum odit, minima quia inventore harum!
                </div>
            </div>
        </div>
        <div class="message-outer">
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
        <div class="message-outer">
            <div class="message-inner unread">
                <div class="message-meta">
                    <img src="<?php echo BASE_URL . 'images/Profile%20Picture.png' ?>">
                    <p>JDBeere</p>
                </div>
                <div class="message-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ipsam sequi accusamus iusto dolorum laudantium!
                </div>
            </div>
        </div>
    </div>
    <?php include(ROOT_PATH . '/includes/components/footer.php') ?>
</body>

</html>