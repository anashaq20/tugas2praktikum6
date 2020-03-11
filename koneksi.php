<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'mydb';

//Create Connection
$conn = mysqli_connect($servername,$username,$password,$database);
//Check Koneksi
if (!$conn) {
	die("Connection failed : ". mysqli_connect_error());
}
?>