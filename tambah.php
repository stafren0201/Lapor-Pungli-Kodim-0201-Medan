<?php
session_start();

if( !isset($_SESSION["login"])){
  header("Location: Login.php");
  exit;
}

require 'function.php';
//koneksi ke database
//$conn = mysqli_connect("localhost", "root", "", "multilevel");

//cek apakah tombol submit udah dipencet atau belum
if(isset($_POST["submit"])) {

// di hapus krn di function sudah dibuat
// cek apakah data berhasil ditambahlan atau tidak
//if(mysqli_affected_rows($conn) > 0 ) {
  //  echo "Berhasil ditambahkan";
//}else {
  //  echo "gagal";
   // echo "<br>";
  //  echo mysqli_error($conn);
//}

// cek data berhasil ditambahkan atau tidak
if(tambah($_POST) > 0 ) {
    echo "<script>
    alert('Data berhasil ditambahkan');
    document.location.href='index.php';
    </script>";
}else {
    echo "<script>
    alert('Data belum berhasil ditambahkan');
    document.location.href='tambah.php';
    </script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylee.css"/>
    <title>tambah data lapor</title>

    <style>
*{
  box-sizing: border-box;
  list-style-type: none;
  font-family:Helvetica;

}
.lapor{
  padding-top: 70px;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 10px 10px 10px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

.col-25 {
  float: left;
  width: 100%;
  margin-top: 4px;
}

.col-75 {
  float: left;
  width: 100%;
  margin-top: 4px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.column{
  color: white;
  padding: 2px 2px;
  border-radius: 4px;
  cursor: pointer;
  justify-content: space-evenly;
  background-color:  rgba(161, 159, 159, 0.65);
}
.col-75lahir{
  float: left;
  width: 60%;
  margin-top: 6px;
}

.data{
  background-color:  rgba(161, 159, 159, 0.486);;
  padding: 5%;
}


</style>
</head>
<body>
<!-- navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm fixed-top">
    <div class="container-fluid">
        <img src="BB.png" class="avatar" Style="height:50px"></img>
      <a class="navbar-brand" href="#" id="glow" Style="font-size: 30px; font-weight: 600">KODIM 0201/MEDAN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tambah.php">Lapor Pungli</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="Dropright">
              Informasi Staf
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="manajemen.php">Manajemen</a></li>
              <li><a class="dropdown-item" href="Operasional.php">Operasional</a></li>
              <li><a class="dropdown-item" href="SDM.php">SDM</a></li>
              <li><a class="dropdown-item" href="Logistik.php">Logistik</a></li>
              <li><a class="dropdown-item" href="Teritorial.php">Teritorial</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<!-- akhir navbar -->

<form action="" method="POST">
<section class="lapor">
<div class="container">
<h2>Silahkan melengkapi data diri anda:</h2>
  <div class="data">
    <ul>
        <li>
            <div class="datalaporan">
            <div class="row">
             <div class="col-25">
             <label for="namapelapor">Nama Pelapor</label>
             </div>
            <div class="col-75">
             <input type="text" id="namapelapor" name="namapelapor" placeholder="Masukkan Nama Pelapor">
             </div>
             </div>
            <div class="row">
            <div class="col-25">
            <label for="tempatlahir">Tempat lahir</label>
            </div>
            <div class="col-75lahir">
            <input type="text" id="tempatlahir" name="tempatlahir" placeholder="Masukkan Tempat lahir">
            </div>
            </div>

            <div class="row">
            <div class="col-25">
            <label for="tgllahir">Tgl lahir</label>
            </div>
            <div class="col-75lahir">
            <input type="date" id="tgllahir" name="tgllahir" placeholder="Masukkan Tempat/Tgl lahir">
            </div>
            </div>

            <div class="row">
            <div class="col-25">
            <label for="nik">NIK</label>
            </div>
            <div class="col-75">
            <input type="text" id="nik" name="nik" placeholder="Masukkan NIK">
            </div>
            </div>
            <div class="row">
            <div class="col-25">
            <label for="jeniskelamin">Jenis Kelamin</label>
            </div>
            <div class="col-75">
            <input type="text" id="jeniskelamin" name="jeniskelamin" placeholder="Masukkan Jenis Kelamin">
            </div>
            </div>
           
            <div class="row">
            <div class="col-25">
            <label for="alamatt">Alamat</label>
            </div>
            <div class="col-75"  style="width:100%">
            <input type="text" id="alamatt" name="alamatt" placeholder="Masukkan alamat">
            </div>
            </div>
    
            <div class="row">
            <div class="col-25">
            <label for="pekerjaan">Pekerjaan</label>
            </div>
            <div class="col-75">
            <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Masukkan pekerjaan">
            </div>
            </div>

            <div class="row">
            <div class="col-25">
            <label for="nomorhp">Nomor HP/ Telepon</label>
            </div>
            <div class="col-75">
            <input type="phone" id="nomorhp" name="nomorhp" placeholder="Masukkan Nomor HP/ Telepon">
            </div>
            </div>

            <div class="row">
            <div class="col-25">
            <label for="email">Email</label>
            </div>
            <div class="col-75">
            <input type="email" id="email" name="email" placeholder="Masukkan Email">
            </div>
            </div>
<h5 style="padding-top:25px">Laporkan setiap tindakan Pungli yang anda temukan disekitar anda dengan melengkapi data yang akan anda laporkan sebagai berikut: </h5>

            <div class="row">
            <div class="col-25">
            <label for="laporpungli">Lapor Masalah Pungli</label>
            </div>
            <div class="col-75">
            <input type="text" id="laporpungli" name="laporpungli" placeholder="Masukkan Lapor Masalah Pungli">
            </div>
            </div>
    
            <div class="row">
            <div class="col-25">
            <label for="nama">Nama</label>
            </div>
            <div class="col-75">
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama orang yang akan dilaporkan">
            </div>
            </div>
    
            <div class="row">
            <div class="col-25">
            <label for="pangkat">Pangkat</label>
            </div>
            <div class="col-75">
            <input type="text" id="pangkat" name="pangkat" placeholder="Masukkan Pangkat">
            </div>
            </div>
    
            <div class="row">
            <div class="col-25">
            <label for="nrpnips">NRP/NIP</label>
            </div>
            <div class="col-75">
            <input type="text" id="nrpnips" name="nrpnips" placeholder="Masukkan NRP/NIP">
            </div>
            </div>

            <div class="row">
            <div class="col-25">
            <label for="kesatuans">Kesatuan</label>
            </div>
            <div class="col-75">
            <input type="text" id="kesatuans" name="kesatuans" placeholder="Masukkan kesatuan">
            </div>
            </div>
    
            <div class="row">
            <div class="col-25">
            <label for="foto">Foto </label>
            </div>
            <div class="col-75">
   
            <input type="file" id="foto" name="foto">

            </div>
            </div>
    
            <div class="row">
            <div class="col-25">
            <label for="video">Video </label>
            </div>
            <div class="col-75">
   
            <input type="file" id="video" name="video">

            </div>
            </div>
    
            <div class="row">
            <div class="col-25">
            <label for="rekaman">Rekaman </label>
            </div>
            <div class="col-75">
       
            <input type="file" id="rekaman" name="rekaman">

            </div>
            </div>
    
            <div class="row">
            <div class="col-25">
            <label for="sumber">Sumber Pelapor</label>
            </div>
            <div class="col-75">
                <select id="country" name="country">
                <option value="pilih">Silahkan di pilih</option>
                <option value="tni">TNI</option>
                <option value="pns">PNS</option>
                <option value="kbt">Keluarga Besar TNI</option>
                <option value="pensiun">Pensiunan TNI</option>
                <option value="polri">POLRI</option>
                <option value="masyarakt">Masyarakat</option>
                </select>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
            <label for="subject">Kronologi Kejadian</label>
            </div>
            <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Ceritakan Kejadian Pungli yang anda temukan di sekitar anda dengan melaporkan kejadian dengan melengkapi bukti-bukti yang lengkap!" style="height:50px"></textarea>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
            <label for="saran">Saran</label>
            </div>
            <div class="col-75">
        <textarea id="saran" name="saran" placeholder="Masukkan saran anda" style="height:50px"></textarea>
            </div>
            </div>
            </div>
    <p>Terimakasih sudah melaporkan masalah Pungutan Liar disekitar anda, kami akan segera memproses laporan anda! Tetap semangat dan sehat selalu!</p>
    </li>
    </ul>
  </div>
  </div>
  </section>


   <div class="column">
   <div class="container text-center"; style="background-color: rgba(161, 159, 159, 0.486);">
  <div class="row justify-content-evenly">
    <div class="col-4">
    <a class="btn btn-primary" href="Login.php" role="button">Cancel</a>
  </div>
    <div class="col-4">
    <input class="btn btn-primary" type="submit" name="submit" value="Kirim">
    </div>
  </div>
</div>
</div>
</form>

<!-- footer -->
<footer class="bg-success text-white text-center pb-2">
  <p id="glowy">© 2022 <a href="https://www.instagram.com/@kodim_0201_medan/" class="text-white fw-bold">Kodim 0201/Medan</a> - Website</p>
  <p>Jl. Pengadilan No.8, Kec. Medan Petisah, Kel. Petisah Tengah, Kota Medan, Sumatera Utara 20231, Telp. (061) 4534761</p>
</footer>

<!-- akhir footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>