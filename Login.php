<?php
session_start();



require 'function.php';

if( isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

// ambil data (fetch) pengguna2 dari objek result
// mysqli_fetch_row()
// mysqli_fetch_assoc()
// mysqli_fetch_array()
// mysqli_fetch_object($result)

//while($gun2 = mysqli_fetch_assoc($result)) {
//   var_dump($gun2);
//   }
//cek username
if( mysqli_num_rows($result) === 1 ) {

  //cek password
  $row = mysqli_fetch_assoc($result);

 if( password_verify($password, $row["password"]) ) {
  // set session
  $_SESSION["login"]= true;
     header("Location: index.php");
      exit;
  }
} else {
echo "<script>
    alert('anda belum daftar, silahkan registrasi dulu...');
    </script>";
    header ("Location: Registrasi.php");
    exit;
}
}

?>

<!DOCTYPE html>
<html>
<head>

<style>
body {font-family: Helvetica;
  background-color:  rgba(53, 54, 54, 0.65);;
}


/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  font-size: 20px;
  border-radius: 10px;
  font-style: Bold;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 4px 15px;
  background-color: #f44336;
  font-size: 15px;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 10%;
}

.container {
  padding: 16px;
}

span.password {
  float: right;
  padding-top: 16px;
}

/* The Lapor (background) */
.Log {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Lapor Content/Box */
.Log-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.2s;
  animation: animatezoom 0.2s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
.cancelbtn {
     width: 100%;
  }
}
h1{
background: yellow;
border: 12px 30px;
width:250px;
padding: 20px;
border-radius:8px;
margin: 30px 30px;
margin-top: 50px;
}
#glow{
  margin: 10px 30px;
  color:   rgba(5, 129, 16, 0.65);
  text-align: center;
  animation: glow -1s ease-in-out infinite alternate;
}
#glow:hover {
  /*
	text-shadow:
    0 0 5px rgb(255, 255, 255, 1),
		0 0 10px rgb(255, 255, 255, 1),
		0 0 20px rgb(255, 255, 255, 1),
		0 0 30px rgb(255, 255, 255, 1),
    -1px 0 cyan,
    0 1px cyan,
    1px 0 cyan,
    0 -1px cyan;
  -webkit-text-stroke: 1px cyan;
  */
	text-shadow:
    0 0 5px rgb(255, 255, 255, 1),
		0 0 10px rgb(255, 255, 255, 1),
		0 0 20px rgb(255, 255, 255, 1),
		0 0 30px rgb(255, 255, 255, 1);
}
#glow {
	position: relative;
	background:  rgba(5, 129, 16, 0.65);
	color:   #ffff;
	font-variant: small-caps;
	letter-spacing: 0.05em;
	-o-text-overflow: clip;
	text-overflow: clip;
	text-shadow: none;
	
	transition: all 0.6s linear; /* vendorless fallback */
	-o-transition: all 0.6s linear; /* opera */
	-ms-transition: all 0.6s linear; /* IE 10 */
	-moz-transition: all 0.6s linear; /* Firefox */
	-webkit-transition: all 0.6s linear; /*safari and chrome */
}
#loginbawah{
  font-size: 100%;
}



</style>
</head>
<body>

<div class="daftar">
<h1>Silahkan Login</h1>

<button onclick="document.getElementById('idLog').style.display='block'" style="width:auto;" font-size="2500px"; id="glow">Disini</button>
</div>

<div id="idLog" class="Log">
  
  <form class="Log-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('idLog').style.display='none'" class="close" title="Close Log">&times;</span>
      <img src="BB.png" alt="Avatar" class="avatar">
      <h3>Kodim 0201/Medan</h3>
    </div>

    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Masukkan Username" name="username" id="username">

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Masukkan Password menggunakan huruf dan angka" name="password" id="password">
        
      <button type="submit" name="login" id="loginbawah">Login</button>
      </div>

    <div class="container" style="background-color:#ffff">
      <button a type="button" onclick="document.getElementById('idLog').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="password">Belum <a href="Registrasi.php">Daftar?</a></span>
    </div>
  </form>
</div>



<script>
// Get the Login
var Login = document.getElementById('idLog');

// When the user clicks anywhere outside of the Login, close it
window.onclick = function(event) {
    if (event.target == Login) {
        Login.style.display = "none";
    }
}
</script>

</body>
</html>
<div class="bg-img">