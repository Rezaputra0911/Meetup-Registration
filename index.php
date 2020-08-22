<?php 

$servername = "localhost";
$username = "root";
$password = "";

//create connection
$conn1 = new mysqli($servername, $username, $password);

//check connection
if($conn1->connect_error){
	die("Connection failed: " . $conn1->connect_error);
}


//create database
$sql = "CREATE DATABASE db_sem";
if($conn1->query($sql) === TRUE){
	echo 'Database created';
}else{
	echo'Error Creating database :' . $conn->connect_error;
}


//create table
$conn2 = mysqli_connect('localhost','root','','db_sem');

$sql = "CREATE TABLE tbl_login (
		username varchar(20) primary key,
		password varchar(20) not null,
		privilage varchar(20) not null,
		user_sem varchar(30))";

$create = mysqli_query($conn2, $sql);



$sql = "CREATE TABLE tbl_rekap (
		nama_sem varchar(100) not null,
		jadwal varchar(25) not null,
		penanggungjawab varchar(15) not null,
		jml_pes int(10),
		id_rekap int(10) primary key auto_increment
		)";
$create = mysqli_query($conn2, $sql);



$sql = "CREATE TABLE tbl_seminar (
		nama_sem varchar(100) not null,
		jadwal date not null,
		tempat varchar(50) not null,
		narasumber varchar(50) not null,
		penanggungjawab varchar(40) not null,
		jml_peserta int(50),
		username varchar(50) primary key,
		status varchar(15) not null,
		paper varchar(25),
		pembayaran varchar(25),
		waktu varchar(20) not null,
		poster varchar(100),
		password varchar(50) not null
		)";

$create = mysqli_query($conn2, $sql);



$sql = "INSERT INTO tbl_login VALUES ('kalbis', '12345', 'admin', NULL)";
$insert = mysqli_query($conn2, $sql);

//header
header('location: home.php');


 ?>