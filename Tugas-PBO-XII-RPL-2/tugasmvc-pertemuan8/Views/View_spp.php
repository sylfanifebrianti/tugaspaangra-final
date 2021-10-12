<?php

include '../Controllers/Controller_spp.php';
// Membuat Object dari Class spp
$spp = new Controller_spp();
$GetSpp = $spp->GetData_All();

// untuk mengecek di object $siswa ada berapa banyak Property
// echo var_dump($kelas);
?>


<h1>OOP - Class, Object, Property, Method With <u>MVC</u></h1>
<h2>CRUD and CSRF</h2>

<h3>Table Spp</h3>
<h3><a class="btn btn-primary" href="View_post_spp.php">Add Data</a></h3>


<table class="table table-bordered" border="1">
    <tr class="table-primary">
        <th>No</th>
        <th>Tahun</th>
        <th>Nominal</th>
        <th>Tools</th>
    </tr>
    <?php
    // Decision validation variabel
    if (isset($GetSpp)) {
        $no = 1;
        foreach ($GetSpp as $Get) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $Get['tahun']; ?></td>
                <td><?php echo $Get['nominal']; ?></td>
                <td>
                    <a href="../Views/View_put_spp.php?id_spp=<?php echo base64_encode($Get['id_spp']) ?>"><img src="https://banner2.cleanpng.com/20190731/hfl/kisspng-zayn-malik-5d414e3501b3d9.178886101564560949007.jpg" width="17"></a>
                    <button onclick="konfirmasi(<?php echo $Get['id_spp'] ?>)">Delete</button>
                </td>
            </tr>
    <?php
        }
    }
    ?>
</table>
<script>
    function konfirmasi(id_spp) {
        if (window.confirm("Apakah anda ingin menghapus data ini?")) {
            window.location.href = '../Config/Routes.php?function=delete_spp&id_spp=<?php echo base64_encode($Get['id_spp']) ?>';
        };
    }
</script>