<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    die();
}else if(($_SESSION['level']) == 'murid') {
  header("Location: home.php");
}
require '../db/koneksi.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Al-koding | Tambah Kelas</title>

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
                      <a href="tambah-kelas.php" class="nav-link text-warning active">
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
            <h1 class="m-0">Tambah Kelas</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Kelas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Materi</label>
                    <input type="text" class="form-control" name="materi" id="exampleInputEmail1" placeholder="Nama Materi" Required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">tanggal</label>
                    <input type="date" class="form-control" name="tanggal" id="exampleInputEmail1" placeholder="Tanggal Kelas" Required>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Waktu Mulai</label>
                        <input type="time" name="mulai" class="form-control" Required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Waktu Selesai</label>
                        <input type="time" name="selesai" class="form-control" Required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">alamat</label>
                    <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" placeholder="Alamat Kelas" Required>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Koordinat latidtu</label>
                        <input type="text" name="latitude" class="form-control" placeholder="Koordianat Latitude lokasi" Required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>koordinat longitude</label>
                        <input type="text" name="longitude" class="form-control" placeholder="Koordinat Logitude lokasi" Required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi Kelas</label>
                    <textarea name="deskripsi" class="form-control" rows="3" placeholder="Deskripsi Kelas" Required></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
                    <?php 
                      if(isset($_POST['submit'])) {
                        require '../db/koneksi.php';
                        $tgl_buat = date("Y-m-d H:i:s");
                        $pemateri = $_SESSION['nama'];
                        $materi =  mysqli_real_escape_string($koneksi,$_POST['materi']);
                        $tanggal = $_POST['tanggal'];
                        $mulai = $_POST['mulai'];
                        $selesai = $_POST['selesai'];
                        $alamat =  mysqli_real_escape_string($koneksi,$_POST['alamat']);
                        $deskripsi =  mysqli_real_escape_string($koneksi,$_POST['deskripsi']);
                        $latitude =  mysqli_real_escape_string($koneksi,$_POST['latitude']);
                        $longitude =  mysqli_real_escape_string($koneksi,$_POST['longitude']);

                        $sql = mysqli_query($koneksi, "INSERT INTO tbl_kelas (id, tgl_buat, pemateri, materi, deskripsi, tanggal, wkt_mulai, wkt_selesai, alamat, latitude, longitude) VALUES ('', '$tgl_buat', '$pemateri', '$materi', '$deskripsi', '$tanggal', '$mulai', '$selesai', '$alamat', '$latitude', '$longitude')");
                      if($sql) {
                        echo "
                          <script>
                          document.location.href = 'kelas-saya.php?sukses';       
                          </script>";    
                        }else{
                          echo "
                          <script>
                          document.location.href = 'tambah-kelas.php?gagal';       
                          </script>";    
                        }
                      }
                    ?>     
            </div>
            <!-- /.card -->
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
