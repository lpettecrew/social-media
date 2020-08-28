<?php require_once("../config.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Media</title>

    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'includes/css/main.css' ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL . 'includes/css/about.css' ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <?php include(ROOT_PATH . '/includes/components/navbar.php') ?>
    <header class="header-outer">
        <div class="header-inner">
            <h1><a href="#">Cyber Media</a></h1>
        </div>
    </header>

    <div class="about-outer">
        <div class="about-inner">
            <h2>About</h2>
            <br>
            <p>Cyber Media is an app created by <span class="footer-promotion"><a href="https://lpettecrew.com" style="color: grey;">Leo Pettecrew</a></span>, Jacob Beere and Thomas Martin.</p>
            <p>The goal of this project was to create a social media app similar to <a href="https://twitter.com/">Twitter</a>, where users can create their own posts, and send other users messages.</p>
            <p>This application is only to showcase personal ability and is in no ways a commercial product.</p>
            <p>You can check out the source code to our application on my <a href="https://github.com/lpettecrew/social-media">GitHub</a>.</p>
            <p>We created this application using HTML, PHP, CSS and JavaScript.</p>
        </div>
    </div>
    <?php include(ROOT_PATH . '/includes/components/footer.php') ?>
</body>

</html>