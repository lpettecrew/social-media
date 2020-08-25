<?php require_once("config.php") ?>
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
        <div class="greeting">
            <h2>Welcome back, <i>LPettecrew</i></h2>
            <a href="<?php echo BASE_URL . 'logout.php' ?>">Logout</a>
        </div>

        <form class="post-form__form">
            <textarea class="post-text__textarea">This is my first post!! #MyFirstPost</textarea>
            <input name="post-btn" type="submit" class="btn" style="float: right;" value="Post">
            <br style="clear: right;">
            <br>
            <hr class="post-form-split__hr">
        </form>

        <div class="feed">
            <h1 class="feed-title__h1">My feed</h1>
            <?php include(ROOT_PATH . '/includes/components/post-widget.php'); ?>
            <?php include(ROOT_PATH . '/includes/components/post-widget.php'); ?>
            <?php include(ROOT_PATH . '/includes/components/post-widget.php'); ?>
        </div>
    </div>
    <?php include(ROOT_PATH . '/includes/components/footer.php') ?>
</body>

</html>