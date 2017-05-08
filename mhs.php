<?php
include 'cek_login_mhs.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>halaman utama ujian</title>
<link href="style1.css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
include'proses/koneksi.php';
$npm=$_SESSION['mahasiswa'];
$sql = $mysqli->query("SELECT * FROM mahasiswa where npm='$npm'") or die(mysql_error());

$data=$sql->fetch_array();
?>

<div class="header">
	<div class="main1">
		<div class="logo">STEKOMINDO - Ujian Online</div>
    	<div class="navbar"><a href="profil.php">Hi, <?php echo $data['nama_mhs']; ?> !</a> | <a href="nilai.php">Nilai</a> | <a href="mhs.php">Ujian</a>  |  <a href="logout.php">keluar</a><br /></div>	
	</div>

</div>
<div style="border: 1px solid #dedede;background:#FFF; width:100%; height:60px; position:fixed; top:50px; left:0; box-shadow: 1px 1px 16px 0px #CCC; "></div>
<div class="main"><h3><?php echo $data['nama_mhs']; ?>, silahkan pilih mata kuliah yang akan diujikan!</h3><br/><form action="ujianonline.php" method="post">
  <label for="select"></label>
  <select class="text2" name="matkul" id="select">
  <option selected="selected">-- Pilih Mata Kuliah --</option>
  <option value="Desain Web">Desain Web</option>
  <option value="WEB II">Web II</option>
  <option value="Desain Web Lanjut">Desain Web Lanjut</option>
  <option value="Program Aplikasi">Program Aplikasi</option>
  <option value="Psikologi Pendidikan UTS">Psikologi Pendidikan UTS</option>
  <option value="Psikologi Pendidikan UAS">Psikologi Pendidikan UAS</option>
  <option value="Komunikasi Data">Komunikasi Data</option>
  <option value="Pengelolaan Instalasi Komputer">Pengelolaan Instalasi Komputer</option>
  <option value="Sistem Informasi Manajemen">Sistem Informasi Manajemen</option>
  <option value="Akuntansi II">Akuntansi II</option>
  <option value="Metodologi Penelitian">Metodologi Penelitian</option>
  <option value="Dasar Manajemen Bisnis">Dasar Manajemen Bisnis</option>
  <option value="Program Visual II">Program Visual II</option>
  </select><br/><br/>
  <input  type="submit" name="lanjut" id="button" value="Mulai" />
</form></div>

<div class="footer">2015 Copyright STEKOMINDO created by pilopa</div>
</body>
</html>