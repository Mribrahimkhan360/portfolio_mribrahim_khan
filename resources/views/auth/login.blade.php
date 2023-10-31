<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/voxo/back-end/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jul 2023 09:50:32 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('/')}}admin/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('/')}}admin/assets/images/favicon.png" type="image/x-icon">
    <title>Voxo - log In</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&amp;family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/vendors/bootstrap.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/css/responsive.css">
</head>

<body>
<!-- login page start-->
<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-section">
                <div class="materialContainer">
                    <div class="box">
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                        <div class="login-title">
                            <h2>Login</h2>
                        </div>
                        <div class="input">
                            <label for="name">Email Address</label>
                            <input type="email" name="email" id="name">
                            <span class="spin"></span>
                        </div>

                        <div class="input">
                            <label for="pass">Password</label>
                            <input type="password" name="password" id="pass">
                            <span class="spin"></span>
                        </div>

                        <a href="forgot-password.html" class="pass-forgot">Forgot your password?</a>

                        <div>
                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                        </div>
                        </div>
                        </form>
                        <p class="sign-category">
                            <span>Or sign in with</span>
                        </p>
                        <p>Not a member? <a href="sign-up.html" class="theme-color">Sign up now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{asset('/')}}admin/assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('/')}}admin/assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- Theme js-->
    <script src="{{asset('/')}}admin/assets/js/script.js"></script>
</div>
</body>
</html>
