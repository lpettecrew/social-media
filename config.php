<?php
session_start();
// connect to database
$conn = mysqli_connect("localhost", "root", "", "cyber-media");

if (!$conn) {
	die("Error connecting to database: " . mysqli_connect_error());
}

// define global constants
define('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://localhost/social-media/'); // change this to whatever the domain is
