<?php
    session_start();
    require "../config.php";
    $email = $_SESSION['email'];
    // user id
    $data = mysqli_query($conn,"SELECT * FROM `accounts` WHERE `email` = '$email'");
    $user = mysqli_fetch_object($data);

    // store id in vars
    $id = $user->ID;

    if (isset($_FILES['profile'])) {
        $profile = $_FILES['profile'];
        print $img_name = $profile['name'];
        $tmp = $profile['tmp_name'];
        // upload
        if (move_uploaded_file($tmp,$img_name)) {
            $exist = mysqli_query($conn,"SELECT * FROM `image` WHERE `user_id` = '$id'");
            if(mysqli_num_rows($exist) == 0) {
                $sql = "INSERT INTO `image`(`user_id`, `profile`) VALUES ('$id','$img_name')";
                mysqli_query($conn,$sql);
            } else {
                $sql = "UPDATE `image` SET `profile`='$img_name' WHERE `user_id` = '$id'";
                mysqli_query($conn,$sql);
            }
            
            header('location: ../dashboard.php');
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist\css\bootstrap.min.css">
    <title>Document</title>
</head>
<body class="d-flex align-items-center justify-content-center" style="height:100vh">
    <div class="border shadow-sm p-3 w-50">
        <h5 class="text-dark">Upload profile picture</h5>

        <form action="browse.php" method="post" enctype="multipart/form-data">
            <label for="profile" class="btn btn-primary px-5 fw-bold">Choose file to upload</label>
            <input type="file" name="profile" class="d-none" id="profile">
            <input type="submit" value="Upload" class="btn btn-success px-5 fw-bold">
        </form>
    </div>
</body>
</html>