<?php
include'../../html2pdf_v3.31/html2pdf.class.php';
include'../../proses/koneksi.php';

$matkul=$_POST['matkul'];
$kelas=$_POST['kelas'];

if($matkul=='-- Pilih --' || !isset($matkul)){
	echo 'pilih dulu matakuliah';
}
elseif($kelas=='-- Pilih --' || !isset($kelas)){
	echo 'pilih dulu kelas';
}
else{
	ob_start();
	?>
	<img src="../../gambar/logo-01.jpg" width="70" style="float:left;"  />
    <p style="float:left; margin-left:80px;"  >
    <b>STEKOMINDO</b><br/>
    Sains Teknologi Komunikasi Dan Komputer Indonesia<br/>
    Jl. Pagar Alam No. 102b 35152 Bandar Lampung <br/>
    Phone: +62822 8054 2915, +62721 7501300 E-mail: admin@stekomindo.or.id
    </p>
    <hr/>
    <p style="text-align:center; margin-top:0px;">
    <u><b>Laporan Nilai UAS Online</b></u><br/><br/>
    Matakuliah: <?php echo $matkul;?> <?php for($i=1;$i<25;$i++){ echo '&nbsp;';}?> Kelas: <?php echo $kelas;?>
    </p>
    <table border="1" bordercolor="#000000" cellspacing="0">
    <tr >
    <td ><b>No.<?php for($i=1;$i<10;$i++){ echo '&nbsp;';}?></b></td>
    <td><b>Nirm<?php for($i=1;$i<20;$i++){ echo '&nbsp;';}?></b></td>
    <td><b>Nama<?php for($i=1;$i<20;$i++){ echo '&nbsp;';}?></b></td>
    <td><b>Jumlah Benar<?php for($i=1;$i<10;$i++){ echo '&nbsp;';}?></b></td>
    <td><b>Jumlah Soal<?php for($i=1;$i<10;$i++){ echo '&nbsp;';}?></b></td>
    <td><b>Nilai<?php for($i=1;$i<10;$i++){ echo '&nbsp;';}?></b></td>
    <td><b>Waktu Pengerjaan<?php for($i=1;$i<10;$i++){ echo '&nbsp;';}?></b></td>
    </tr>
    <?php
	$tampil=$mysqli->query("select * from nilai where matkul='$matkul' and kelas='$kelas'");
	$no=1;
	while($data=$tampil->fetch_array()){
		$npm=$data['npm'];
		?>
        <tr>
		<td><?php echo $no++; ?>.</td>
        <td><?php echo $npm; ?></td>
        <?php
		$nama=$mysqli->query("select * from mahasiswa where npm='$npm' ");
		while($data1=$nama->fetch_array()){
			?>
            <td><?php echo $data1['nama_mhs']; ?></td>
            <?php
			}
			?>
            <td><?php echo $data['jumlah_benar']; ?></td>
            <td><?php echo $data['jumlah_soal']; ?></td>
            <td><?php echo number_format($data['nilai'],2); ?></td>
            <?php
			$idSudah=$npm.$data['kelas'].$data['semester'].$data['matkul'];
			$jam=$mysqli->query("select * from sudah where id_sudah='$idSudah'");
			while($data2=$jam->fetch_array()){
				?>
                <td><?php echo $data2['tanggal_isi']; ?></td>
                
                <?php
			
			
		}
		?>
        </tr>
        <?php
	}
	
	?>
    </table>
    <br/>
    <?php for($i=1;$i<135;$i++){ echo '&nbsp;';}?>Bandar Lampung, <?php echo date('d M Y');?><br/>
    <?php
	$content=ob_get_clean();  
	
	$html2pdf=new HTML2PDF('P', 'A4');
	$html2pdf->setDefaultFont('Arial');  
    $html2pdf->writeHTML($content);  
    $html2pdf->Output('Nilai.pdf'); 
}
?>