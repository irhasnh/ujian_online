<?php
include 'cek_login_mhs.php';
include 'proses/koneksi.php';
date_default_timezone_set('Asia/Jakarta');
$npm=$_POST['npm'];
$kelas=$_POST['kelas'];
$semester=$_POST['semester'];
$matkul=$_POST['matkul'];
$id_soal=$_POST['id_soal'];
$id_sudah=$npm.$kelas.$semester.$matkul;
$sudah='sudah';
$tanggal_isi=date("F j, Y, g:i a");



 $jumlahinput = count($_POST['jawaban']);

 if ($jumlahinput == 0) {

  echo 'input kosong';

 } else {

  for($i=0; $i < $jumlahinput; $i++) {
	$no=$i+1;
	$nos=$no++;
	
   $no_soala=$_POST['no_soal'][$i];

   $jawaban=$_POST['jawaban'][$i];

   $simpan  = $mysqli->query("insert into jawaban (npm, id_soal, no_soal, jawaban) values ('$npm', '$id_soal', '$no_soala', '$jawaban')");
  }

   if ($simpan){
	   
	   $update=$mysqli->query("insert into sudah (id_sudah,  matkul, keterangan, tanggal_isi) values ('$id_sudah', '$matkul', '$sudah', '$tanggal_isi' )");
	   if($update){
		   $sql = $mysqli->query("SELECT jawaban FROM jawaban WHERE npm='$npm' AND id_soal='$id_soal'") or die (mysql_error()); 
	   $jawaban=array(); 
	   $jsoal=$sql->num_rows;
	   while($data=$sql->fetch_row()){
		    
			 $jawaban[]=$data[0];
			}
			 ?>
        
         <?php 
		 $sql1= $mysqli->query("SELECT jwb_benar FROM soal WHERE id_soal='$id_soal'") or die(mysql_error()); 
		 $benar=array();
		  while($data=$sql1->fetch_row()){
			   
			   $benar[]=$data[0];
			   } 
			   $hasil= array_intersect_assoc($jawaban,$benar); 
			   $hasil1=count($hasil);
			   
			   $hasil_akhir=($hasil1/$jsoal)*100;
			   
			   $simpan_nilai= $mysqli->query("insert into nilai (npm, id_soal, nilai, jumlah_benar, jumlah_soal, matkul, kelas, semester) values ('$npm', '$id_soal', '$hasil_akhir', '$hasil1', '$jsoal', '$matkul', '$kelas', '$semester')");
			   if($simpan_nilai){
				   echo '<script language="javascript">alert("terimakasih!"); document.location="mhs.php";</script>';
			   }
		  else{
			  echo'gagal simpan nilai';
		  }
	   }
	    else{
			echo'gagal update';
		}
		
		}

    else{  echo 'gagal';}

  

 }


?>
