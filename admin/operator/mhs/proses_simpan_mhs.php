<?php
include'../../../proses/koneksi.php';
$npm=$_GET['npm'];
$nama=$_GET['nama'];
$kelas=$_GET['kelas'];
$semester=$_GET['semester'];
$password=md5($_GET['password']);

if(empty($npm)){
	echo'<font style="color:#F00">npm tidak boleh kosong</font>';
}
elseif(empty($nama)){
	echo'<font style="color:#F00">nama tidak boleh kosong</font>';
}
elseif($kelas=='kelas'){
	echo'<font style="color:#F00">anda belum memilih kelas</font>';
}
elseif($semester=='semester'){
	echo'<font style="color:#F00">anda belum memilih semester</font>';
}
elseif(empty($password)){
	echo'<font style="color:#F00">password tidak boleh kosong</font>';
}
else{
	$cek=$mysqli->query("select * from mahasiswa where npm='$npm'");
	$ada=$cek->num_rows;
	if($ada!= 0){
		echo'<font style="color:red">npm sudah ada yang menggunakan</font>';
	}
	else{
		$simpan=$mysqli->query("insert into mahasiswa (npm, nama_mhs, kelas, semester, password) values ('$npm', '$nama', '$kelas', '$semester', '$password')");
	if($simpan){
		?>
        <font style="color:#0C0">sukses</font>
        <?php
	}
	else{
		?>
        <font style="color:#F00">gagal</font>
        <?php
		
	}
	}
}
	


?>