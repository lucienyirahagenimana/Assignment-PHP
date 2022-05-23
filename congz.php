<?php
session_start();
include "config.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fn'];
    $lname = $_POST['ln'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $key = md5(date('i:m:h') . $fname);
    $exist = mysqli_query($conn,"SELECT * FROM `accounts` WHERE `email` = '$email'");
    if(mysqli_num_rows($exist)>0){
        die("User already exist, try another one");
    }
    try {
        mysqli_query($conn, "INSERT INTO `accounts`(`firstname`, `lastname`, `email`, `password`,`verification_key`) VALUES ('$fname','$lname','$email','$password','$key')");
        // redirect to send email
        $data = array(
            'key' => $key,
            'recipient' => $email,
            'subject' => 'Email verification',
            'names' => strtoupper($fname)
        );
        $_SESSION['mail'] = $data;
        header("location: mailer/send.php");
    } catch (Exception $error) {
        print $error->getMessage();
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <p class="p-2 text-center text-white justify-content-center mb-lg-5" style="background-color:tomato;">Assignment</p>
    <main class="d-flex justify-content-center text-align-center mb-lg-5" style="heigth:100vh">
        <div class="border-2 shadow p-1 pt-5 pb-5 mb-5 mt-5">
            <div class="position-relative text-center">
                <i class="fa fa-user-circle-o fa-lg text-info position-absolute " style=";top:-55px"> </i>

                <p class="fw-bold " style="font-size:16px">Congrat, <?php print $_SESSION['mail']['names']; ?>!</p>
            </div>
            <form action="congz.php" method="post" class="m-2">
                <div class="row mt-2 justify-content-cente">
                    <div class="w-35 ">
                        <div class="position-relative" style="left:-3px;margin-left:150px">
                            <i class="fa fa-user text-info mt-2 ml-4 " style=" font-size:20px; position: absolute; top: 1px; left: 3px;"></i>
                            <input type="email" name="email" id="" placeholder="Email" value="<?php print $_SESSION['mail']['recipient']; ?>" class="form-control ps-2 rounded-pill w-50 text-center r" style="padding-left: -10px; ">


                            <!-- <i class="fa fa-user text-inf arial-hidden  style=></i> -->
                        </div>
                    </div>

                </div>

            </form>
            <DIV class="mt-5 m-3 text-center ">
                <h1 class="fw-bold text-dark " style=font-size:20px>Help us in the journey of trust</h1>
            </DIV>
            <div class="mt-3 m-5 pb-lg-5">
                <span class="" style="color:black;margin-left:-10px">check your above email to conferm the email ownership</span>
            </div>

    </main>
    <footer class=" bg-info  p-2 mt-90 justify-content-between d-flex ">
        <div>
            <a href="#" class="text-white px-2" style="text-decoration:none">About us</a>
            <a href="#" class="text-white px-2" style="text-decoration:none">Advertisement</a>
        </div>
        <div>
            <a href="#" class="text-white px-2" style="text-decoration:none">Kigali,Rwanda</a>
        </div>
        <div>
            <a href="#" class="text-white px-2" style="text-decoration:none">How search work</a>
            <a href="#" class="text-white px-2" style="text-decoration:none">Privancy</a>
        </div>
    </footer>
</body>

</html>