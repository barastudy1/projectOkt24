<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #2F4F4F;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #32CD32;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}


html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

</style>
</head>
<body>

<div class="navbar">
  <a href="#home">Home</a>
   <div class="dropdown">
    <button class="dropbtn">INPUT 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <!--akses untuk admin -->
    <a href="<?php echo base_url('admin')?>">HOME</a>
    <a href="<?php echo base_url('anak/create')?>"><h3><font color="#CD853F">Input Data Anak</h3></a>
    <a href="<?php echo base_url('dukuh/create')?>"><h3><font color="#CD853F">Input Data Dukuh</h3></a>
    <a href="<?php echo base_url('sekolah/create')?>"><h3><font color="#CD853F">Input Data Sekolah</h3></a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">VIEW 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="<?php echo base_url('anak/tampil')?>"><h3><font color="#CD853F">Lihat Data Anak</h3></a>
    <a href="<?php echo base_url('dukuh/tampil')?>"><h3><font color="#CD853F">Lihat Data Dukuh</h3></a>
    <a href="<?php echo base_url('sekolah/tampil')?>"><h3><font color="#CD853F">Lihat Data Sekolah</h3></a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">REPORT 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href="<?php echo base_url('anak/tampil')?>"><h3><font color="#CD853F">Data anak</h3></a>
    <a href="<?php echo base_url('dukuh/tampil')?>"><h3><font color="#CD853F">Data Penerima Bantuan</h3></a>
    </div>
  </div>
  <a href="#">Logout</a>

</div>


<h2>Halaman Admin Pendataan Anak Desa Wedomartani</h2>

<br>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="asesoris/img/desa2.jpg"  style="width:337px">
      <div class="container">
        <h2>Admin Kelurahan</h2>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="asesoris/img/desa4.jpg" style="width:425px">
      <div class="container">
        <h2>Admin Padukuhan</h2>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="asesoris/img/desa3.jpg" style="width:405px">
      <div class="container">
        <h2>Kelola Info Desa</h2>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>

