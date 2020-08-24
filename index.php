<?php require_once("config.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Media</title>

    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'css/main.css' ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL . 'css/home.css' ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <nav class="nav-outer" id="nav">
        <ul class="nav-inner">
            <li><a href="#">Home</a></li>
            <li><a href="#">My Profile</a></li>
            <li><a href="#">Messages</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </nav>
    <div class="site-content">
        <!-- Move site content to the right by 400px to account for the navbar width-->
        <header class="header-outer">
            <div class="header-inner">
                <h1><a href="#">Cyber Media</a></h1>
            </div>
        </header>

        <div class="home">
            <form class="post-form__form">
                <textarea class="post-text__textarea">This is my first post!! #MyFirstPost</textarea>
                <input name="post-btn" type="submit" class="btn" style="float: right;" value="Post">
                <br style="clear: right;">
                <br>
                <hr class="post-form-split__hr">
            </form>

            <div class="feed">
                <h1 class="feed-title__h1">My feed</h1>
                <div class="post">
                    <div class="post-meta">
                        <a href="#"><img class="profile-picture__img" src="images/Profile%20Picture.png" alt="Leo Pettecrew"></a>
                        <a class="username" href="#">@LPettecrew</a>
                    </div>
                    <div class="post-body">
                        <p class="body-text__p">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae similique obcaecati odit quos at, incidunt commodi harum laboriosam suscipit ipsam. Dolorem ratione rerum quibusdam ducimus veritatis eaque nostrum consectetur, aspernatur est! Omnis tempore accusamus ad nisi!
                        </p>
                    </div>
                    <div class="post-actions">
                        <span><a href="#">Like</a></span>
                        <span><a href="#">Dislike</a></span>
                        <span><a href="#">Comment</a></span>
                        <span><a href="#">View comments</a></span>
                    </div>
                </div>
                <div class="post">
                    <div class="post-meta">
                        <a href="#"><img class="profile-picture__img" src="images/Profile%20Picture.png" alt="Leo Pettecrew"></a>
                        <a class="username" href="#">@LPettecrew</a>
                    </div>
                    <div class="post-body">
                        <p class="body-text__p">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae similique obcaecati odit quos at, incidunt commodi harum laboriosam suscipit ipsam. Dolorem ratione rerum quibusdam ducimus veritatis eaque nostrum consectetur, aspernatur est! Omnis tempore accusamus ad nisi!
                        </p>
                    </div>
                    <div class="post-actions">
                        <span><a href="#">Like</a></span>
                        <span><a href="#">Dislike</a></span>
                        <span><a href="#">Comment</a></span>
                        <span><a href="#">View comments</a></span>
                    </div>
                </div>
                <div class="post">
                    <div class="post-meta">
                        <a href="#"><img class="profile-picture__img" src="images/Profile%20Picture.png" alt="Leo Pettecrew"></a>
                        <a class="username" href="#">@LPettecrew</a>
                    </div>
                    <div class="post-body">
                        <p class="body-text__p">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae similique obcaecati odit quos at, incidunt commodi harum laboriosam suscipit ipsam. Dolorem ratione rerum quibusdam ducimus veritatis eaque nostrum consectetur, aspernatur est! Omnis tempore accusamus ad nisi!
                        </p>
                    </div>
                    <div class="post-actions">
                        <span><a href="#">Like</a></span>
                        <span><a href="#">Dislike</a></span>
                        <span><a href="#">Comment</a></span>
                        <span><a href="#">View comments</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>