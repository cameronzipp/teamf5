<?php
var_dump($_POST);
echo "</pre>";

// Connect to DB
require (getenv("HOME").'/connect.php');
$cnxn = connect();