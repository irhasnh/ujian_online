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
<title>halaman utama master</title>
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

</div>

<div class="footer">2015 Copyright STEKOMINDO created by pilopa</div>
</body>
</html>