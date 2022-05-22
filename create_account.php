<?php
// receive data
$user_ln = $_POST['ln'];
$user_fn = $_POST['fn'];
$user_pass = $_POST['pass'];
$user_email = $_POST['email'];

$pattern = "/[0-9]/i";
$error = array();
// validation
if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
    $error[] = "Invalid Email";
}

if (preg_match($pattern, $user_ln)) {
    $error[] = "Last name can not contain any digit or special characters";
}

if (preg_match($pattern, $user_fn)) {
    $error[] = "First name can not contain any digit or special characters";
}

if (strlen($user_pass) <= 4) {
    $error[] = "Password must be greater than 4 characters";
}

// check if there is no errors
if (count($error) == 0) {
    // create connection
    $conn = mysqli_connect('localhost', 'root', '', 'test');
    // Validate if a user exist
    $exist = mysqli_query($conn, "SELECT * FROM `accounts` WHERE `email` = '$user_email'");
    if (mysqli_num_rows($exist) > 0) {
        $error[] = "Email already exist";
    } else {
        $sql = "INSERT INTO `accounts`(`firstname`, `lastname`, `email`, `password`) VALUES ('$user_fn','$user_ln','$user_email','$user_pass')";
        // execute query
        try {
            mysqli_query($conn, $sql);
            print "Data inserted";
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
    }
}





// display all errors
foreach ($error as $e) {
    print "$e <br>";
}
