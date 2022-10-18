<?php
session_start();

if(!isset($_SESSION["login"])){
  header("Location: Login.php");
  exit;
}

require 'function.php';

$komentar = query("SELECT * FROM komentar");

        if(isset($_POST['simpan'])){
          komentar($_POST);
          echo "<meta http-equiv='refresh' content='1.5';url='index.php#komentar?,'>";
        }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylee.css"/>
<!-- my css -->

    <title>Lapor Pungli Kodim 0201/Medan</title>

  </head>
  <body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm fixed-top">
    <div class="container-fluid">
        <img src="BB.png" class="avatar" Style="height:50px"></img>
      <a class="navbar-brand" href="#" id="glow" Style="font-size: 35px; font-weight: 600">KODIM 0201/MEDAN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown" style="font-size:25px">
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

<!-- jumbotron -->

<section class="jumbotron text-center">
  <img src="img/Jajaran.jpg" class="img-fluid" alt="Jajaran" style="max-width:100%;height: auto;"/>
    <h1 class="display-4  text-white" style="font-weight:bolder">Selamat Datang di Website Kodim 0201/Medan</h1>
    <p class="lead" style="color:rgb(255, 255, 255); font-size: 10px; font-family: helvetica;">Website ini merupakan sarana Personel Kodim 0201/Medan dan Keluarga serta seluruh Masyarakat Kota Medan dan Kabupaten Deli Serdang yang berada di Wilayah Teritorial binaan Kodim  0201/Medan untuk memudahkan mencari Informasi tentang Kodim 0201/Medan serta melaporkan  segala perbuatan Pungli yang dilakukan oleh oknum Personel Kodim 0201/Medan baik Prajurit dan PNS dalam menjalankan tugas dan tanggung jawabnya.</p>
  </section>
<!-- akhir jumbotron -->


<!-- about -->

<section id="tentang">
<div class="container-fluid">
    <div class="row">
      <div class="col">
        <h2 style="text-align:center; font-weight:bolder">Tentang Kodim 0201/Medan</h2>
        <p>
               Sejarah terbentuknya Kodim 0201/BS tidak terlepas dari proses terbentuknya Kodam I/Bukit Barisan yang merupakan perkembangan reorganisasi TNI AD khususnya mengenai Kodam, jumlah Kodam dikurangi dari 16 menjadi 10. Setelah adanya pengakuan pemerintah Belanda kepada Pemerintah RI, maka seluruh kekuatan bersenjata yang berada di Sumatera Utara dihimpun menjadi Komando Tentara Teritorium Sumatera Utara (Ko T.T/SU). Peristiwa ini terjadi pada tahun 1950.
<br>
<br>
               Komando Distrik Militer 0201/Medan atau Kodim 0201/Medan adalah Komando Distrik Militer Berdiri Sendiri/BS (Kodim tidak di bawah Korem) yang merupakan bagian dari Kodam I/BB. Kodim ini sebelumnya bernama Kodim 0201/BS (Berdiri Sendiri) hingga peresmian perubahan nama satuan menjadi Kodim 0201/Medan yang dilaksanakan di Wisma Benteng Medan tanggal 8 September 2021.
        </p>
        <hr>
        </div>
        <div class="row" style="bottom:-100px;">
            <div class="col-sm-6">
            <h3 style="text-align:center; font-weight:bolder">Secara Umum</h3>
            <hr>
            <p style="text-align:justify">Kodim 0201/Medan merupakan satuan yang langsung dibawah kendali Kodam I/BB bertugas pokok menyelenggarakan pembinaan kemampuan, kekuatan dan gelar kekuatan, menyelenggarakan Pembinaan Teritorial untuk menyiapkan wilayah pertahanan di darat dan menjaga keamanan wilayahnya dalam rangka mendukung tugas pokok Kodam I/BB yang beralamat di Jl. Pengadilan No.8 Kecamatan Medan Petisah, Medan.</p>
            </div>

          <div class="col-sm-6">
            <h3 style="text-align:center; font-weight:bolder">Tugas dan Tanggung jawab</h3>
            <hr>
            <p style="text-align:justify">Kodim 0201/Medan memiliki tugas pokok membantu Pangdam I/BB dalam menyelenggarakan fungsi pembinaan teritorial untuk menyiapkan wilayah pertahanan di darat dan menjaga keamanan wilayahnya dalam rangka mendukung tugas pokok Kodam I/BB.</p>
          </div>
        </div>
  </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#556b2f" fill-opacity="1" d="M0,32L80,74.7C160,117,320,203,480,224C640,245,800,203,960,192C1120,181,1280,203,1360,213.3L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
