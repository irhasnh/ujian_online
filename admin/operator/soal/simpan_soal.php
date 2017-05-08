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
<title>buat soal</title>
<link href="../../../style1.css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="../../../tinymce_3.5.11/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
		tinyMCE.init({
        	mode : "textareas"
		});
</script>
</head>

<body>
<div class="header">
	<div class="main1">
		<div class="logo">STEKOMINDO - Ujian Online</div>
    	<div class="navbar"><a href="../operator.php">Hi, <?php echo $data['nama_user']; ?> !</a> | <a href="../mhs/mahasiswa.php">mahasiswa</a> | <a href="soal.php">Soal</a> | <a href="../nilai.php">Nilai</a> | <a href="../logout.php">keluar</a><br /></div>	
	</div>

</div>


<div class="main"><h3><a href="soal.php">List Soal</a> | <a href="tambah_soal.php">Buat Soal</a></h3><br/>
<?php

if(isset($_POST['buat'])){
$jml_soal=$_POST['jumlah'];
$smstr=$_POST['semester'];
$kelas=$_POST['kelas'];
$matkul=$_POST['matkul'];?>
<form action="proses_simpan.php" method="post">
<div style="border: 1px solid #dedede;background:#FFF; width:100%; height:60px; position:fixed; top:50px; left:0; box-shadow: 1px 1px 16px 0px #CCC; ">
<div style="max-width: 780px; margin-left:auto; margin-right:auto; padding:10px; text-align:right;">
    <input name="simpan" type="submit" value="Publikasikan" />
    </div>
    </div>



<table width="520">
  <tr>
    <td>jumlah soal</td>
    <td><input name="jml_soal" type="text" value="<?php echo $jml_soal; ?>" readonly="readonly" /></td>
    <td>kelas</td>
    <td><input name="kls" type="text" value="<?php echo $kelas; ?>" readonly="readonly" /></td>
  </tr>
  <tr>
    <td>semester</td>
    <td><input name="sem" type="text" value="<?php echo $smstr; ?>" readonly="readonly" /></td>
    <td>Matakuliah</td>
    <td><input name="matkul" type="text" value="<?php echo $matkul; ?>" readonly="readonly" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<br/>
<?php
for ($x=1; $x<=$jml_soal; $x++)  
{ ?> <br/>

   
  <table width="550" border="0">
  <tr>
    <td align="right" valign="top">Soal: </td>
    <td><?php echo $x; ?></td>
  </tr>
  <tr>
    <td width="194" align="right" valign="top">masukan pertanyaan:</td>
    <td width="287"><label for="textarea"></label>
      <textarea name="soal[]" cols="70" rows="15" placeholder="Tulis Soal Disini..."></textarea></td>
  </tr>
  <tr>
    <td align="right" valign="top">jawaban benar:</td>
    <td><label for="select"></label>
      <select name="jawaban[]" id="select" >
      <option selected="selected">--pilih--</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
      <option value="E">E</option>
      </select></td>
  </tr>
</table>


<?php
} 
?>

</form>
<?php
}
?>

</div>

</body>
</html>