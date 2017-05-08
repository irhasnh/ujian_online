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
	$("#simpan").click(function(){
      var nama= $("#nama").val();
	  var username=$("#username").val();
	  var password=$("#password").val();
	  var level=$("#level").val();
	  
	  $.ajax({
			
			url:"proses_tambah_admin.php",
			data:"username="+username+"&nama="+nama+"&password="+password+"&level="+level,
			success: function(data){
			$(".warning").html(data)
			}
			})
	});
       
   });
// ]]></script>

</head>
<body>



<div class="header">
	<div class="main1">
		<div class="logo">STEKOMINDO - Ujian Online</div>
    	<div class="navbar"><a href="master.php">Hi, <?php echo $data['nama_user']; ?> !</a> | <a href="list_operator.php">admin</a> | <a href="logout.php">keluar</a><br /></div>	
	</div>

</div>
<div style="border: 1px solid #dedede;background:#FFF; width:100%; height:60px; position:fixed; top:50px; left:0; box-shadow: 1px 1px 16px 0px #CCC; "></div>
<div class="main"><h3><a href="list_operator.php">List Admin</a> | <a href="tambah_operator.php">Tambah Admin</a></h3><br/>
<div class="warning"></div>
<form action="" method="post" id="form">
<table width="273" height="197">
  <tr>
    <td width="65">nama</td>
    <td width="119"><label for="textfield"></label>
      <input type="text" name="textfield" id="nama" /></td>
  </tr>
  <tr>
    <td>username</td>
    <td><label for="textfield2"></label>
      <input type="text" name="textfield2" id="username" /></td>
  </tr>
  <tr>
    <td>password</td>
    <td><label for="textfield3"></label>
      <input type="password" name="textfield3" id="password" required="required" /></td>
  </tr>
  <tr>
    <td>level</td>
    <td><label for="select"></label>
      <select name="select" id="level">
      <option selected="selected">--pilih level--</option>
      <option value="operator">Operator</option>
      <option value="master">Master</option>
      </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="button" name="button" id="simpan" value="Simpan" /></td>
  </tr>
</table>

</form>
</div>

<div class="footer">2015 Copyright STEKOMINDO created by pilopa</div>
</body>
</html>