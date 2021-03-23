<?php
//connect.php
//connect to database
function connect() {
    $username = 'teamfgre_admin';
    $password = 'AdminPassword1111!';
    $hostname = 'localhost';
    $database = 'teamfgre_companies';

    $cnxn = @mysqli_connect($hostname, $username, $password, $database)
    or die ("Error conneting to database");
    return $cnxn;
}