</section>
<!-- akhir about -->

<!-- projects -->
<section id="personel">
  <div class="gallery">
  <div class="container-sm" style="color:whitesmoke">
  <div class="row text-center">
    <div class="col">
      <h1 style="font-weight:bolder">Gallery</h1>
      <hr>
    </div>
    <br>
  </div>
  <div class="row row-cols-1 row-cols-md-2 justify-content-center">
    <div class="col mb-6">
      <img src="img/Info.jpg" class="card-img-top" alt="project1"/>
      <div class="card-body">
        <h5 class="card-title text-center" style="font-weight:bolder">Pemenuhan Personel</h5>
        <hr>
        <p class="card-text" style="text-align:justify" style="font-weight:bolder">Pemenuhan dan validasi Orgas Kodim semula sesuai dengan Peraturan Kasad Nomor  Perkasad/96/XII/2014 tanggal 31 Desember 2014 diadakan perubahan menjadi Peraturan Kasad Nomor 5.a Tahun 2019 tanggal 14 Oktober 2019 tentang organisasi dan Tugas Kodim Tipe A.</p>
      </div>
    </div>
      <div class="col mb-6">
      <img src="img/pengarahan.jpg" class="card-img-top" alt="project2"/>
      <div class="card-body">
        <h5 class="card-title text-center" style="font-weight:bolder">Kekuatan Personel</h5>
        <hr>
        <p class="card-text"><caption>Rekapitulasi kekuatan personel Militer dan PNS Kodim 0201/Medan sesuai TOP/DSPP sebagai berikut:</caption>
        
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">PANGKAT</th>
                <th scope="col">TOP/DSPP</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Perwira</td>
                <td>32</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Bintara</td>
                <td>776</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Tamtama</td>
                <td>58</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>PNS</td>
                <td>30</td>
              </tr>
              <tr>
                <th scope="row"></th>
                <td>JUMLAH</td>
                <td>896</td>
              </tr>
            </tbody>
          </table>
          </p>
      </div>
  </div>
      </div>

<div class="row row-cols-1 row-cols-md-1 justify-content-center">
    <div class="col">
      <img src="img/persit2.jpg" class="card-img-top" alt="project3"/>
      <div class="card-body">
        <h5 class="card-title text-center" style="font-weight:bolder">Persit KCK Cabang XI Kodim 0201/Medan</h5>
        <hr>
        <p class="card-text" style="text-align:justify">-        Persit Kartika Chandra Kirana Cabang XI Dim 0201/Medan berkedudukan langsung dibawah Persit Kartika Chandra Kirana PD I/Bukit Barisan; dan</p>
        <p style="text-align:justify">-     Mendukung kegiatan Persit KCK, serta mengupayakan agar seluruh anggota Persit KCK dapat melaksanakan tugas sesuai perannya sebagai pendamping suami tanpa mengesampingkan fungsi sebagai Ibu rumah tangga;</p>
        <p style="text-align:justify">-         Membantu kegiatan Persit KCK Cabang XI Dim 0201/Medan, Sehingga pelaksanaannya dapat berjalan lancar tanpa mengurangi kewajiban selaku Isteri Prajurit; dan</p>
        <p style="text-align:justify">-         Pembinan Persit dilakukan secara Moral dan Spiritual  bertujuan untuk membentuk keluarga Prajurit Kodim 0201/Medan yang lebih sejahtera melalui kegiatan Kerohanian, Penyuluhan hukum  serta pembinaan ketrampilan di setiap ranting Persit KCK Cabang XI Dim 0201/Medan yang dilaksanakan setiap Triwulan dalam kegiatan ceramah Bintal.</p>
      </div>
    </div>
    </div>
  </div>
</div>
</section>


<!-- akhir projects -->

