<?php

$link = new mysqli('localhost', 'root', '', 'hostel_management_system');
if ($link->connect_error) {
    die('Connect Error (' . $link->connect_errno . ') '
            . $link->connect_error);
}
if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

//echo 'Success... ' . $link->host_info . "\n";
?>