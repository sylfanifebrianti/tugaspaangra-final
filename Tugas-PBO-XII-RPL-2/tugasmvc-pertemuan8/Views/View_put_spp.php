<?php

// Memanggil fungsi dari CSRF
include('../Config/Csrf.php');

include '../Controllers/Controller_spp.php';
// Membuat Object dari Class spp
$spp = new Controller_spp();
$id_spp = base64_decode($_GET['id_spp']);
$GetSpp = $spp->GetData_Where($id_spp);
?>

<html>

<head>
    <title>Aplikasi Pembayaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">



</head>

<style>
    body {
        background-color: lightblue;
        height: auto;
    }
</style>

<body>


    <?php
    foreach ($GetSpp as $Get) {
    ?>

        <form action="../Config/Routes.php?function=put_spp" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo CreateCSRF(); ?>" />
            <table border="1">
                <input type="hidden" name="id_spp" value="<?php echo $Get['id_spp']; ?>">
                <tr>
                    <td>Tahun</td>
                    <td><input type="text" name="tahun" value="<?php echo $Get['tahun']; ?>"></td>
                </tr>
                <tr>
                    <td>Nominal</td>
                    <td><input type="text" name="nominal" value="<?php echo $Get['nominal']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2" align="right"><input type="submit" name="proses" value="Create"></td>
                </tr>
            </table </form>

        <?php
    }
        ?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>