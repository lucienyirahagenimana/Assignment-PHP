<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<p class="p-2 text-center text-white justify-content-center mb-lg-5" style="background-color:tomato;">Assignment</p>
    <main class="d-flex justify-content-center text-align-center mb-lg-5" style="heigth:100vh">
        <div class="border-2 shadow p-1 pt-5 pb-3 mb-5 mt-5">
            <div class="position-relative text-center">
                <i class="fa fa-user-circle-o fa-lg text-info position-absolute " style="font-size:70px;top:-69px"> </i>

                <p class="fw-bold " style="font-size:16px">Ican't wait to create an account</p>
                <hr>
            </div>
            <form action="#" method="post" class="m-2">
                <div class="row mt-2">
                    <div class="col">
                        <div class="position-relative">
                            <input type="text" name="user_id" id="" placeholder="" class="form-control ps-5" style="padding-left: 1px;">
                             <!-- <i class="fa fa-user text-inf arial-hidden  style=></i> -->
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="position-relative">
                            <input type="file" name="cover" id="" placeholder="" class="form-control ps-5 " style="padding-left: 1px;">
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
            </form>
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
    <script>
        let icon = document.querySelector("#hint");
        let inputBox = document.querySelector("#pass-input");

        icon.addEventListener('click', function() {
            let state = inputBox.type;
            if(state == 'password') {
                state = 'text';
                icon.classList.replace('fa-eye','fa-eye-slash');
            } else {
                state = 'password';
                icon.classList.replace('fa-eye-slash','fa-eye');
            }
            inputBox.type = state;
        });
    </script>
</body>
</html>