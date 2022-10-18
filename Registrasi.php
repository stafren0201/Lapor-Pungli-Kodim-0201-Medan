<?php

require 'function.php';

if( isset($_POST["register"]) ) {

     if( Registrasi($_POST) > 0 ) {
             echo "<script>
                 alert('user baru berhasil ditambahkan');
                </script>";
                header ("Location: Login.php");
     exit;
 } else{
    echo (mysqli_error($conn));
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Registrasi</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 2px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 2px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
button a{
  text-align: center;
  padding: 2px;

}
h2{
    text-align: center;
    padding: 10px;
}

.imgcontainer {
  text-align: center;
  margin: 8px 0 12px 0;
  padding:0px
}

.avatar {
  width: 100px;
  margin: 24px 0 12px 0;
  padding:0px;
}

.container {
  padding: 16px;
  display:block;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
}
ul{
  list-style-type: none;
}
#kembali{
  width: 65px;
  padding:8px 8px;
  border-radius:8px;
  color: White;
}

</style>


</head>
<body>
<h2>Silahkan anda registrasi dulu sebelum Login</h2>

<form method="post">
  <div class="imgcontainer">
  <img src="BB.png" alt="Avatar" class="avatar" >
  <h2>Kodim 0201/Medan</h2>
  </div>

  <div class="container">
    <h3>Halaman Registrasi</h3>

    <form action="" method="post">

            <ul>
                <li>
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username" placeholder="Masukkan Username">
                </li>
                <li>
                    <label for="password">Password :</label>
                    <input type="text" name="password" id="password" placeholder="Masukkan Password menggunakan huruf dan angka">
                </li>
                <li>
                    <label for="password2">Konfirmasi Password :</label>
                    <input type="password" name="password2" id="password2" placeholder="Konfirmasi Password">
                </li>
                <li>
                    <button type="submit" name="register">Registrasi</button>
                </li>
            </ul>
          <ul>
            <li>
              <button a href="Login.php"  type="submit" name="kembali" id="kembali">Kembali</button>
              </li>
          </ul>
    </form>



</body>
</html>