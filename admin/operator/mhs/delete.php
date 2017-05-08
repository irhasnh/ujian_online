<?php
include'../../../proses/koneksi.php';

$npm=@$_GET['npm'];
$act=@$_GET['act'];


	$hapus=$mysqli->query("delete from mahasiswa where npm='$npm'");
	if($hapus){
		header('location:mahasiswa.php');
	}
	else{
		echo'gagal menghapus';
	}
	


?>