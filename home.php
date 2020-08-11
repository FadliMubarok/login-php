<html>
<?php session_start(); ?>
<head>
	<title>Home</title>
</head>
<body>
	Selamat Anda, <?php echo $_SESSION['username'] ?> Telah Login..
	<br>
	<a href="logout.php">Logout</a>
</body>
</html>