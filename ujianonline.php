<?php
include 'cek_login_mhs.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ujian online</title>
<link href="style1.css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
 
   $(document).ready(function() {
      /** Membuat Waktu Mulai Hitung Mundur Dengan 
       * var detik = 0,
       * var menit = 1,
       * var jam = 1
       */
       var detik = 0;
       var menit = 20;
       var jam = 0;
	  
 
      /**
       * Membuat function hitung() sebagai Penghitungan Waktu
       */
       function hitung() {
          /** setTimout(hitung, 1000) digunakan untuk 
	   *  mengulang atau merefresh halaman selama 1000 (1 detik) */
	   setTimeout(hitung,1000);
 
	  /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
	   $('#timer').html( 'Sisa Waktu : ' + jam + ' Jam - ' + menit + ' Menit - ' + detik + ' Detik ');
 
	  /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
	   detik --;
 
	  /** Jika var detik < 0
	   *  var detik akan dikembalikan ke 59
	   *  Menit akan Berkurang 1
	   */
	   if(detik < 0) {
	      detik = 59;
	      menit --;
 
	      /** Jika menit < 0
	       *  Maka menit akan dikembali ke 59
	       *  Jam akan Berkurang 1
	       */
	       if(menit < 0) {
 			
 		      			$.ajax({
							type:"POST",
							url:"proses_simpan_jawaban.php",
							data:$("#form").serialize(),
							success: function(data){
								alert("waktu habis !");
								clearInterval();
								window.location = "mhs.php";
							}
						})
						
		  /** Jika var jam < 0
		   *  clearInterval() Memberhentikan Interval 
		   *  Dan Halaman akan membuka http://tahukahkau.com/
		   */
		  
	       }
	   } 		
        }
 	/** Menjalankan Function Hitung Waktu Mundur */
        hitung();
   });
// ]]></script>

</head>

<body>

<?php
include'proses/koneksi.php';
$npm=$_SESSION['mahasiswa'];
$sql = $mysqli->query("SELECT * FROM mahasiswa where npm='$npm'") or die(mysql_error());

$data=$sql->fetch_array();

$nama=$data['nama_mhs'];
$kelas=$data['kelas'];
$semester=$data['semester'];
$matkul=$_POST['matkul'];
$id_soal=$semester.$kelas.$matkul;
?>
<div class="header">
	<div class="main1">
		<div class="logo">STEKOMINDO - Ujian Online</div>
    	<div class="navbar"><a href="profil.php">Hi, <?php echo $data['nama_mhs']; ?> !</a> | <a href="nilai.php">Nilai</a> | <a href="mhs.php">Ujian</a>  |  <a href="logout.php">keluar</a><br /></div>	
	</div>

</div>
<div class="main">

<form action="proses_simpan_jawaban.php" method="post" id="form">


<?php
$id_sudah=$npm.$kelas.$semester.$matkul;
$sudah = $mysqli->query("SELECT * FROM sudah where id_sudah='$id_sudah' and matkul='$matkul'") or die(mysql_error());

$data_sudah=$sudah->fetch_array();
$keterangan=$data_sudah['keterangan'];

if($keterangan=='sudah'){
	echo'maaf anda sudah pernah mengikuti ujian ini atau silahkan hubungi baak';
}
else{
	
	$soal = $mysqli->query("SELECT * FROM soal where id_soal='$id_soal'") or die(mysql_error());
	if($soal->num_rows==0){
		echo 'maaf soal belum ada';
	}else{?>
    <div style="border: 1px solid #dedede;background:#FFF; width:100%; position:fixed; top:50px; left:0; box-shadow: 1px 1px 16px 0px #CCC; ">
    <div style="max-width: 780px; margin-left:auto; margin-right:auto; padding:10px; text-align:right;">
    <div id='timer' style="color:#F00;"></div><input name="simpan" type="submit" value="simpan &amp; keluar" />
    </div>
    </div>
    <h3>Petunjuk Umum:</h3>
	1. periksa dan bacalah soal dengan teliti sebelum anda menjawab<br/>
    2. gunakan waktu dengan efektif dan efesien<br/>
    3. periksalah kembali pekerjaan anda sebelum mengklik tombol simpan & keluar<br/>
    4. jumlah soal sebanyak <?php echo $soal->num_rows; ?><br/><br/>
<table width="auto" >
  <tr>
    <td width="48">npm</td>
    <td width="152"><label for="textfield"></label>
      <input type="text" name="npm" id="npm" value="<?php echo $npm; ?>" readonly="readonly" /></td>
    <td width="148">semester</td>
    <td width="10"><label for="textfield4"></label>
      <input type="text" name="semester" id="semester" value="<?php echo $semester; ?>" readonly="readonly" /></td>
  </tr>
  <tr>
    <td>nama</td>
    <td><label for="textfield2"></label>
      <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>" readonly="readonly" /></td>
    <td>matakuliah</td>
    <td><label for="textfield5"></label>
      <input type="text" name="matkul" id="matkul" value="<?php echo $matkul; ?>" readonly="readonly" /></td>
  </tr>
  <tr>
    <td>kelas</td>
    <td><label for="textfield3"></label>
      <input type="text" name="kelas" id="kelas" value="<?php echo $kelas;?>" readonly="readonly" /></td>
    <td>id_soal</td>
    <td><label for="textfield6"></label>
      <input type="text" name="id_soal" id="id_soal" value="<?php echo $id_soal; ?>" readonly="readonly" /></td>
  </tr>
</table><br/><br/>
		    
		<?php 
	while($data_soal=$soal->fetch_array()){
		$no_soal=$data_soal['no_soal'];
		$pertanyaan=$data_soal['soal'];
		?>
  <table width="auto" height="auto" border="0">
  <tr>
    <td  rowspan="2" align="left" valign="top">No.  <label for="textfield7"></label>
      <input type="text" name="no_soal[]" id="no_soal" style="width:30px;" value="<?php echo $no_soal; ?>" readonly="readonly" /></td>
    <td ><?php echo trim(nl2br(htmlspecialchars(stripslashes($pertanyaan)))); ?> <br/> </td>
    </tr>
  <tr>
    <td><label for="select"></label>
      <select name="jawaban[]" id="jawaban">
        <option selected="selected">--pilih jawaban--</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
      </select></td>
    </tr>
</table>
<br/>

<?php
	}
	?>
</form>
    <?php
}
}
?>
</div>
<div class="footer">2015 Copyright STEKOMINDO created by pilopa</div>

</body>
</html>