<!-- porjek -->
<section class="geo" id="geografi">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#556b2f" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,240C384,256,480,256,576,245.3C672,235,768,213,864,202.7C960,192,1056,192,1152,197.3C1248,203,1344,213,1392,218.7L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title "style="font-weight:bolder" >Kondisi Geografi: </h2>
        <p class="card-text">
          <ol class="c">
          <li style="margin-left: 12px; font-weight:bolder" >Letak.</li>
          <ol class="d">
          <li>Daerah Kodim 0201/Medan meliputi daerah kota Medan dan sebagian dari daerah Kabupaten Deli Serdang sebagai berikut :   </li>
          <ol class="e">
          <li>Daerah kota Medan, terdiri dari 21 Kecamatan dan 11 Koramil; dan</li>
          <li>Daerah Kabupaten Deli Serdang, terdiri dari 8 Kecamatan dan 5 Koramil.</li>
          </ol>
          <li>Kodim 0201/Medan terletak diantara 3º35’17.38’’ LU dan 98º40’21.81’’ BT.</li>
        </ol><br>

        <li style="margin-left: 12px; font-weight:bolder">Luas.</li>
        <ol class="d">
        <li>Luas daerah Kodim 0201/Medan	=    1.186 km².</li>
        <li>Luas daerah Perkebunan (PTP)	=  16.695 Ha.</li>
        <li>Luas daerah Perkebunan rakyat	=    6.895 Ha.</li>
        <li>Luas daerah Pertanian		=  70.986 Ha. </li>
        <li>Luas daerah Pemukiman		=  18.221 Ha.</li>
        </ol><br>
        <li style="margin-left: 12px; font-weight:bolder">Batas.</li>
        <ol class="d">
        <li>Sebelah Utara, berbatas dengan selat Malaka (Lantamal I Belawan).</li>
        <li>Sebelah Timur, berbatas dengan kabupaten Deli Serdang (Kodim 0204/DS).</li>
        <li>Sebelah Barat, berbatas dengan kabupaten Deli Serdang (Kodim 0204/DS). </li>
        <li>Sebelah Selatan, berbatas dengan kabupaten Deli Serdang (Kodim 0204/DS) dan kabupaten Langkat (Kodim 0203/LKT).</li>
        </ol><br>
      </ol>
      </ol>
      </div>
      </p>
      </div>
    </div>
  
  <div class="col-md-6" id="orgas">
    <h2 style="text-align: center; font-weight: bolder;">STRUKTUR ORGANISASI</h2>
    <div class="card">
      <img src="img/strukturorgas.jpg" class="card-img-top" alt="kodim">
      <div class="card-body">
        <h5 class="card-title" style="margin-left: 12px; font-weight:bolder">Struktur Jabatan Kodim 0201/Medan:</h5>
        <p class="card-text"><ol class="c">
          <li style="margin-left: 1px; font-weight:bolder">Unsur Pimpinan:</li>
          <ol class="d1">
          <p class="komandan"><a href="komandan.html">-  Dandim 0201/Medan</a></p>
        </ol><br>
        
          <li style="margin-left: 12px; font-weight:bolder">Unsur Pembantu Pimpinan:</li>
          <ol class="d">
          <li>Kasdim 0201/Medan;</li>
          <li>Pasintel Dim 0201/Medan;</li>
          <li>Pasiops Dim 0201/Medan;</li>
          <li>Pasipers Dim 0201/Medan;</li>
          <li>Pasilog Dim 0201/Medan;</li>
          <li>Pasiter Dim 0201/Medan;</li>
          <li>Pasiren Dim 0201/Medan;</li>
          <li>Kaur Lat Dim 0201/Medan;</li>
          <li>Kaur Komsos Siter Dim 0201/Medan; </li>
          <li>Kaur Bhakti TNI Siter Dim 0201/Medan; dan</li>
          <li>Pasandi Siintel Dim 0201/Medan.</li>
          </ol><br>
          <li style="margin-left: 12px; font-weight:bolder">Unsur Pelayanan:</li>
          <ol class="d1">
          <li>Kapok Tuud Dim 0201/Medan.</li>
          </ol><br>
          <li style="margin-left: 12px; font-weight:bolder">Unsur Pelaksana:</li>
          <ol class="d">
          <li>Danramil (Koramil 01 s.d. 16), khusus Ramil type “A” dibantu oleh Wadanramil; dan</li>
          <li>Danunit Intel.</li>
          </ol><br>
        </ol></p>
     
      </div>
    </div>
  </div>
</div>
</section>
 

<!-- wilayah koramil -->

<section class="alamatt" id="alamatt">
  <div class="container-fluid">
    <div class="col">
  <img src="img/kodim3.jpg" class="card-img-top" alt="alamatt">
  <h3 style="text-align:center; font-weight:bolder; margin-top:40px;">Kodim 0201/Medan merupakan satuan Komando Kewilayahan yang berada langsung dibawah Kodam I/BB dengan wilayah teritorial meliputi kota Medan dan sebagian kabupaten Deli Serdang</h3>
  <hr>
    <table class="table table-striped table-dark">
      <thead>
