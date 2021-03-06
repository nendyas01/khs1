<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
  <base href="<?php echo base_url(); ?>">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login User</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="assets/plugins/iCheck/icheck.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href=""><strong>Login</strong> PLN UID Jaya</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <?= $this->session->flashdata('message'); ?>

      <form action="<?= base_url('login/cekuser') ?>" id="masuk" method="post">
        <div class="form-group has-feedback">
          <!-- <input type="text" name="nama" class="form-control" placeholder="username"> saya komen ya biar buat dibandingkan , ini code yang lama -->
          <input type="text" name="USERNAME" class="form-control" placeholder="username">
          <!-- jadi name itu harus sama , sama yang dikirim ke controllernya -->
          <!-- di sini kamu menset usernamenya , namenya = nama , harusnya itu USERNAME -->
          <!-- jadi harus diganti , disamain sama parameter yang kamu kirim ke controllernya , kita ubah jadi USERNAME-->
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <!-- input type="password" name="id" class="form-control" placeholder="Password"> ini juga sama harus disamain kayak parameter yang kamu kirim -->
          <input type="password" name="PASSWORD" class="form-control" placeholder="Password">

          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div>


      </form>
      <!-- /.col -->
      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary ">Sign In</button>
      </div>

      <!-- /.col -->
    </div>
    </form>

    <script type="text/javascript">
      $(document).ready(function() {
        $("#masuker").on('submit', function(e) {
          e.preventDefault();
          $.ajax({
            url: $(this).attr('action'),
            type: 'post',
            data: $(this).serialize(),
            dataType: "html",
            success: function(dt) {
              if (dt == 0) {
                Swal.fire(
                  'Informasi',
                  'Incorrect username or password!',
                  'warning'
                )
              } else {
                window.location = dt
              }
            }
          });
        });
      });
    </script>

    <div class="text-center">
      <a class="small" href="https://api.whatsapp.com/send?phone=6287872925880&text=Saya%20lupa%20password">Forgot Password?</a>
    </div>
    <div class="text-center">
      <a class="small" href="<?= base_url('registrasi'); ?>">Create an Account!</a>
    </div>

  </div>
  <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 3 -->

  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
</body>

</html>