<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start session
session_start();

include ('includes/head.html');
?>

<?php
include('includes/header.html');
?>

<?php
    ($_GET);
    if (isset($_GET['username'])) {
        $name = $_REQUEST['username'];
    }

    if (isset($_GET['password'])) {
        $password = $_REQUEST['password'];
    }
    include('login.html');
    echo '<style>';
    include "styles/styles.css";
    echo '</style>';
