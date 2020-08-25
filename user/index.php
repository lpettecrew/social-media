<?php require_once("../config.php") ?>
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
        <!-- if the url matches the current session of the user, allow them to modify their details -->
        <h1>My profile</h1>
        <br>
        <h2>@Lpettecrew</h2>
        <br>
        <form>
            <div class="preview-image-outer">
                <input type="file" name="image" id="inpFile">
                <div class="image-preview" id="imagePreview">
                    <img src="<?php echo BASE_URL . 'images/Profile%20Picture.png' ?>" alt="Image Preview" class="image-preview__image">
                    <label for="inpFile" class="inpFile__label"><span class="inpFile__label-inner">Change Picture</span></label>
                </div>
            </div>
            <div class="bio">
                <label>Bio:</label>
                <br>
                <br>
                <textarea required>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit architecto dicta odit dolores minus dolor, exercitationem facere sapiente non omnis eum ullam natus, explicabo ab nisi voluptatem corrupti voluptas quia unde nam, itaque fugit quibusdam.</textarea>

                <button type="submit" class="btn" style="float: right;">Update</button>
            </div>
        </form>
        <br>
        <br>
        <hr>
        <br>
        <h2><i>@LPettecrew</i>'s posts:</h2>
        <br>
        <div class="posts">
            <?php include(ROOT_PATH . '/includes/components/post-widget.php'); ?>
            <?php include(ROOT_PATH . '/includes/components/post-widget.php'); ?>
            <?php include(ROOT_PATH . '/includes/components/post-widget.php'); ?>
        </div>
        <!-- If not, present them with public information that cannot be edited -->
    </div>
    <?php include(ROOT_PATH . '/includes/components/footer.php') ?>
    <script src="<?php echo BASE_URL . 'includes/js/imagePreview.js' ?>"></script>
</body>

</html>