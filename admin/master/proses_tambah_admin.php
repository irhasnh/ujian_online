<?php
include'../../proses/koneksi.php';

$username=$_GET['username'];
$nama=$_GET['nama'];
$password=md5($_GET['password']);
$level=$_GET['level'];
if(empty($username)){
	echo'<font style="color:red">username tidak boleh kosong</font>';
}
elseif(empty($nama)){
	echo'<font style="color:red">nama tidak boleh kosong</font>';
}
elseif(empty($password)){
	echo'<font style="color:red">password tidak boleh kosong</font>';
}
elseif(empty($level)){
	echo'<font style="color:red">level tidak boleh kosong</font>';
}
else{
	$sql=$mysqli->query("select * from user where username='$username'") or die (mysql_error());;
	if($sql->num_rows!=0){
		echo'<font style="color:red">username sudah ada yang menggunakan</font>';
	}
		else{
		$simpan=$mysqli->query("insert into user (nama_user, username, password, level) values ('$nama', '$username', '$password', '$level')");
		if($simpan){
			echo'<font style="color:#009900">berhasil menambahkan admin baru</a>';
		}
		else{
			echo'<font style="color:red">gagal menambahkan admin</font>';
		}
	}
}
?>