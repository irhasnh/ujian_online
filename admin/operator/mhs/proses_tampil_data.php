<?php
include'../../../proses/koneksi.php';
$kelas=$_GET['kelas'];
if($kelas=='--pilih kelas--'){
	echo'<font style="color:#F00">pilih kelas terlebih dahulu</font>';
}
else{
$query=$mysqli->query("select * from mahasiswa where kelas='$kelas'");
$no=1;
if($query->num_rows==0){
	echo'<font style="color:#F00">tidak ada data</font>';
}
else{
	echo'<table>';?>
	<tr align="center">
	<td><b>no.</b></td><td><b>npm</b></td><td><b>nama</b></td><td><b>kelas</b></td><td><b>semester</b></td><td><b>action</b></td>
	</tr>
    <?php 
	while($data=$query->fetch_array()){?>
	<tr >
	<td><?php echo $no++ ?></td><td><?php echo $data['npm'];?></td><td><?php echo $data['nama_mhs']; ?></td><td><?php echo $data['kelas']; ?></td><td><?php echo $data['semester']; ?></td><td><a href="edit.php?npm=<?php echo $data['npm']; ?>">edit</a> | <a id="delete" href="delete.php?npm=<?php echo $data['npm']; ?>">hapus</a></td>
	</tr>
	<?php 
	}
	?>
    <?php
	echo'</table>';
}
}
?>