<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Admin</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container" >
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="padding-right: 20px; color:white;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">
                            Inputan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="?menu=input_distributor">Input Distributor</a></li>
                            <li><a class="dropdown-item" href="?menu=input_buku">Input Buku</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="padding-right: 20px; color:white;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">
                        Tambah
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="?menu=input_pasok">Input Pasok Buku</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color:white;">
                            Laporan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="?menu=semua_data_buku">Semua Data Buku</a></li>
                            <li><a class="dropdown-item" href="?menu=filter_penulis">Filter Penulis Buku</a></li>
                            <li><a class="dropdown-item" href="?menu=filter_pasok">Filter Pasok Buku</a></li>
                            <li><a class="dropdown-item" href="?menu=pasok_buku">Pasok Buku</a></li>
                            <li><a class="dropdown-item" href="?menu=buku_sering_terjual">Buku yang Sering Terjual</a></li>
                            <li><a class="dropdown-item" href="?menu=buku_tidak_terjual">Buku yang Tidak Pernah Terjual</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <ul class="nav navbar-expand-lg justify-content-end ">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">
                                Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="?menu=ubah_pass">Ubah Password</a></li>
                            </ul>
                        </li>
                        <li class="nav-right">
                            <a class="nav-link" aria-current="page" href="../login.php" style="color:white;"onclick="return confirm('Anda Yakin Ingin Keluar?')">Logout</a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </nav>
    <aside>
        <div class="box" >
            <img src="../img/buku.jpg" height="250px" width="250px">
            <div class="text-center mt-3">
                <h2 class="">Toko Buku Aba</h2>
                Jl. Seuseupan II Permata
            </div>
        </div>
    </aside>
    <br>
    <?php 
        switch(@$_GET['menu']){
            case 'input_distributor';
            include 'inputan/input_distributor.php';
            break;

            case 'input_buku';
            include 'inputan/input_buku.php';
            break;

            case 'input_pasok';
            include 'tambah/input_pasok.php';
            break;

            case 'semua_data_buku';
            include 'laporan/semua_data_buku.php';
            break;

            case 'filter_penulis';
            include 'laporan/filter_penulis.php';
            break;

            case 'filter_pasok';
            include 'laporan/filter_pasok.php';
            break;

            case 'pasok_buku';
            include 'laporan/pasok_buku.php';
            break;

            case 'buku_sering_terjual';
            include 'laporan/buku_sering_terjual.php';
            break;

            case 'buku_tidak_terjual';
            include 'laporan/buku_tidak_terjual.php';
            break;

            case 'ubah_pass';
            include '../ubah_pass.php';
            break;
                
            break;
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tableAll').DataTable();
        } );
    </script>
</body>
</html>