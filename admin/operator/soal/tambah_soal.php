<?php
include'../cek_login_opr.php';
include'../../../proses/koneksi.php';
$username=$_SESSION['operator'];
$query=$mysqli->query("select * from user where username='$username'");
$data=$query->fetch_array();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>buat soal</title>
<link href="../../../style1.css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div class="header">
	<div class="main1">
		<div class="logo">STEKOMINDO - Ujian Online</div>
    	<div class="navbar"><a href="../operator.php">Hi, <?php echo $data['nama_user']; ?> !</a> | <a href="../mhs/mahasiswa.php">mahasiswa</a> | <a href="soal.php">Soal</a> | <a href="../nilai.php">Nilai</a> | <a href="../logout.php">keluar</a><br /></div>	
	</div>

</div>
<div style="border: 1px solid #dedede;background:#FFF; width:100%; height:60px; position:fixed; top:50px; left:0; box-shadow: 1px 1px 16px 0px #CCC; "></div>
<div class="main"><h3><a href="soal.php">List Soal</a> | <a href="tambah_soal.php">Buat Soal</a></h3><br/>

<form id="form1" name="form1" method="post" action="simpan_soal.php">
  <table width="331" height="191" >
  <tr>
    <td width="74">semester</td>
    <td width="210"><select name="semester">
  <option selected="selected">semester</option>
  <option value="I">I</option>
  <option value="II">II</option>
  <option value="III">III</option>
  <option value="IV">IV</option>
  <option value="V">V</option>
  <option value="VI">VI</option>
  <option value="VII">VII</option>
  <option value="VIII">VIII</option>
  </select></td>
  </tr>
  <tr>
    <td>kelas</td>
    <td><select name="kelas">
  <option selected="selected">kelas</option>
  <option value="MI-J">MI-J</option>
  <option value="MI-K">MI-K</option>
  <option value="MI-L1">MI-L1</option>
  <option value="MI-L2">MI-L2</option>
  <option value="MI-M">MI-M</option>
  <option value="MI-N">MI-N</option>
  <option value="MI-P">MI-P</option>
  <option value="MI-Q">MI-Q</option>
  <option value="MI-R">MI-R</option>
  <option value="MI-T">MI-T</option> 
  <option value="PGMI-A">PGMI-A</option>   
  <option value="PGMI-B">PGMI-B</option> 
  <option value="PGMI-C">PGMI-C</option>   
  <option value="PGMI-D">PGMI-D</option>   
  <option value="BKI-A">BKI-A</option>   
  <option value="BKI-B">BKI-B</option>   
  </select></td>
  </tr>
  <tr>
    <td>mata kuliah</td>
    <td><select name="matkul">
  <option selected="selected">Mata Kuliah</option>
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
  </select></td>
  </tr>
  <tr>
    <td>jumlah soal</td>
    <td><input type="text" name="jumlah" id="textfield" placeholder="masukkan jumlah soal" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="buat" type="submit" value="buat soal"/></td>
  </tr>
  </table>
</form>
</div>
</body>
</html>