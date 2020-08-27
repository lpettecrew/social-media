<?php
require_once("../config.php");
include('../includes/php/sign-up.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Media</title>

    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href="<?php echo BASE_URL . 'includes/css/main.css' ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo BASE_URL . 'includes/css/login.css' ?>" rel="stylesheet" type="text/css">
</head>

<body>
    <?php include(ROOT_PATH . '/includes/components/navbar.php') ?>
    <header class="header-outer">
        <div class="header-inner">
            <h1><a href="#">Cyber Media</a></h1>
        </div>
    </header>

    <div class="login-outer">
        <div class="login-inner">

            <?php if (isset($_SESSION['user']['id'])) { ?>
                <h2>You're already logged in as <?php echo $_SESSION['user']['username'] ?></h2>
                <br>
                <a href="<?php echo BASE_URL . 'includes/php/logout.php' ?>">Logout</a>
            <?php } else { ?>
                <h2>Sign up</h2>
                <br>
                <form action="index.php" method="POST">
                    <label for="username">Username: </label>
                    <input type="text" class="input" name="username" id="username">
                    <br>
                    <label for="email">Email: </label>
                    <input type="text" class="input" name="email" id="email">
                    <br>
                    <label for="password">Password: </label>
                    <input type="password" class="input" name="password" id="password">
                    <br>
                    <button class="btn" name="signup-btn" type="submit">Sign up</button>
                </form>
                <br>
                <span>Already have an account? <a href="../login/">Log in</a></span>
            <?php } ?>
        </div>
    </div>
    <?php include(ROOT_PATH . '/includes/components/footer.php') ?>
</body>

</html>