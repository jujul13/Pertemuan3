<h1> LOGIN KONTAK </h1>
<?php
 session_start();
 if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
	 header('Location: index.php');
 }
?>
<h1>Login</h1>
<form action="proses_login.php" method="post" />

Username:
<input type="text" name="username" />
<br />
Password:
<input type="text" name="password" />
<input type="submit" value="Login" />


<h4>Belum ada akun ? Daftar</h4><a href="form_regis.php">disini</a>
</form>