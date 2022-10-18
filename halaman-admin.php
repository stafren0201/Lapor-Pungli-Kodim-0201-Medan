<?php
session_start();

if(isset($_SESSION["login"])){
  header("Location: Login.php");
  exit;
}

require 'function.php';

$pengguna2 = query("SELECT * FROM pengguna2");


//koneksi ke database
//$conn = mysqli_connect("localhost", "root", "", "multilevel");

// cek username sudah ada atau belum
//$result = mysqli_query($conn, "SELECT * FROM pengguna2");

// ambil data (fetch) pengguna2 dari objek result
// mysqli_fetch_row()
// mysqli_fetch_assoc()
// mysqli_fetch_array()
// mysqli_fetch_object($result)

//while($gun2 = mysqli_fetch_assoc($result)) {
  //      var_dump($gun2);
 //  }

?>
<!DOCTYPE html>
<html>
<head>

    <title>Halaman Admin</title>

</head>
<body>
    <h4>Form Data Laporan Pungli di Aplikasi Lapor Pungli Kodim 0201/Medan</h4>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Nama Pelapor</th>
        <th>Tempat lahir</th>
        <th>Tgl lahir</th>
        <th>NIK</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
        <th>Nomor HP/ Telepon</th>
        <th>Email</th>
        <th>Lapor Pungli</th>
        <th>Nama</th>
        <th>Pangkat</th>
        <th>NRP/NIP</th>
        <th>Kesatuan</th>
        <th>Foto</th>
        <th>Video</th>
        <th>Rekaman</th>
        <th>Saran</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach( $pengguna2 as $row): ?>
    <tr>
    <td><?= $i; ?></td>
    <td><?= $row["namapelapor"]; ?></td>
    <td><?= $row["tempatlahir"]; ?></td>
    <td><?= $row["tgllahir"]; ?></td>
    <td><?= $row["nik"]; ?></td>
    <td><?= $row["alamatt"]; ?></td>
    <td><?= $row["pekerjaan"]; ?></td>
    <td><?= $row["nomorhp"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["laporpungli"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["pangkat"]; ?></td>
    <td><?= $row["nrpnips"]; ?></td>
    <td><?= $row["kesatuans"]; ?></td>
    <td><img src="img/<?= $row["Foto"];?>" width="50"></td>
    <td><img src="video/<?= $row["Video"];?>" width="50"></td>
    <td><img src="img/<?= $row["Rekaman"];?>" width="50"></td>
    <td><?= $row["saran"]; ?></td>

    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>



</body>
</html>