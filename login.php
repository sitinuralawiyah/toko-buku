<?php
include 'config/koneksi.php';
include 'library/controller.php';

$tabel = 'tbl_user';
@$username = $_POST['user'];
@$password = $_POST['pass'];
@$akses = $_POST['akses'];

$go = new Controller();

if (isset($_POST['login'])) {
    $go->login($con, $tabel, $username, $password, $akses);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <title>Login</title>
  </head>
  <body>
    <div class="container" style="margin-top: 7%; margin-left: 30%;">
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h3 class="card-title text-center">Form Login</h3>
                <hr>
                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="text" name="user" class="form-control" id="exampleFormControlInput1" placeholder="username" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="pass" class="form-control" id="exampleFormControlInput1" placeholder="password" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-control input-lg" name="akses" value="akses" required>
                            <option value="" selected disabled></option>
                            <option>Admin</option>
                            <option>Manager</option>
                            <option>Kasir</option>
                        </select>
                    </div>
                    <div class="d-grid gap-2 mb-4 pt-3">
                        <button class="btn btn-primary" type="submit" name="login" value="LOGIN">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>