<table class="table table-striped table-dark">
  <thead>
    <tr class="bg-info">
      <th scope="col">No</th>
      <th scope="col">SATUAN</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">JUMLAH WILAYAH</th>
         </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td class="bg-info">Makodim </td>
      <td class="bg-info">Jl. Pengadilan No.8 Medan Petisah</td>
      <td class="bg-info">membawahi 16 Koramil yang memiliki wilayah 29 Kecamatan,157 Kelurahan,140 Desa</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Koramil 0201-01/MP</td>
      <td>Jl. Sengon Sekip No 3 Medan Petisah</td>
      <td>2 Kecamatan  yang meliputi wilayah: Kecamatan Medan Barat, Kecamatan Medan Petisah dgn 13 Kelurahan</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Koramil 0201-02/MT</td>
      <td>Jl. P. Kemerdekaan No 38 Medan Timur</td>
      <td>2 Kecamatan yang meliputi wilayah: Kecamatan Medan Timur, Kecamatan Medan Perjuangan dgn 20 Kelurahan</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Koramil 0201-03/MD</td>
      <td>Jl. Bromo No 35 Medan Denai</td>
      <td>2 Kecamatan yang meliputi wilayah: Kecamatan Medan Denai, Kecamatan Medan Tembung dgn 12 Kelurahan</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Koramil 0201-04/MK</td>
      <td>Jl. Wahidin No. 2 B Medan Kota</td>
      <td>2 Kecamatan yang meliputi wilayah: Kecamatan Medan Kota, Kecamatan Medan Area dgn 24 Kelurahan</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Koramil 0201-05/MB</td>
      <td>Jl. Terompet No. 66 Padang Bulan Medan </td>
      <td>3 Kecamatan  yang meliputi wilayah: Kecamatan Medan Baru, Kecamatan Medan Polonia, Kecamatan Medan Maimun dgn 17 Kelurahan</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Koramil 0201-06/MS</td>
      <td>Jl. TB Simatupang No. 108 Sunggal Medan</td>
      <td>2 Kecamatan yang meliputi wilayah: Kecamatan Medan Sunggal, Kecamatan Medan Helvetia dgn 13 Kelurahan</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Koramil 0201-07/MT</td>
      <td>Jl. Bunga Melati No. 4 Medan Tuntungan  </td>
      <td>2 Kecamatan yang meliputi wilayah: Kecamatan Medan Tuntungan, Kecamatan Medan Selayang dgn 15 Kelurahan</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Koramil 0201-08/MA</td>
      <td>Jl. SM. Raja  Km 6,5 No 8 Medan Amplas</td>
      <td>2 Kecamatan yang meliputi wilayah: Kecamatan Medan Johor, Kecamatan Medan Amplas dgn 14 Kelurahan</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Koramil 0201-09/BLW</td>
      <td>Jl. Indrapura No. 11 Medan Belawan</td>
      <td>1 Kecamatan yang meliputi wilayah: Kecamatan Medan Belawan dgn 6 Kelurahan</td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>Koramil 0201-10/MM</td>
      <td>Jl. Kapten R. Buddin No. 6 Medan Labuhan</td>
      <td>2 Kecamatan yang meliputi wilayah: Kecamatan Medan Labuhan, Kecamatan Medan Marelan dgn 11 Kelurahan</td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>Koramil 0201-11/MD</td>
      <td>Jl. Yos Sudarso Km 12 Titi Papan Medan Deli</td>
      <td>1 Kecamatan yang meliputi wilayah: Kecamatan Medan Deli dgn 6 Kelurahan</td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>Koramil 0201-12/HP</td>
      <td>Jl. Perintis Kemerdekaan Kecamatan.  Hamparan  Perak 
        Kab. Deli Serdang
        </td>
      <td>2 Kecamatan yang meliputi wilayah: Kecamatan Hamparan Perak, Kecamatan Labuhan Deli. dgn 24 Desa</td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>Koramil 0201-13/PST</td>
      <td>Jl. Besar Tembung No. 50 Percut Sei Tuan Kab. Deli Serdang</td>
      <td>1 Kecamatan yang meliputi wilayah: Kecamatan Percut Sei Tuandgn 21 Kelurahan/Desa</td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td>Koramil 0201-14/PB</td>
      <td>Jl. Jamin Ginting Pancur Batu Medan</td>
      <td>2 Kecamatan yang meliputi wilayah: Kecamatan Pancur Batu, Kecamatan Namorambe dgn 61 Desa</td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td>Koramil 0201-15/DT</td>
      <td>Jl. Besar Deli Tua Kab. Deli Serdang</td>
      <td>2 Kecamatan yang meliputi wilayah: Kecamatan Deli Tua, Kecamatan Patumbak dgn 14 Kelurahan/Desa</td>
    </tr>
    <tr>
      <th scope="row">17</th>
      <td>Koramil 0201-16/TM</td>
      <td>Jl. Medan - Lubuk Pakam Km, 21,5 Desa Wonosari Tanjung Morawa</td>
      <td>1 Kecamatan yang meliputi wilayah: Kecamatan Tanjung Morawa dgn 25 Kelurahan/Desa</td>
    </tr>
  </tbody>
