<?php 
include 'koneksi.php';	

	$user = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars($_POST["username"], ENT_QUOTES))));
	$pass = md5(mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars($_POST["password"], ENT_QUOTES)))));
	$sql = ("SELECT * FROM user WHERE username='$user' AND password='$pass'");

	$kueri = mysqli_query($koneksi, $sql);
	$keadaan = mysqli_num_rows($kueri);
	if ($keadaan > 0) {
		$data = mysqli_fetch_array($kueri);
		session_start();		
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];		
		$_SESSION['timeout'] = time()+3600;
		header('location:home.php');
	}else{
		echo "<center>Login gagal,Username atau password salah, silahkan<br />";
		echo "<a href='index.php'>Login Kembali</a></center>";
	}

?>