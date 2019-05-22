<?php
session_start();
?>
<?php if(isset($_SESSION["session_karyawan"])): ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ADMIN CaRental</title>
        <!-- Load bootstrap css -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Load jquery and bootstrap js -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </head>
    <body>
        <nav class="navbar-expand-md bg-danger navbar-dark sticky-top">
            <a href="#" class="text-white">
                <h3>CaRental</h3>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
                <span class="navbar navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="template_karyawan.php?page=pelanggan" class="nav-link">Pelanggan</a></li>
                    <li class="nav-item"><a href="template_karyawan.php?page=karyawan" class="nav-link">Karyawan</a></li>
                    <li class="nav-item"><a href="template_karyawan.php?page=mobil" class="nav-link">Mobil</a></li>
                    <li class="nav-item"><a href="template_karyawan.php?page=laporan" class="nav-link">Laporan Transaksi</a></li>
                    <li class="nav-item"><a href="proses_login_karyawan.php?logout=true" class="nav-link">Logout</a></li>
                  </ul>
                <h4 class= "text-white">Hello, <?php echo $_SESSION["session_karyawan"]["nama_karyawan"];?> !</h4>
            </div>
        </nav>
        <div class="container my-2">
            <?php if(isset($_GET["page"])): ?>
                <?php if ((@include $_GET["page"].".php") === true): ?>
                    <?php include$_GET["page"].".php"; ?>

                <?php endif; ?>
            <?php endif; ?>
    </body>
</html>
<?php else: ?>
    <?php header("location:login_karyawan.php"); ?>
        

<?php endif; ?>