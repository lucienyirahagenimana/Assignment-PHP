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
                <p class="fw-bold text-dark" style="font-size:15px">Sign in</p>
            </div>
            <form action="congz.php" method="post" class="m-2">
            <div class="row mt-2">
               <div class="col">
                   <div class="position-relative">
                   <i class="fa fa-envelope text-info mt-2 ml-4 ps-3" style=" font-size:20px; position: absolute; top: 1px; left: 3px;"></i>
                   <input type="email" name="email" id="" placeholder="Email" class="form-control ps-5" style="padding-left: 1px;">

            
                        <!-- <i class="fa fa-user text-inf arial-hidden  style=></i> -->
                   </div>
               </div>
               
            </div>
            <div class="row mt-2">
               <div class="col ">
                   <div class="position-relative">
                   <a href="signp.php" class="btn btn-info rounded-pill w-100 text-white" role="button">Next</a>

                      <!-- <i class="fa fa-user text-inf arial-hidden  style=></i> -->
                   </div>
               </div>
               
            </div>
            <div class="d-flex align-items-center py-2 px-5">
                    <div class="border w-100"></div>
                    <span class="px-3">or</span>
                    <div class="border w-100"></div>
                </div>
                 <div class="bg-tomato p-2 text-white rounded" style=background-color:tomato>
                    <i class="fa fa-google" aria-hidden="true"></i>
                    <span class="ps-2">Continue with google</span>
                </div>

                <!-- have an account -->
                <div class="text-start  pt-2">
                    <a href="index.php" class="fw-bold text-info" style="text-decoration: none;">Create Account</a>
                </div>

            </form>
 
            <footer class=" bg-info  p-2 mt-90 justify-content-between d-flex ">
    <div>
      <a href="#" class="text-white px-2" style="text-decoration:none">About us</a>
      <a href="#" class="text-white px-2"style="text-decoration:none" >Advertisement</a>
    </div>
    <div >
    <a href="#" class="text-white px-2" style="text-decoration:none">Kigali,Rwanda</a>
    </div>
    <div>
      <a href="#" class="text-white px-2" style="text-decoration:none">How search work</a>
      <a href="#" class="text-white px-2"style="text-decoration:none" >Privancy</a>
    </div>
</footer>       </body>
</html>