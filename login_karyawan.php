<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN KARYAWAN</title>
    <!-- Load bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Load jquery and bootstrap js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </head>
  <body style="background: url('2.jpg') no-repeat;background-size:cover;">
    <div class="container my-5">
      <div class="row justify-content-center align-items-center">
        <div class="card col-sm-6">
          <form action="proses_login_karyawan.php" method="post">
            <div class="card-header">
              <h3>Login Karyawan Sewa Mobil</h3>
            </div>
            <div class="card-body">
              <?php if (isset($_SESSION["message"])) : ?>
                <div class="alert alert-<?=($_SESSION["message"]["type"])?>">
                  <?php echo $_SESSION["message"]["message"]; ?>
                  <?php unset($_SESSION["message"]); ?>
                </div>
              <?php endif; ?>
              <input type="text" name="username" class="form-control mb-2" placeholder="Username..." required>
              <input type="password" name="password" class="form-control mb-2" placeholder="Password..." required>
              <button type="submit" class="btn btn-danger btn-block">
                LOGIN
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
