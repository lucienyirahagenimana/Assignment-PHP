<?php
 session_start();
 require "config.php";
 $email = $_SESSION['email'];
// user id
$data = mysqli_query($conn,"SELECT * FROM `accounts` WHERE `email` = '$email'");
$user = mysqli_fetch_object($data);
// store id in vars
$id = $user->ID;
$img = mysqli_query($conn,"SELECT * FROM `image` WHERE `user_id` = '$id'");
$profile = mysqli_fetch_object($img);

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <section>
        <div class="bg-danger text-white d-flex pb-5 mb-2" style="height: 40px;">
            <div>
                <h4 class="mt-2" style="text-align: left; font-size: 25px; padding-bottom: 6px; padding-left: 8vh;">Assignment</h4>
            </div>
            <div class="drop-down d-grid my-1 position-absolute" style="right: 3px; padding-right: 7vh;">
               <a href="img.php"> <img class="rounded-circle border" src="images/backg-s.jpg" style="width: 30px;" alt=""></a>
                <button type="" style="width: 10px; height: 5px;font-size: 15px; top: 20px; right: 50px;" class="position-absolute my-1 btn btn-transparent text-white dropdown-toggle" data-bs-toggle="dropdown"><b>Me</b></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Body -->
        <div class="body-cont d-flex">

            <!-- Left  -->
            <div class="left" style="padding-left: 8vh; width: 140vh;">

                <div class="col-sm-8 col-md-12">
                    <img class="col-sm-12 col-md-12" src="mypc/img2.jpg" style="height: 25vh;" alt="background-large">
                </div>

                <div class="position-absolute d-flex" style="padding-left: 4vh; top: 90px;"> 
                    <a href="profile/browse.php">
                        <img class="rounded-circle z-depth-2 border-3 border" style="width: 145px;" src="profile/<?php print $profile->profile; ?>" alt="profile-pc">
                    </a>
                    <h6 class="col-sm-8 col-md-12 text-white position-relative" style="top: 70px; font-size: 18px; padding-left: 3vh;">RUTH NYIRAHAGENIMANA</h6>
                </div>

                <hr class="col-sm-8 col-md-12 mt-4 mb-3">

                <div class="d-flex" style="padding-left: 8vh;">
                    <h6><b>Headline</b></h6>
                    <a href="#" class="position-absolute" style="left: 176px; top: 265px;"><i class="fa fa-pencil mx-2 text-black" aria-hidden="true"></i></a>
                </div>

                <h6 style="font-size: 14px;">Software Engineer | Data Analyst</h6>

                <div class="col-sm-8 col-md-12 d-flex bg-info">
                    <i class="fa fa-key mx-2 mt-2" aria-hidden="true"></i>
                    <h6 class="text-white mt-1"><b>Change Password</b></h6>
                </div>

                <div class="mt-5 mx-2">
                    <div class="d-flex">
                        <h6 class="mx-4 mt-2">Current Password</h6>
                        <div class="position-relative">
                            <input class="ps-5 form-control" placeholder="Password" type="text" name="" id="">
                            <i class="fa fa-key text-info position-absolute" style="top: 13px; left: 15px;" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="d-flex mt-3">
                        <h6 class="mx-5 mt-2">New Password</h6>
                        <div class="position-relative" style="left: -31px;">
                            <input class="ps-5 form-control" placeholder="Password" type="text" name="" id="">
                            <i class="fa fa-key text-info position-absolute" style="top: 13px; left: 15px;" aria-hidden="true"></i>
                            <i class="fa fa-eye text-info position-absolute" style="top: 13px; right: 16px;" aria-hidden="true"></i>
                        </div>
                    </div>


                    <div class="d-flex">
                        <input class="form-check-input position-absolute" style="left: 278px; top: 545px;"  type="checkbox" name="" id="">
                        <p class="position-absolute" style="font-size: 11px; top: 550px; left: 308px;"><b>remind me to change password for each 3 months</b></p>
                    </div>

                    <button class="my-5 btn btn-info text-white position-absolute" style="left: 388px;" type="submit">Set New Password</button>
                    <div class="my-5 position-absolute" style="top: 600px;"><h5>.</h5></div>
                </div>
            </div>

            <!-- Light side body -->

            <div class="rght">

                <div class="list-group mx-2" style="width: 70vh;">
                    <h6 class="bg-info position-relative" style="height: 8px;"></h6>
                    <a href="#" style="top: -13px;" class="mb-3 border-bottom border-2 shadow list-group-item list-group-item-action" aria-current="true">
                      ACCOUNT SETTINGS
                    </a>
                    
                    <div class="d-flex border-3 border-danger">
                        <i class="fa fa-pencil mx-3 position-absolute text-info" aria-hidden="true"></i>
                        <a class="ps-5 position-relative text-black" style="bottom: 7px; text-decoration: none;" href="">Edit Profile</a>
                    </div>
                    <h6 class="bg-info" style="height: 5px;"></h6>
                    <div class="d-flex border-3 border-danger">
                        <i class="fa fa-key mx-3 position-absolute text-info" aria-hidden="true"></i>
                        <a class="ps-5 position-relative text-black" style="bottom: 7px; text-decoration: none;" href="">Change Password</a>
                    </div>
                    <h6 class="bg-info" style="height: 5px;"></h6>
                    <div class="d-flex border-3 border-danger">
                        <i class="fa fa-line-chart mx-3 position-absolute text-info" aria-hidden="true"></i>
                        <a class="ps-5 position-relative text-black" style="bottom: 7px; text-decoration: none;" href="">Sign in Activities</a>
                    </div>
                    <h6 class="bg-info" style="height: 5px;"></h6>
                    <div class="d-flex border-3 border-danger">
                        <i class="fa fa-clock mx-3 position-absolute text-info" aria-hidden="true"></i>
                        <a class="ps-5 position-relative text-black" style="bottom: 7px; text-decoration: none;" href="">Session Timeout</a>
                    </div>
                    <h6 class="bg-info" style="height: 5px;"></h6>
                    <div class="d-flex border-3 border-danger">
                        <i class="fa fa-heartbeat mx-3 position-absolute text-info" aria-hidden="true"></i>
                        <a class="ps-5 position-relative text-black" style="bottom: 7px; text-decoration: none;" href="">Memorialisation</a>
                    </div>
                    <h6 class="bg-info" style="height: 5px;"></h6>
                    <div class="d-flex border-3 border-danger">
                        <i class="fas fa-tags mx-3 position-absolute text-info" aria-hidden="true"></i>
                        <a class="ps-5 position-relative text-black" style="bottom: 7px; text-decoration: none;" href="">Jobs Feed Content</a>
                    </div>
                    <h6 class="bg-info" style="height: 5px;"></h6>
                    <div class="d-flex border-3 border-danger">
                        <i class="fa fa-envelope mx-3 position-absolute text-info" aria-hidden="true"></i>
                        <a class="ps-5 position-relative text-black" style="bottom: 7px; text-decoration: none;" href="">Email & SMS notification</a>
                    </div>
                    <h6 class="bg-info" style="height: 5px;"></h6>
                    <div class="d-flex border-3 border-danger">
                        <i class="fa fa-bell mx-3 position-absolute text-info" aria-hidden="true"></i>
                        <a class="ps-5 position-relative text-black" style="bottom: 7px; text-decoration: none;" href="">Push Notification</a>
                    </div>
                    <h6 class="bg-info" style="height: 5px;"></h6>
                    <div class="d-flex border-3 border-danger">
                        <i class="fa fa-user-times mx-3 position-absolute text-info" aria-hidden="true"></i>
                        <a class="ps-5 position-relative text-black" style="bottom: 7px; text-decoration: none;" href="">Delete my Account</a>
                    </div>
                    <h6 class="bg-info" style="height: 5px;"></h6>
                </div>
            </div>
        </div>

    </section>
</body>
</html>