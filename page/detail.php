<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    die();
}
include '../db/koneksi.php';
error_reporting(0);
$id = intval($_GET['id']);
$query  = mysqli_query($koneksi, "SELECT * FROM tbl_kelas WHERE id = {$id}");
$data = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail | Al-koding</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>
<body class="sidebar-mini sidebar-collapse">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Pesantren Al-Koding</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo ucwords($_SESSION['nama']); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="home.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Kelas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="kelas.php" class="nav-link text-primary">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Kelas</p>
                </a>
              </li>

                <?php
                  if(($_SESSION['level']) == 'guru') {
                    echo'<li class="nav-item">
                    <a href="kelas-saya.php" class="nav-link text-info">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kelas Saya</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="tambah-kelas.php" class="nav-link text-warning">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tambah Kelas</p>
                    </a>
                  </li>';
                }
                ?>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Kelas</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-4">
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <h3 class="text-center">Detail Kelas</h3>
                  <ul class="list-group list-group-unbordered mt-5 mb-3">
                    <li class="list-group-item">
                      <b>Materi :</b> <a class="float-right"><?php echo htmlentities($data['materi']) ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Guru :</b> <a class="float-right"><?php echo htmlentities($data['pemateri']) ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Tanggal :</b> <a class="float-right"> <?php echo htmlentities($data['tanggal']) ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Pukul :</b> <a class="float-right"><?php echo htmlentities($data['wkt_mulai']) ?> - <?php echo htmlentities($data['wkt_selesai']) ?></a>
                    </li>
                    <li class="list-group-item">
                      <b>Alamat :</b> <a class="float-right"><?php echo htmlentities($data['alamat']) ?></a>
                    </li>
                  </ul>
                </div>
                <!-- /.card-body -->
              </div>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Deskripsi kelas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <p>
                <?php echo htmlentities($data['deskripsi']) ?>
                </p>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-primary">
              <div class="card-body text-center">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe src="https://maps.google.com/maps?q=<?php echo htmlentities($data['latitude']) ?>,<?php echo htmlentities($data['longitude'])?>&output=embed"></iframe>
                </div>
              </div>
            </div><!-- /.card -->
          </div> 

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>2021 &copy;Pesantren Al-koding</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>

</body>
</html>
      