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
<script src="../../../jquery/jquery-1.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#simpan").click(function(){
        $("#warning").html("loading....");
      var npm= $("#npm").val();
	  var nama=$("#nama").val();
	  var kelas=$("#kelas").val();
	  var semester=$("#semester").val();
	  var password=$("#password").val();

	  
	  $.ajax({
			
			url:"proses_simpan_mhs.php",
			data:"npm="+npm+"&nama="+nama+"&kelas="+kelas+"&semester="+semester+"&password="+password,
			success: function(data){
			$("#warning").html(data)
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
    	<div class="navbar"><a href="../operator.php">Hi, <?php echo $data['nama_user']; ?> !</a> | <a href="mahasiswa.php">mahasiswa</a> | <a href="../soal/soal.php">Soal</a> | <a href="../nilai.php">Nilai</a> | <a href="../logout.php">keluar</a><br /></div>	
	</div>

</div>
<div style="border: 1px solid #dedede;background:#FFF; width:100%; height:60px; position:fixed; top:50px; left:0; box-shadow: 1px 1px 16px 0px #CCC; "></div>
<div class="main"><h3><a href="mahasiswa.php">List Mahasiswa</a> | <a href="tambah_data_mhs.php">Tambah Mahasiswa</a></h3><br/>
<div id="warning"></div>
<form action="proses_simpan_mhs.php" method="post">
<table width="345" height="239">
  <tr>
    <td width="73">npm</td>
    <td width="243"><label for="textfield"></label>
      <input type="text" name="npm" id="npm" /></td>
    </tr>
  <tr>
    <td>nama</td>
    <td><label for="textfield2"></label>
      <input type="text" name="nama" id="nama" /></td>
    </tr>
  <tr>
    <td>kelas</td>
    <td><label for="textfield3"></label>
      <label for="select2"></label>
      <select name="kelas" id="kelas">
        <option selected="selected">kelas</option>
        <option value="MI-J">MI-J</option>
        <option value="MI-K">MI-K</option>
        <option value="MI-L1">MI-L1</option>
        <option value="MI-L2">MI-L2</option>
        <option value="MI-M">MI-M</option>
        <option value="MI-N">MI-N</option>
        <option value="MI-P">MI-P</option>
        <option value="MI-Q">MI-Q</option>
        <option value="MI-R">MI-R</option>
        <option value="MI-T">MI-T</option>
        <option value="PGMI-A">PGMI-A</option>   
        <option value="PGMI-B">PGMI-B</option> 
        <option value="PGMI-C">PGMI-C</option>   
        <option value="PGMI-D">PGMI-D</option>   
        <option value="BKI-A">BKI-A</option>   
        <option value="BKI-B">BKI-B</option> 
      </select></td>
    </tr>
  <tr>
    <td>semester</td>
    <td><label for="select"></label>
      <select name="semester" id="semester">
        <option selected="selected">semester</option>
        <option value="I">I</option>
        <option value="II">II</option>
        <option value="III">III</option>
        <option value="IV">IV</option>
        <option value="V">V</option>
        <option value="VI">VI</option>
        <option value="VII">VII</option>
        <option value="VIII">VIII</option>
      </select></td>
    </tr>
  <tr>
    <td>password</td>
    <td><label for="textfield5"></label>
      <input type="password" name="password" id="password" /></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="button" name="simpan" id="simpan" value="Simpan" /></td>
    </tr>
</table>
</form>
</div>

<div class="footer">2015 Copyright STEKOMINDO created by pilopa</div>
</body>
</html>