<?php
include('../../config.php');
session_destroy();
header("Location: " . BASE_URL); // Return back to homepage