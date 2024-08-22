<!--
=========================================================
* Material Dashboard 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
   yodep - Login
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body>
  <div class="container position-sticky z-index-sticky top-0 bg-light">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-11.4 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-2 px-1 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/2.png'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <!-- <div class="card-header">
                  <h4 class="font-weight-bolder">Sign In</h4>
                  <p class="mb-0">Enter your email and password to login</p>
                </div> -->
                <div class="card bg-secondary" >
                <div class="card-body" style="background-color: rgb(255, 255, 255)">
                 <form role="form" method="POST" action="<?php echo e(route('login')); ?> ">
                <?php echo csrf_field(); ?>
            <div class="card card-login card-plain">
                <div class="card-header ">
                <div class="text-center">
                    <img src="<?php echo e(asset('assets/img/bag.png')); ?>" style="width: 10em; height: 10em;">
                </div>
                </div>
                <div class="card-body" >
                <div class=" text-warning input-group no-border form-control-lg <?php echo e($errors->has('email') ? ' has-danger' : ''); ?>" >
                    <!-- <span class="text-dark input-group-prepend">
                    <div class="input-group-text border ">
                        <i class=" text-dark now-ui-icons users_circle-08" ></i>
                    </div>
                    </span> -->
                   
                 <!-- <input class="text-dark border form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> " placeholder="<?php echo e(__('Email')); ?>" type="email" name="email" value="<?php echo e(old('email', 'jefronpierce@gmail.com')); ?>" required autofocus> -->
                 
                 <div class="input-group input-group-outline mb-3">
                    <!-- <label class="form-label">Email</label> -->
                    <input type="email" class=" text-light form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> " placeholder="<?php echo e(__('Email')); ?>" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                  </div>


                </div>
                <?php if($errors->has('email')): ?>
                    <span class="invalid-feedback" style="display: block;" role="alert">
                    <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
                <div class="  input-group input-group-outline mb-3 form-control-lg <?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                    <input placeholder="Password" class=" text-light border form-control <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" placeholder="<?php echo e(__('Password')); ?>" type="password"  value="" required>
                <?php if($errors->has('password')): ?>
                    <span class=" text-dark invalid-feedback" style="display: block;" role="alert">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
                </div>
                <div class="text-center ">
                <button  type = "submit" class=" btn btn-lg btn-primary btn-lg w-80 mt-4 mb-0" ><?php echo e(__('Login')); ?></button>
                <!-- <div class="pull-left"> -->
                    <!-- <h6>
                    <strong><a href="<?php echo e(route('register')); ?>" class=" text-dark link footer-link "><?php echo e(__('Create Account')); ?></a></strong>
                    </h6> -->
                <!-- </div> -->
                <div class="pull-right">
                    <h6>
                    <a href="<?php echo e(route('password.request')); ?>"  class=" " style="font-size:12px; color: rgb(0, 58, 134)" ><?php echo e(__('Forgot Password?')); ?></a>
                    </h6>                
                </div>
                </div>
            </div>
            </form>
                </div>
</div>
                <!-- <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
              
                    <a href="../pages/sign-in.html" class="text-primary text-gradient font-weight-bold">Forget password</a>
                  </p>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html><?php /**PATH E:\adra_larav\resources\views/auth/login.blade.php ENDPATH**/ ?>