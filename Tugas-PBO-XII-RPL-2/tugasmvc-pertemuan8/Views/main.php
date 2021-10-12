<html>

<head>
    <title>Aplikasi Pembayaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<style>
    body {
        background-image: url('https://www.pngmagic.com/product_images/light-blue-backgrounds-images-free-download-photos-and-vectors.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="main.php">TUGAS PBO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_s') ?>">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_k') ?>">Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_sp') ?>">Spp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_pet') ?>">Petugas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="main.php?menu=<?php echo base64_encode('id_pem') ?>">Pembayaran</a>
                </li>

            </ul>
        </div>
    </nav>

    <br>

    <div class="container-fluid">
        <?php
        if (isset($_GET['menu'])) {
            $id = base64_decode($_GET['menu']);
        } else {
            $id = "";
        }

        if ($id == 'id_k') {
            include('View_kelas.php');
        } elseif ($id == 'id_po_k') {
            include('View_post_kelas.php');
        } elseif ($id == 'id_pu_k') {
            include('View_put_kelas.php');
        } elseif ($id == 'id_s') {
            include('View_siswa.php');
        } elseif ($id == 'id_po_s') {
            include('View_post_siswa.php');
        } elseif ($id == 'id_pu_s') {
            include('View_put_siswa.php');
        } elseif ($id == 'id_sp') {
            include('View_spp.php');
        } elseif ($id == 'id_po_sp') {
            include('View_post_spp.php');
        } elseif ($id == 'id_pu_sp') {
            include('View_put_spp.php');
        } elseif ($id == 'id_pet') {
            include('View_petugas.php');
        } elseif ($id == 'id_po_pet') {
            include('View_post_petugas.php');
        } elseif ($id == 'id_pu_pet') {
            include('View_put_petugas.php');
        } elseif ($id == 'id_pem') {
            include('View_pembayaran.php');
        } elseif ($id == 'id_po_pem') {
            include('View_post_pembayaran.php');
        } elseif ($id == 'id_pu_pem') {
            include('View_put_pembayaran.php');
        } else {
            include('Home.php');
        }
        ?>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>