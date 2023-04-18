<?php 

require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h3>Daftar Mahasiswa</h3>

    <a herf="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <table border= 1 cellpadding= 10 cellspacing= 0>
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <?php $i =1;
        foreach($mahasiswa as $m) : ?>
        <tr>
            <td>1</td>
            <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
            <td><?= $m['nama']; ?></td>
            <td>
                <a herf="detail.php?id=<?= $m['id']; ?>">Lihat Detail</a>
            </td>
        </tr>
        <?php endforeach ; ?>
    
</body>
</html>