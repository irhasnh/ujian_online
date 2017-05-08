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
<script src="jquery/jquery-1.4.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	  
	  $.ajax({
			
			url:"proses_tampil_profil.php",
			success: function(data){
			$(".profil").html(data)
			}
			})
	
       
   });
// ]]></script>
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
<div class="main"><h3>Hello, <?php echo $data['nama_mhs']; ?>, Biodata Diri Anda!</h3><br/>
<div class="profil"></div>
</div>

<div class="footer">2015 Copyright STEKOMINDO created by pilopa</div>
</body>
</html>