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
        <div class="border-2 shadow p-1 pt-5 pb-3 mb-5 mt-5">
            <div class="position-relative text-center">
                 <i class="fa fa-user-circle-o fa-lg text-info position-absolute " style=";top:-55px"> </i>

                <p class="fw-bold " style="font-size:16px">Ican't wait to create an account</p>
                <hr>
            </div>
            <form action="congz.php" method="post" class="m-2">
            <div class="row g-2">
               <div class="col">
                   <div class="position-relative">
                       <input type="text" name="fn" id="" placeholder="First Name" class="form-control ps-5 ">
                       <i class="fa fa-user text-info mt-2 ml-4 ps-2" style=" font-size:25px; position: absolute; top: -5px; left: 5px;"></i>

            
                        <!-- <i class="fa fa-user text-inf arial-hidden  style=></i> -->
                   </div>
               </div>
               <div class="col">
                   <div class="position-relative">
                   <i class="fa fa-user text-info mt-2 ml-4 ps-2" style=" font-size:25px; position: absolute; top: -5px; left: 5px;"></i>
                   <input type="text" name="ln" id="" placeholder="Last Name" class="form-control ps-5 " style="padding-left: 1px;">
                   
                   </div>
               </div>
            </div>
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
               <div class="col">
                   <div class="position-relative">
                   <i class="fa fa-key text-info mt-2 ml-4 ps-3" style=" font-size:20px; position: absolute; top: 1px;"></i>
                  
                   <input type="password" name="psw" id="" placeholder="Choice Password" class="form-control ps-5 " style="padding-left: 1px;">
                   <i class="fa fa-eye text-info " style=" font-size:20px; position: absolute; left: 470px;margin-top:-25px;"></i>
                   

            
                        <!-- <i class="fa fa-user text-inf arial-hidden  style=></i> -->
                   </div>
               </div>
               
            </div>
            <div class="row mt-2">
               <div class="col ">
                   <div class="position-relative">
                   <input type="submit" class="btn btn-info rounded-pill w-100 text-white" value="next" placeholder="next">

                      <!-- <i class="fa fa-user text-inf arial-hidden  style=></i> -->
                   </div>
               </div>
               
            </div>
            <div class="d-flex align-items-center py-2 px-5">
                    <div class="border w-100"></div>
                    <span class="px-3">or</span>
                    <div class="border w-100"></div>
                </div>
                 <div class="bg-danger p-2 text-white rounded">
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                    <span class="ps-2">Continue with google</span>
                </div>

                <!-- have an account -->
                <div class="text-danger text-center pt-2">
                    <span>Already have an account?</span>
                    <a href="signup.php" class="fw-bold text-danger" style="text-decoration: none;">SIGN IN</a>
                </div>

            </form>
            </main>
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
</footer>
</body>
</html>
