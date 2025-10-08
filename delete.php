<?php
require_once 'functions/functions.php';
if(isset($_GET['delete'])){
    $del_id = $_GET['delete'];
    $delete = "DELETE FROM users WHERE user_id = '$del_id'";
    if(mysqli_query($conn, $delete)){
        header('Location: all-user.php');
    } else {
        echo "Data not deleted";
    }
}