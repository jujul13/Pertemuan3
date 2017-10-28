<?php//logout.php

session_start();

$_SESSION['login'] = null;
header('Location: login.php');

?>