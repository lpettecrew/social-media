<?php
session_start();
// connect to database
$conn = mysqli_connect("sql177.main-hosting.eu", "u357928024_leo2", '$jr;QaM|N5A', "u357928024_cyber_media");

if (!$conn) {
	die("Error connecting to database: " . mysqli_connect_error());
}

// define global constants
define('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://localhost/social-media/'); // change this to whatever the domain is
