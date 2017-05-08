<?php
include'cek_login_mas.php';
include'../../proses/koneksi.php';
$username=$_SESSION['master'];
$query=$mysqli->query("select * from user where username='$username'");
$data=$query->fetch_array();


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>halaman utama master</title>
<link href="../../style1.css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="../../jquery/jquery-1.4.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	  
	  $.ajax({
			
			url:"proses_tampil_data.php",
			
			success: function(data){
			$(".hasil").html(data)
			}
			})
	
       
   });
// ]]></script>
</head>
<body>



<div class="header">
	<div class="main1">
		<div class="logo">STEKOMINDO - Ujian Online</div>
    	<div class="navbar"><a href="master.php">Hi, <?php echo $data['nama_user']; ?>  !</a> | <a href="list_operator.php">admin</a> | <a href="logout.php">keluar</a><br /></div>	
	</div>

</div>
<div style="border: 1px solid #dedede;background:#FFF; width:100%; height:60px; position:fixed; top:50px; left:0; box-shadow: 1px 1px 16px 0px #CCC; "></div>
<div class="main"><h3><a href="list_operator.php">List Admin</a> | <a href="tambah_operator.php">Tambah Admin</a></h3><br/>
<div class="hasil"></div>
</div>

<div class="footer">2015 Copyright STEKOMINDO created by pilopa</div>
</body>
</html>