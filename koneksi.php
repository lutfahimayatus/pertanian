<?php  
$server 	= "localhost";
$username 	= "root";
$password 	= "";
$db 		= "tokopertanian";
$koneksi = mysqli_connect($server, $username, $password, $db);

if (mysqli_connect_errno()) {
	echo "Koneksi gagal : " ;
}
?>