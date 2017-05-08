<?php
include '../../../proses/koneksi.php';
$jmlh_soal=$_POST['jml_soal'];
$sem=$_POST['sem'];
$kelas=$_POST['kls'];
$matkul=$_POST['matkul'];

if (isset($_POST['simpan'])) {

 $jumlahinput = count($_POST['soal']);

 if ($jumlahinput == 0) {

  echo 'input kosong';

 } else {

  for($i=0; $i < $jumlahinput; $i++) {
	$no=$i+1;
	$nos=$no++;
	$id=$sem.$kelas.$matkul;
   $soal = $_POST['soal'][$i];

   $nilai  = $mysqli->real_escape_string($_POST['jawaban'][$i]);

   $simpan  = $mysqli->query("insert into soal (id_soal, no_soal,soal, jwb_benar, jmlh_soal, semester, kelas, matkul) values ('$id', '$nos', '$soal', '$nilai', '$jmlh_soal', '$sem', '$kelas', '$matkul')");

   

  }
if ($simpan){
	 echo '<script language="javascript">alert("berhasil!"); document.location="tambah_soal.php"; </script>';

	 }

    else{  
	echo 'gagal';
	}
 }

}

?>