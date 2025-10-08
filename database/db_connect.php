<?php
$dbhost ='localhost';
$dbuser ='root';
$dbpass ='';
$dbname ='admin_panel';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn){
    die("Database Connection Error");
}