</table>
      </div>
      </div>
</section>
<!-- akhir wilayah koramil -->

<!-- koperasi -->
<section id="koperasi">
  <div class="container-sm">
  <div class="row text-center">
    <div class="col">
      <h1 style="font-weight:bolder; margin-bottom: 50px;">PRIMKOPKAR BENTENG</h1>
      <hr>
    </div>
    <br>
  </div>
  <div class="row row-cols-1 row-cols-md-2 justify-content-center">
    <div class="col mb-4">
      <b><img src="img/koperasi2.jpg" class="card-img-top" alt="koperasi2"/></b>
      <div class="card-body">
        <h2 class="card-title text-center" style="font-weight:bolder">Primer Koperasi Kartika Benteng Kodim 0201/Medan</h2>
        <hr>
        <h4 class="card-title "style="font-weight:bolder" >Organisasi </h4>
        <hr>
        <p class="card-text">
          <ol class="c">
          <p style="margin-left: 12px;">Struktur Organisasi Primkopkar Benteng Kodim 0201/Medan telah disesuaikan dengan Peraturan Kasad Nomor : Perkasad /14/V/2010 tentang Organisasi serta tugas Primer Koperasi.</p>
          <ol class="d">
          <li>Primer Koperasi Kartika Benteng mempunyai Badan Hukum Nomor : 518/48/PAD/BH//VII/2011 tanggal, 19 Juli 2011; </li>
          <li>Klasifikasi untuk tahun 2007 tidak diperoleh sehubungan Kantor Dinas Koperasi Kota Medan tidak lagi mengeluarkan klasifikasi bagi koperasi-koperasi.</li>
          </ol><br>
          <ol class="c">
              <p style="margin-left: 12px; font-weight:bolder">Susunan Pengurus=></p>
            <ol class="d">
            <li style="margin-left: 12px; font-weight:bolder">Pengurus Harian:</li>
                <ol class="d">
                <li>Ketua</li>
                <li>Ur Nikkop</li>
                <li>Ur Usaha</li>
                <li>Ur Ben</li>
                </ol>
                <li style="margin-left: 12px; font-weight:bolder">Badan Pemeriksa:</li>
                <ol class="d1">
                  <li>Ketua</li>
                  <li>Anggota1</li>
                  <li>Anggota2</li>
              </ol>
            </ol>
            </ol><br>
            <h4 style="margin-left: 12px; font-weight:bolder">Bidang Urusan Usaha</h4>
            <hr>
            <ol class="d">
            <p style="margin-left: 12px; font-weight:bolder">Menjaga dan memprioritaskan usaha yang dilaksanakan Primkop Kartika Benteng agar tetap lancar serta berupaya meningkatkan mutu pelayanan meliputi:</p>
                <ol class="d">
                <li>Usaha Toko Primkop Kartika Benteng</li>
                    <ol class="d1">
                      <li>Sumber Pengadaan Barang :  Pedagang Grosir.</li>
                      <li>Sistem Penjualan Barang	 :  Kontan dan Kredit.</li>
                      <li>Sistem Pengadaan Barang	:  Beli kontan.</li>
                      <li>Keuntungan yang diambil	 :  4 %  s.d.  6 %.</li>
                    </ol>
                    <li>Usipa Primkop Kartika Benteng,	Untuk usipa berdasarkan ST Pangdam I/BB Nomor ST/ 1279/2021 tanggal 28 mei 2021 diberhentikan. </li>
                  </ol>
              </ol>
      </div>
    </div>

  <div class="col mb-4">
    <a><img src="img/koperasi1.jpg" class="card-img-top" alt="koperasi1"/></a>
    <div class="card-body">
      <ol class="c">
        <h4 style="margin-left: 12px; font-weight:bolder">Bidang Sekretaris</h4>
        <hr>
      <ol class="d">
      <li style="margin-left: 12px; font-weight:bolder">Administrasi</li>
          <ol class="d">
          <li>Menyelenggarakan  kegiatan administrasi umum, surat menyurat dan ketatausahaan kantor Primkop KB;</li>
          <li>Meningkatkan pengetahuan pembukuan koperasi terutama sistem Akuntansi Koperasi Angkatan Darat;</li>
          <li>Mencatat dalam buku daftar anggota terhadap keanggotaan Primkop yang keluar dan masuk serta setiap terjadinya perubahan kenaikan pangkat maupun jabatan/posisi;</li>
          <li>Mendata  kondisi barang inventaris yang telah disusutkan nilai belinya hingga tinggal satu rupiah maupun yang masih dalam akumulasi penyusutan;</li>
          <li>Membuat Administrasi Keuangan Primkop mulai dari buku Harian s/d Laporan pertanggungjawaban;</li>
          <li>Mengadakan koordinasi dengan komisaris-komisaris terutama dengan Komisaris Urusan Bendahara tentang pengelolaan Manajemen Permodalan dan administrasinya;dan</li>
          <li>Membuat  pengawasan secara Fisik / Administrasi terhadap unit usaha Primkop.</li>
          </ol>
          <li style="margin-left: 12px; font-weight:bolder">Urusan Dalam</li>
          <ol class="d1">
            <li>Melaksanakan pemeliharaan dan perawatan perangkat yang dimiliki Primkop serta menjaga kelangsungan masa usia pakainya;</li>
            <li>Melaksanakan ketentuan, ketertiban dan melestarikan lingkungan kantor Primkop serta mendukung kebijaksanaan Komando;</li>
            <li>Turut membantu Pengurus dalam rangka melaksanakan pendistribusian paket Lebaran dan Natal TA 2021;</li>
            <li>Turut membantu Pengurus dalam rangka persiapan penyelenggaraan Rapat Anggota Tahunan ( RAT ) maupun kegiatan lainnya;</li>
            <li>Mengadakan perbaikan perawatan fasilitas kantor meliputi  rencana pengecatan kantor, keramik lantai kantor koperasi.</li>

        </ol>
      </ol> 
      </ol>
      </ol><br>
    </div>
      </div>
  </div>
