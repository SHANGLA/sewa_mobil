<?php
session_start();
if(!isset($_SESSION['login'])){
  header("Location: http://localhost/sarpra/login");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="http://localhost/sarpra/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/sarpra/aset/fontawesome/css/all.min.css">

    <title>Sarana Prasarana</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
  <a class="navbar-brand" href="index.php"><i class="fas fa-tools"></i> SARPRA | Welcome Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Option
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="http://localhost/sarpra/index.php">Main Menu</a>
          <a class="dropdown-item" href="http://localhost/sarpra/inventaris/index.php">Inventaris</a>
          <a class="dropdown-item" href="http://localhost/sarpra/pegawai/index.php">Pegawai</a>
          <a class="dropdown-item" href="http://localhost/sarpra/transaksi/index.php">Transaksi</a>
          <a class="dropdown-item" href="http://localhost/sarpra/login/logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
    
</body>
</html>
