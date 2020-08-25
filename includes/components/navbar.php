<div class="fade-in">
    <div class="nav-outer">
        <nav class="nav-main" id="mainNav">
            <div class="nav-inner">
                <ul>
                    <li><a href="<?php echo BASE_URL ?>">Home</a></li>
                    <li><a href="<?php echo BASE_URL . 'user/' ?>">My Profile</a></li>
                    <li><a href="<?php echo BASE_URL . 'messages/' ?>">Messages</a></li>
                    <li><a href="<?php echo BASE_URL . 'about/' ?>">About</a></li>
                </ul>
            </div>
        </nav>

        <div class="plate plate1" id="plate" onclick="openNav()">
            <svg class="burger" version="1.1" height="100" width="100" viewBox="0 0 100 100">
                <path class="line line1" d="M 30,65 H 70" />
                <path class="line line2" d="M 70,50 H 30 C 30,50 18.644068,50.320751 18.644068,36.016949 C 18.644068,21.712696 24.988973,6.5812347 38.79661,11.016949 C 52.604247,15.452663 46.423729,62.711864 46.423729,62.711864 L 50.423729,49.152542 L 50.423729,16.101695" />
                <path class="line line3" d="M 30,35 H 70 C 70,35 80.084746,36.737688 80.084746,25.423729 C 80.084746,19.599612 75.882239,9.3123528 64.711864,13.559322 C 53.541489,17.806291 54.423729,62.711864 54.423729,62.711864 L 50.423729,49.152542 V 16.101695" />
            </svg>
            <svg class="x" version="1.1" height="100" width="100" viewBox="0 0 100 100">
                <path class="line" d="M 34,32 L 66,68" />
                <path class="line" d="M 66,32 L 34,68" />
            </svg>
        </div>
    </div>
    <div class="site-content">
        <!-- Move site content to the right by 400px to account for the navbar width-->