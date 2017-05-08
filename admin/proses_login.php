<?php
include '../proses/koneksilog.php';

	$user = $mysqli->real_escape_string(htmlentities($_GET['username']));
	$pass = $mysqli->real_escape_string(md5(htmlentities($_GET['password'])));


if(empty($user) || empty($pass)){
	echo'<font color="red">anda belum memasukkan username dan password</font>';
}else{
$sql = $mysqli->query("SELECT * FROM user WHERE username='$user' AND password='$pass'") or die(mysql_error());

	if($sql->num_rows==0){
		echo '<font color="#FF0000">user tidak ditemukan</font>';
	}else{
		$row = $sql->fetch_array();
		$username=$row['username'];
		$level=$row['level'];
		if($level=='operator'){
			$_SESSION['operator']=$username;
			echo '<script language="javascript">alert("Anda berhasil Login '.$_SESSION['operator'].'!"); document.location="operator/operator.php";</script>';
		}elseif($level=='master'){
			$_SESSION['master']=$username;
			echo '<script language="javascript">alert("Anda berhasil Login '.$_SESSION['master'].'!"); document.location="master/master.php";</script>';
		}
			
		}
	
}
?>
