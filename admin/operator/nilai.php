<?php
include'cek_login_opr.php';
include'../../proses/koneksi.php';
$username=$_SESSION['operator'];
$query=$mysqli->query("select * from user where username='$username'");
$data=$query->fetch_array();


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Nilai</title>
<link href="../../style1.css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div class="header">
	<div class="main1">
		<div class="logo">STEKOMINDO - Ujian Online</div>
    	<div class="navbar"><a href="operator.php">Hi, <?php echo $data['nama_user']; ?> !</a> | <a href="mhs/mahasiswa.php">mahasiswa</a> | <a href="soal/soal.php">Soal</a> | <a href="nilai.php">Nilai</a> | <a href="logout.php">keluar</a><br /></div>	
	</div>

</div>
<div style="border: 1px solid #dedede;background:#FFF; width:100%; height:60px; position:fixed; top:50px; left:0; box-shadow: 1px 1px 16px 0px #CCC; "></div>
<div class="main">
<h2>Laporan Nilai Mahasiswa</h2>
<form method="post" action="prosesNilai.php">
<label>Pilih Matakuliah</label><br/>
<select name="matkul">
<option selected>-- Pilih --</option>
<?php
$data=$mysqli->query("select * from nilai group by matkul");
$hitung=$data->num_rows;
if($hitung>0){
	while($row=$data->fetch_array()){
		?>
        <option value="<?php echo $row['matkul']; ?>"><?php echo $row['matkul']; ?></option>
        <?php
	}
}
else{
	echo 'tidak ada';
}
?>

</select><br/><br/>
<label>Pilih Kelas</label><br/>
<select name="kelas">
<option selected>-- Pilih --</option>
<?php
$data=$mysqli->query("select * from nilai group by kelas");
$hitung=$data->num_rows;
if($hitung>0){
	while($row=$data->fetch_array()){
		?>
        <option value="<?php echo $row['kelas']; ?>"><?php echo $row['kelas']; ?></option>
        <?php
	}
}
else{
	echo 'tidak ada';
}
?>
</select><br/><br/>
<input type="submit" value="Cetak"/>
</form>
</div>

<div class="footer">2015 Copyright STEKOMINDO created by pilopa</div>
</body>
</html>