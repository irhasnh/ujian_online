<?php
include'../../proses/koneksi.php';

$query=$mysqli->query("select * from user");
$no=1;
if($query->num_rows==0){
	echo'belum ada data';
}
else{
	echo'<table>';?>
	<tr align="center">
	<td><b>no.</b></td><td><b>nama</b></td><td><b>username</b></td><td><b>password</b></td><td><b>level</b></td><td><b>action</b></td>
	</tr>
    <?php 
	while($data=$query->fetch_array()){?>
	<tr >
	<td><?php echo $no++ ?></td><td><?php echo $data['nama_user'];?></td><td><?php echo $data['username']; ?></td><td><?php echo $data['password']; ?></td><td><?php echo $data['level']; ?></td><td><a href="edit.php?id_user=<?php echo $data['id_user']; ?>">edit</a> | <a href="delete.php?id_user=<?php echo $data['id_user']; ?>">hapus</a></td>
	</tr>
	<?php 
	}
	?>
    <?php
	echo'</table>';
}
?>