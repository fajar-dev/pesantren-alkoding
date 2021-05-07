<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <meta name="description" content="Sistem informasi akademi Pesantren Al-koding">
        <title>Log In | Pesantren Al-koding</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 pt-5 pb-5">
                    <div class="card box">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h1 class="p-3">Pesantren Al-koding</h1>
                                    <hr>
                                </div>
                            </div>
                            <div class="row text-center justify-content-center">
                                <div class="col-lg-5">
                                    <div class="card box2">
                                        <div class="card-body">
                                            <img src="assets/img/user.svg" class="img-fluid pt-4 pb-4" alt="..." width="120px;">
                                            <h3>Login</h3>

                                                <?php
                                                    if(isset($_GET['sukses'])){
                                                        echo '<div class="alert alert-success mt-5 alert-dismissible fade show pull-start" role="alert">
                                                                <strong>Registrasi Berhasil</strong>, silahkan login !
                                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                            </div>';
                                                    }elseif(isset($_GET['gagal'])){
                                                        echo '<div class="alert alert-danger mt-5 alert-dismissible fade show pull-start" role="alert">
                                                                Maaf !! <strong> Username </strong> atau <strong>Password</strong> Yang anda masukan salah !
                                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                            </div>';
                                                    }
                                                ?>
                                            
                                            <form method="POST">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                                                    <label for="floatingInput">Username</label>
                                                </div>
                                                <div class="form-floating">
                                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                                                    <label for="floatingPassword">Password</label>
                                                </div>
                                                <button type="submit" name="submit" class="btn btn-light m-3 mt-5">Masuk <i class="fa fa-sign-in" aria-hidden="true"></i> </button>
                                            </form>
                                            <?php
                                                if (isset($_POST['submit'])) {
                                                    session_start();
                                                    include 'db/koneksi.php';
                                                    $username =  mysqli_real_escape_string($koneksi,$_POST['username']); 
                                                    $password = md5($_POST['password']);
                                                    $data = mysqli_query($koneksi,"select * from tbl_user where username='$username' and password='$password'");
                                                    $cek = mysqli_num_rows($data);
                                                    if($cek > 0){
                                                        $hasil = mysqli_fetch_array($data);
                                                        $_SESSION['username'] = $username;
                                                        $_SESSION['nama'] = $hasil['nama'];
                                                        $_SESSION['level'] = $hasil['status'];
                                                        $_SESSION['username'] = $username;

                                                        $_SESSION['status'] = "login";
                                                        header("location: page/home.php");
                                                    }else{
                                                        echo "<script>
                                                        document.location.href = 'login.php?gagal';
                                                        </script>";
                                                    }
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <p class="pt-3 daftar">Belum punya akun? <a href="register.php">DAFTAR</a></p>
                                </div>
                            </div>
                            </div>         
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        -->
    </body>
</html>
