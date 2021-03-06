<!doctype html>
<html lang="en">

<!-- Mirrored from baston.laborasyon.com/demos/horizontal-navigation-dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 11:59:19 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/media/image/favicon.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="../../vendors/bundle.css" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="../../assets/css/app.min.css" type="text/css">
</head>
<body class="form-membership" style="background: url(../../assets/media/image/image1.jpg)">
<!-- Preloader -->
<div class="preloader">
    <img class="logo" src="../../assets/media/image/logo/logo.png" alt="logo">
    <img class="dark-logo" src="../../assets/media/image/logo/dark-logo.png" alt="logo dark">
    <div class="preloader-icon"></div>
</div>
<!-- ./ Preloader -->

<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <img class="logo" src="../../assets/media/image/logo/logo.png" alt="logo">
    </div>
    <!-- ./ logo -->

    
    <h5>Sign in</h5>

    <!-- form -->
    <form method="POST" action="metier/login.php">
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username " required autofocus>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group d-flex justify-content-between align-items-center">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
            
        </div>
        <div >
        <button type="submit"  class="btn btn-primary btn-block">Sign in</button>
     </div>
    </form>
    <!-- ./ form -->


</div>

<!-- Plugin scripts -->
<script src="../../vendors/bundle.js"></script>

<!-- App scripts -->
<script src="../../assets/js/app.min.js"></script>
</body>

<!-- Mirrored from baston.laborasyon.com/demos/horizontal-navigation-dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 11:59:19 GMT -->
</html>