</div>
</section>
<!-- akhir koperasi -->


<div class="penutup" style="padding: 10px 0px 10px 0px">
<p style="font-weight:bolder;">Terimakasih telah mengunjungi kami...</p>
</div>
<!-- batas awal -->




<!-- batas akhir-->
<section id="sarani">
<form method="POST">
    <div class="panel panel-primary">
              <div class="panel-heading text-center">
                <h3 class="panel-title">Silahkan Tinggalkan Komentar Anda!</h3>
              </div>
    </div>
<div class="container">
      <div class="panel-body">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="form-group">
                <label>Nama Anda</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
              </div>

              <div class="form-group">
                <label>email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
              </div>

              <div class="form-group">
                <label>Isi Komentar</label>
                <textarea class="form-control" name="isi" placeholder="Masukkan Komentar"></textarea>
                </div>

              <div class="form-group" style="padding-top:4px">
                <input type="submit" name="simpan" class="btn btn-primary" value="Kirim Komentar">
              </div>
<hr>

<?php foreach($komentar as $row): ?>
<div class="well" style="background-color:white">
<i class="bi bi-person-square">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="16 16 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/></svg>
<b><?= $row["nama"]; ?></b>
<b><?= $row["email"]; ?></b>
<?= $row["isi"]; ?><br>
<?= $row["tanggal"]?>
</div></i>
<br/>

<?php endforeach; ?>
<hr>
</div>
</div>
</div>
    </div>
</form>

          <div class="d-grid gap-2 col-2 mx-auto" style="font-weight-bolder">
            <button class="btn btn-danger" type="logout">Logout</button>
          </div>
<hr>

  </section>


<!-- footer -->
<footer class="bg-success text-white text-center pb-2">
  <p id="glowy">© 2022 <a href="https://www.instagram.com/@kodim_0201_medan/" class="text-white fw-bold">Kodim 0201/Medan</a> - Website</p>
  <p>Jl. Pengadilan No.8, Kec. Medan Petisah, Kel. Petisah Tengah, Kota Medan, Sumatera Utara 20231, Telp. (061) 4534761</p>
</footer>

<!-- akhir footer -->


<script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>