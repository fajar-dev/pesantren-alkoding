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
        <title>Register | Pesantren Al-koding</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 pt-5 pb-5">
                    <div class="card box">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h1 class="p-3">Register</h1>
                                    <hr>
                                </div>
                            </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-5">
                                        <div class="card box2">
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="assets/img/user.svg" class="img-fluid pt-4 pb-4" alt="..." width="120px;">
                                                    <h3>Register</h3>
                                                </div>
                                                <form class="needs-validation register" method="POST" novalidate>
                                                <div class="form-row row mt-3">
                                                    <label class="mb-2">Daftar Sebagai:</label>
                                                        <div class="col-4 mb-0">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="level" value="murid" id="flexRadioDefault1" checked>
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Murid
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 mb-0">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="level" value="guru" id="flexRadioDefault2">
                                                                <label class="form-check-label" for="flexRadioDefault2">
                                                                    Guru
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mt-3">
                                                        <label for="validationCustom01">Nama :</label>
                                                        <input type="text" name="name" class="form-control" onkeydown="return /[a-z, ]/i.test(event.key)" id="validationCustom01" placeholder="Your name ..." required>
                                                        <div class="valid-feedback">
                                                            Berhasil!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Hanya diperbolehkan huruf dan spasi
                                                        </div>
                                                    </div>
                                                    <div class="form-row mt-3">
                                                        <label for="validationCustom01">Email :</label>
                                                        <input type="email" name="email" class="form-control" id="validationCustom02" placeholder="Your Email ..." required>
                                                        <div class="valid-feedback">
                                                            berhasil!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Masukan email yang Valid <br> e.g example@mail.com
                                                        </div>
                                                    </div>
                                                    <div class="form-row mt-3">
                                                        <label for="validationCustom01">No. HP/WA :</label>
                                                        <input type="number" name="nomor" class="form-control" id="validationCustom02" placeholder="No. HP/WA" required>
                                                        <div class="valid-feedback">
                                                            berhasil!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Hanya di perbolehkan karakter angka
                                                        </div>
                                                    </div>
                                                    <div class="form-row row mt-3">
                                                        <div class="col-lg-6 mb-3">
                                                            <label for="validationCustom03">Tanggal Lahir :</label>
                                                            <input type="date"  name="bod" class="form-control" id="validationCustom03" placeholder="City" required>
                                                            <div class="valid-feedback">
                                                                Berhasil!
                                                            </div>
                                                            <div class="invalid-feedback">
                                                                Masukan tanggal lahir kamu
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 mb-3">
                                                            <label for="inputState">Jenis Kelamin :</label>
                                                            <select id="inputState" name="gender" class="form-control">
                                                                <option disabled>Select</option>
                                                                <option value="pria">Pria</option>
                                                                <option value="wanita">Wanita</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-row mt-3">
                                                        <label for="validationCustom01">Username :</label>
                                                        <input type="text" name="username" class="form-control" minlength="4"  id="validationCustom02" placeholder="Your Username ..." required>
                                                        <div class="valid-feedback">
                                                            Berhasil!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                            Masukan setidaknya 4 karakter
                                                        </div>
                                                    </div>
                                                    <div class="form-row mt-3">
                                                        <label for="validationCustom01">Password :</label>
                                                        <input type="password" name="password" class="form-control" minlength="8"  id="validationCustom02" placeholder="Your Password ..." required>
                                                        <div class="valid-feedback">
                                                        Berhasil!
                                                        </div>
                                                        <div class="invalid-feedback">
                                                        Masukan minimal 8 karakter huruf atau angka
                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <div class="form-check">
                                                        <input class="form-check-input" name="terms" type="checkbox" value="" id="invalidCheck" required>
                                                        <label class="form-check-label" for="invalidCheck">
                                                            Saya mengerti dan setuju dengan Ketentuan Penggunaan dan Kebijakan Privasi
                                                        </label>
                                                        <div class="invalid-feedback">
                                                            kamu harus menyetujui ketentuan pengguna.
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" name="submit" class="btn btn-light m-3 mt-5" value="submit">Daftar <i class="fa fa-sign-in" aria-hidden="true"></i> </button>
                                                    </div>
                                                </form>
                                                    <?php
                                                        if (isset($_POST['submit'])) {
                                                            include 'db/koneksi.php';
                                                            $status = $_POST['level'];
                                                            $nama = $_POST['name'];
                                                            $email = $_POST['email'];
                                                            $nomor = $_POST['nomor'];
                                                            $lahir = $_POST['bod'];
                                                            $kelamin = $_POST['gender'];
                                                            $username = $_POST['username'];
                                                            $password = md5($_POST['password']);
                                                            $cek_login = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username'"));

                                                            if ( $cek_login > 0 ){
                                                                echo "<script>
                                                                    alert('Username telah digunakan !!');
                                                                    </script>";
                                                            } else{
                                                                $query = mysqli_query($koneksi, "INSERT INTO tbl_user(id, nama, email, nomor, lahir, kelamin, username, password, status) VALUES ('', '$nama', '$email', '$nomor', '$lahir', '$kelamin', '$username', '$password', '$status')");
                                                                echo "<script>
                                                                document.location.href = 'login.php?sukses';
                                                                </script>";
                                                            }
                                                        }
                                                    ?>
                                            </div>
                                        </div>
                                        <p class="pt-3 text-center">Sudah Punya Akun? <a href="login.php">Login</a></p>
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
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
                })
            })()
        </script>
    </body>
</html>
