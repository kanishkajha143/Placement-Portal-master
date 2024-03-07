<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Placement.AI</title>
  <link href="../img/logo.png" rel="icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/blue.css">

  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <style>
    /* Custom Styles */
    body {
      background-color: #3c8dbc; /* Dark Blue */
      color: #000; /* White */
    }

    .login-logo a {
      color: #fff !important; /* White */
    }

    .login-box-body {
      background-color: #367fa9 !important; /* Blue */
    }

    .btn-primary {
      background-color: #367fa9 !important; /* Blue */
      border-color: #357ca5 !important; /* Dark Blue */
    }

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary.active,
    .open .dropdown-toggle.btn-primary {
      background-color: #3071a9 !important; /* Darker Blue */
      border-color: #285e8e !important; /* Darker Dark Blue */
    }

    #footer {
      background-color: #3c8dbc; /* Dark Blue */
      border-color: #285e8e; /* Dark Dark Blue */
    }

    #footer ul li {
      color: #fff; /* White */
    }
  </style>

</head>

<body class="hold-transition login-page">


  <?php
  include '../uploads/admin_header.php';
  ?>

  <div class="login-box" id="sms">

    <div class="login-logo text-white">
      <a href="../index.php">Placement.AI</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body large">
      <p class="login-box-msg mt-7">Admin Login</p>

      <form action="checklogin.php" method="post">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat transition ease-in-out delay-150 duration-300">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
        <?php
        //If User Failed To log in then show error message.
        if (isset($_SESSION['loginError'])) {
        ?>
          <div>
            <p class="text-center">Invalid Email/Password! Try Again!</p>
          </div>
        <?php
          unset($_SESSION['loginError']);
        }
        ?>

      </form>
    </div>
    <!-- /.login-box-body -->
  </div>

  <footer id="footer" class="text-gray-600 body-font border-t-2 border-gray-700 small mb-0">
    <div class="pt-1 pb-2">
      <ul class="flex space-x-16 justify-center text-white my-4">
        <li><i class="fa fa-copyright" aria-hidden="true"></i>Placement.AI</li>
        <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
        <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
        <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
        <li><i class="fa fa-linkedin" aria-hidden="true"></i></li>
      </ul>
    </div>
  </footer>

  <!-- jQuery 3 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../js/adminlte.min.js"></script>
  <!-- iCheck -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

</body>

</html>
        