<?php
include "config.php";
if(isset($_GET['key'])){
    $key = $_GET['key'];
    $sql = "SELECT * FROM `accounts` WHERE `verification_key` = '$key'";
    $res = mysqli_query($conn,$sql);
    if (mysqli_num_rows($res) != 0) {
        mysqli_query($conn,"UPDATE `accounts` SET `is_verified`= 1 WHERE `verification_key` = '$key'");
        // direct to login page
        print "<h1>Account verified succefully<a href='signup01.php'>Login</a> to continue to homepage</h1>";
    } else {
        die("Verification failed");
    }
}