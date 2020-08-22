<?php
$action = $_GET['action'];
$username = $_GET['username'];

if($action == 'paper'){
	$file = $_GET['file'];
	$path = "../uploads/paper/".$username."/".$file;
	if(file_exists($path)){
		header('Content-Description: File Transfer');
		header('Content-Type: application/pdf');
		header('Content-Disposition: attachment; filename = '.basename($file).'');
		header('Expires: 0');
		header('Cache-Control: public');
		header('Pragma: public');
		header('Content-Length: ' .filesize($file));
		readfile($path);
		exit;
	}
}

if($action == 'pembayaran'){
	$file = $_GET['file'];
	$path = "../uploads/gambar/pembayaran/".$username."/".$file;
	if(file_exists($path)){
		header('Content-Description: File Transfer');
		header('Content-Type: image/jpg');
		header('Content-Disposition: attachment; filename = '.basename($file).'');
		//header('Expires: 0');
		header('Cache-Control: public');
		//header('Pragma: public');
		header('Content-Length: ' .filesize($file));
		readfile($path);
		
		exit;
	}
}






















?>