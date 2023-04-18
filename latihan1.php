<?php 

$conn = mysqli_connect ('localhost','root','','pw_a22100074');

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

$mahasiswa = $rows;

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

    <table border= 1 cellpadding= 10 cellspacing= 0>
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

        <?php foreach($mahasiswa as $m) : ?>
        <tr>
            <td>1</td>
            <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
            <td><?= $m['nrp']; ?></td>
            <td><?= $m['nama']; ?></td>
            <td><?= $m['email']; ?></td>
            <td><?= $m['jurusan']; ?></td>
            <td>
                <a herf="">ubah</a> | <a herf="">hapus</a>
            </td>
        </tr>
        <?php endforeach ; ?>
    
</body>
</html>