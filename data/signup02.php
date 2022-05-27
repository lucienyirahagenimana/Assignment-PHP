<?php
session_start();
include "config.php";
$email = $_SESSION['email'];
$sql = "SELECT * FROM `accounts` WHERE `email` = '$email'";
$res = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($res);
$name = strtoupper($user['firstname']);
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($user['password'] == $_POST['psw']) {
        $_SESSION['id'] = $user['id'];
        header('location:dashboard.php');
    } else {
        $error = "Invalid password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web\css\all.min.css">
</head>

<body>
    <p class="p-2 text-center text-white justify-content-center mb-lg-5" style="background-color:tomato;">Assignment</p>
    <main class="d-flex justify-content-center text-align-center mb-lg-5" style="heigth:80vh">
        <div class="border-2 shadow p-1 pt-5 pb-3 mb-5 mt-5">
            <div class="position-relative text-center">
                <p class="fw-bold text-dark" style="font-size:20px">Welcome Back!</p>
            </div>
            <div class="position-relative text-center">
                <p class="fw-bold text-dark" style="font-size:15px">Hi <?php echo $name ?></p>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="m-2">
                <div class="row mt-1">
                    <div class="col">
                        <div class="position-relative">
                            <i class="fa fa-user  mt-2 ml-4 ps-3" style=" font-size:20px; position: absolute; top: 1px; left: 3px;"></i>
                            <input value="<?php echo $email; ?>" placeholder="Email" class="form-control ps-5  rounded-pill" style="padding-left: 1px;" readonly>


                            <!-- <i class="fa fa-user text-inf arial-hidden  style=></i> -->
                        </div>
                    </div>

                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="position-relative">
                            <i class="fa fa-key text-info mt-2 ml-4 ps-3" style=" font-size:20px; position: absolute; top: 1px;"></i>

                            <input type="password" name="psw" id="" placeholder=" Password" class="form-control ps-5 " style="padding-left: 1px;">
                            <i class="fa fa-eye text-info " style=" font-size:20px; position: absolute; left: 305px;margin-top:-25px;"></i>
                            <span class="text-danger">
                                <?php
                                if (isset($error)) {
                                    print $error;
                                }
                                ?>
                            </span>


                            <!-- <i class="fa fa-user text-inf arial-hidden  style=></i> -->
                        </div>
                    </div>
                    <div class="text-start  pt-2 mt-2">
                        <button type="submit" class="btn btn-info rounded-pill w-100 text-white" role="button">Sign in</button>
                    </div>

            </form>

</body>

</html>