<?php 
include 'cek_login_mhs.php';
include'proses/koneksi.php';
$npm=$_SESSION['mahasiswa'];

$sql_nilai=$mysqli->query("select * from nilai where npm='$npm'") or die (mysql_error());
$hitung=$sql_nilai->num_rows;

$no=1;

if($hitung==0){
	echo 'Maaf, Belum ada data';
}
else{
	?>
    <table width="auto">
    <tr><td><b>No.</b></td><td><b>Matakuliah</b></td><td><b>jawaban benar</b></td><td><b>jumlah soal</b></td><td><b>Nilai</b></td></tr>
    <?php
    while($hasil=$sql_nilai->fetch_array()){
		
		?>
    
		<tr><td><?php echo $no++; ?>.</td><td><?php echo $hasil['matkul']; ?></td><td><?php echo $hasil['jumlah_benar']; ?></td><td><?php echo $hasil['jumlah_soal']; ?></td><td><?php echo $hasil['nilai']; ?></td></tr>
    <?php
	}
	?>
    </table>
<?php
}
?>