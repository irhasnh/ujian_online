<?php
include 'cek_login_mhs.php';
?>
<?php
include'proses/koneksi.php';
$npm=$_SESSION['mahasiswa'];
$sql = $mysqli->query("SELECT * FROM mahasiswa where npm='$npm'") or die(mysql_error());

$data=$sql->fetch_array();
?>
<table width="242" height="144" >
  <tr>
    <td width="73">NPM</td>
    <td width="115"><?php echo $npm; ?></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><?php echo $data['nama_mhs'];  ?></td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td><?php echo $data['kelas']; ?></td>
  </tr>
  <tr>
    <td>Semester</td>
    <td><?php echo $data['semester'];?></td>
  </tr>
</table>

