<?php
$host='localhost';
$user='root';
$pass='';
$db_name='ujian';

$mysqli = new mysqli( $host, $user, $pass, $db_name );

if ($mysqli->connect_error){
echo "Gagal terkoneksi ke database : (".$mysqli->connect_error.")";
}

?>