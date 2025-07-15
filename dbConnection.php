<?php
//all the variables defined here are accessible in all the files that include this one
$con = new mysqli('localhost', 'root', '', 'project');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>
