<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
  <div class="login-page">
  <div class="form">
    <h3>Page Login</h3>
    <form class="login-form" method="POST" action="cekLogin.php">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button type="submit">login</button>      
    </form>
  </div>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="public/js/index.js"></script>
</body>
</html>
