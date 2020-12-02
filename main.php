<?php
include('koneksi.php');
	$p=isset($_GET['p']) ? $_GET['p'] : 'home';
	if($p=='home')include 'home.php';
	if($p=='buku')include 'buku.php';
	if($p=='kategori')include 'kategori.php';
	if($p=='pengarang')include 'pengarang.php';
	if($p=='penerbit')include 'penerbit.php';
	if($p=='user')include 'user.php';
	if($p=='login')include 'login.php';
	if($p=='logout')include 'logout.php';
	
?>