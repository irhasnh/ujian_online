<?php
include 'proses/koneksilog.php';
if(isset($_POST['login'])){
	$user = $mysqli->real_escape_string(htmlentities($_POST['username']));
	$pass = $mysqli->real_escape_string(md5(htmlentities($_POST['password'])));

$sql = $mysqli->query("SELECT * FROM mahasiswa WHERE npm='$user' AND password='$pass'") or die(mysql_error());

	if($sql->num_rows==0){
		echo '<script language="javascript">alert("User tidak ditemukan"); document.location="index.php";</script>';
	}else{
		$row = $sql->fetch_array();
		$npm=$row['npm'];
			$_SESSION['mahasiswa']=$npm;
			echo '<script language="javascript">alert("Anda berhasil Login '.$_SESSION['mahasiswa'].'!"); document.location="profil.php";</script>';
		}
	
}
?>
