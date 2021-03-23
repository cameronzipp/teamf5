<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start session
session_start();

//Initialize variables
$err = false;
$username = "";

//If the form has been submitted
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //echo "Form has been submitted";

    //Get the username and password
    $username = strtolower(trim($_POST['username']));
    $password = trim($_POST['password']);

    //If they are correct
    //Actual username and password are stored in a separate file
    //Should be moved to home directory ABOVE public_html
    require ('includes/login-creds.php');

    if ($username == $adminUser && $password == $adminPassword) {

        $_SESSION['loggedin'] = true;

        //Redirect to page the user was on
        if (!isset($_SESSION['page'])) {
            $_SESSION['page'] = 'admin.php';
        }
        header("location: " . $_SESSION['page']);

    }

    //Set an error flag
    $err = true;
}

include('includes/head.html');
?>
<body>
<?php
include('includes/header.html');
?>

<div class="jumbotron">
    <h2>Site Admin Login</h2>
</div>
<!--Form to login as admin -->
<form class="bg-light"action="#" method="post">
    <div class="d-flex justify-content-center align-items-center container">
        <div class="row">
            <label for="uName"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" id="username" required=""
                <?php //echo "value=\"$username\"" ?>
                <?php //echo 'value="'.$username.'"' ?>
                <?php echo "value='$username' " ?>
            >
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required="">
            <?php
            if ($err) {
                echo '<span class="err">Incorrect login</span><br>';
            }
            ?>
            <button type="submit">Login</button>
        </div>
    </div>
    <br>
</form>

<?php
include ('includes/footer.html');
?>
</body>
</html>



